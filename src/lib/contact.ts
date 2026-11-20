"use server";

export type ContactState = {
  status: "idle" | "success" | "error";
  message?: string;
  fieldErrors?: Partial<Record<"name" | "email" | "phone" | "message", string>>;
  values?: { name: string; email: string; phone: string; message: string };
};

const escapeHtml = (s: string) =>
  s.replace(/[&<>"']/g, (c) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" })[c]!);

export async function sendContactMessage(_prev: ContactState, formData: FormData): Promise<ContactState> {
  const values = {
    name: String(formData.get("name") ?? "").trim(),
    email: String(formData.get("email") ?? "").trim(),
    phone: String(formData.get("phone") ?? "").trim(),
    message: String(formData.get("message") ?? "").trim(),
  };

  // Honeypot: real visitors never see or fill this field.
  if (String(formData.get("company") ?? "") !== "") return { status: "success", message: "Дякуємо!" };

  const fieldErrors: ContactState["fieldErrors"] = {};
  if (!values.name) fieldErrors.name = "Вкажіть, як до вас звертатися";
  else if (values.name.length > 100) fieldErrors.name = "Занадто довге ім'я";
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(values.email)) fieldErrors.email = "Неправильна електронна адреса";
  const digits = values.phone.replace(/\D/g, "");
  if (!values.phone) fieldErrors.phone = "Вкажіть номер телефону";
  else if (digits.length < 9 || digits.length > 13) fieldErrors.phone = "Неправильний номер телефону";
  if (!values.message) fieldErrors.message = "Введіть своє повідомлення";
  else if (values.message.length > 5000) fieldErrors.message = "Повідомлення занадто довге";

  if (Object.keys(fieldErrors).length > 0) {
    return { status: "error", message: "Перевірте, будь ласка, поля форми.", fieldErrors, values };
  }

  const apiKey = process.env.RESEND_API_KEY;
  if (!apiKey) {
    if (process.env.NODE_ENV !== "production") {
      console.log("[contact form] RESEND_API_KEY is not set; message not emailed:", values);
      return { status: "success", message: "Повідомлення надіслано. Ми з вами зв'яжемося!" };
    }
    console.error("[contact form] RESEND_API_KEY is not set");
    return {
      status: "error",
      message: "Не вдалося надіслати повідомлення. Зателефонуйте нам, будь ласка.",
      values,
    };
  }

  const rows = [
    ["Відправник", values.name],
    ["Електронна адреса", values.email],
    ["Телефон", values.phone],
    ["Повідомлення", values.message],
  ]
    .map(
      ([k, v]) =>
        `<tr><td style="padding:8px 12px;background:#f4f4f4"><strong>${k}</strong></td><td style="padding:8px 12px;white-space:pre-wrap">${escapeHtml(v)}</td></tr>`,
    )
    .join("");

  const res = await fetch("https://api.resend.com/emails", {
    method: "POST",
    headers: { Authorization: `Bearer ${apiKey}`, "Content-Type": "application/json" },
    body: JSON.stringify({
      from: process.env.CONTACT_FROM_EMAIL || "WEST-MEBLI <onboarding@resend.dev>",
      to: (process.env.CONTACT_TO_EMAIL || "contact@west-mebli.com.ua").split(",").map((s) => s.trim()),
      reply_to: values.email,
      subject: `WEST-MEBLI: нове повідомлення від ${values.name}`,
      html: `<p style="font-size:18px;color:#47701a">Нове повідомлення з сайту WEST-MEBLI</p><table style="border-collapse:collapse;border:1px solid #ddd">${rows}</table>`,
      text: `Відправник: ${values.name}\nЕлектронна адреса: ${values.email}\nТелефон: ${values.phone}\n\n${values.message}`,
    }),
  });

  if (!res.ok) {
    console.error("[contact form] Resend error", res.status, await res.text());
    return { status: "error", message: "Упс! Щось пішло не так. Спробуйте ще раз або зателефонуйте нам.", values };
  }

  return { status: "success", message: "Повідомлення надіслано. Ми з вами зв'яжемося!" };
}
