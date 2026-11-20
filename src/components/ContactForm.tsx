"use client";

import { useActionState } from "react";
import { CircleAlert, CircleCheck, LoaderCircle, Send } from "lucide-react";
import { sendContactMessage, type ContactState } from "@/lib/contact";

const fields = [
  { name: "name", label: "Як до вас звертатися?", type: "text", autoComplete: "name" },
  { name: "email", label: "Електронна адреса", type: "email", autoComplete: "email" },
  { name: "phone", label: "Телефон", type: "tel", autoComplete: "tel" },
] as const;

const inputClass =
  "mt-1.5 w-full rounded-md border border-ink-500/30 bg-white px-3.5 py-2.5 text-ink-900 outline-none transition focus:border-brand-600 focus:ring-2 focus:ring-brand-400/40 aria-invalid:border-red-600";

export function ContactForm() {
  const [state, action, pending] = useActionState<ContactState, FormData>(sendContactMessage, { status: "idle" });

  if (state.status === "success") {
    return (
      <div role="status" className="flex flex-col items-center rounded-xl bg-brand-50 p-10 text-center ring-1 ring-brand-100">
        <CircleCheck className="size-12 text-brand-600" aria-hidden />
        <p className="mt-4 text-xl font-bold text-ink-900">{state.message}</p>
      </div>
    );
  }

  const v = state.values;
  const err = state.fieldErrors ?? {};

  return (
    <form action={action} noValidate className="space-y-4">
      {fields.map((f) => (
        <div key={f.name}>
          <label htmlFor={f.name} className="text-sm font-semibold text-ink-800">
            {f.label}
          </label>
          <input
            id={f.name}
            name={f.name}
            type={f.type}
            autoComplete={f.autoComplete}
            required
            defaultValue={v?.[f.name]}
            aria-invalid={!!err[f.name]}
            aria-describedby={err[f.name] ? `${f.name}-error` : undefined}
            className={inputClass}
          />
          {err[f.name] && (
            <p id={`${f.name}-error`} className="mt-1 text-sm text-red-700">
              {err[f.name]}
            </p>
          )}
        </div>
      ))}
      <div>
        <label htmlFor="message" className="text-sm font-semibold text-ink-800">
          Повідомлення
        </label>
        <textarea
          id="message"
          name="message"
          rows={5}
          required
          defaultValue={v?.message}
          aria-invalid={!!err.message}
          aria-describedby={err.message ? "message-error" : undefined}
          className={inputClass}
        />
        {err.message && (
          <p id="message-error" className="mt-1 text-sm text-red-700">
            {err.message}
          </p>
        )}
      </div>
      <div aria-hidden className="absolute -left-[9999px]">
        <label>
          Компанія <input name="company" tabIndex={-1} autoComplete="off" />
        </label>
      </div>

      {state.status === "error" && state.message && (
        <p role="alert" className="flex items-center gap-2 rounded-md bg-red-50 px-3 py-2 text-sm text-red-800">
          <CircleAlert className="size-4 shrink-0" aria-hidden />
          {state.message}
        </p>
      )}

      <button
        type="submit"
        disabled={pending}
        className="inline-flex w-full items-center justify-center gap-2 rounded-md bg-brand-600 px-5 py-3 font-semibold text-white transition-colors hover:bg-brand-700 disabled:opacity-70 sm:w-auto"
      >
        {pending ? <LoaderCircle className="size-5 animate-spin" aria-hidden /> : <Send className="size-5" aria-hidden />}
        {pending ? "Надсилаємо…" : "Надіслати"}
      </button>
    </form>
  );
}
