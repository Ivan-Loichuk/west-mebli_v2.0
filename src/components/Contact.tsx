import { Mail, MapPin, Phone } from "lucide-react";
import { site } from "@/content/site";
import { ContactForm } from "./ContactForm";
import { SectionHeading } from "./SectionHeading";

export function Contact() {
  return (
    <section id="contact" className="bg-white py-20 sm:py-24">
      <div className="mx-auto max-w-6xl px-4">
        <SectionHeading title="Контакт" subtitle="Розкажіть, які меблі вам потрібні, — ми передзвонимо й домовимося про зустріч." />
        <div className="grid gap-12 lg:grid-cols-[1.2fr_1fr]">
          <div>
            <h3 className="mb-5 text-xl font-bold">Зворотний зв'язок</h3>
            <ContactForm />
          </div>
          <aside className="h-fit rounded-xl bg-ink-900 p-8 text-white">
            <p className="text-sm font-semibold uppercase tracking-wider text-brand-300">Ваш менеджер</p>
            <p className="mt-1 text-2xl font-bold">{site.contactPerson}</p>
            <ul className="mt-6 space-y-4">
              {site.phones.map((p) => (
                <li key={p.href}>
                  <a href={p.href} className="flex items-center gap-3 text-lg hover:text-brand-300">
                    <Phone className="size-5 text-brand-400" aria-hidden />
                    {p.display}
                  </a>
                </li>
              ))}
              <li>
                <a href={`mailto:${site.email}`} className="flex items-center gap-3 hover:text-brand-300">
                  <Mail className="size-5 text-brand-400" aria-hidden />
                  {site.email}
                </a>
              </li>
              <li className="flex items-center gap-3">
                <MapPin className="size-5 text-brand-400" aria-hidden />
                {site.city}
              </li>
            </ul>
          </aside>
        </div>
      </div>
    </section>
  );
}
