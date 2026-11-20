import Link from "next/link";
import { Mail, MapPin, Phone } from "lucide-react";
import { categories } from "@/content/categories";
import { site } from "@/content/site";

function FacebookIcon(props: React.SVGProps<SVGSVGElement>) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden {...props}>
      <path d="M13.5 21v-7.5h2.5l.4-3h-2.9V8.6c0-.9.3-1.5 1.5-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.8 1.4-3.8 3.9v2.3H8v3h2.5V21h3Z" />
    </svg>
  );
}

export function Footer() {
  return (
    <footer className="bg-ink-950 text-white/70">
      <div className="mx-auto grid max-w-6xl gap-10 px-4 py-14 sm:grid-cols-2 lg:grid-cols-3">
        <div>
          <h2 className="text-lg font-bold text-white">Про нас</h2>
          <p className="mt-3 leading-relaxed">
            Виготовлення корпусних меблів на замовлення в місті Рівному. «WEST-MEBLI» пропонує професійний дизайн і
            виготовлення меблів для вашого дому та офісу.
          </p>
          <a
            href={site.facebook}
            target="_blank"
            rel="noopener noreferrer"
            aria-label="WEST-MEBLI у Facebook"
            className="mt-4 inline-flex size-10 items-center justify-center rounded-full bg-white/10 text-white hover:bg-brand-600"
          >
            <FacebookIcon className="size-5" />
          </a>
        </div>
        <div>
          <h2 className="text-lg font-bold text-white">Зв'яжіться з нами</h2>
          <ul className="mt-3 space-y-2.5">
            <li className="flex items-center gap-2.5">
              <MapPin className="size-4 text-brand-400" aria-hidden />
              {site.city}
            </li>
            {site.phones.map((p) => (
              <li key={p.href}>
                <a href={p.href} className="flex items-center gap-2.5 hover:text-white">
                  <Phone className="size-4 text-brand-400" aria-hidden />
                  {p.display}
                </a>
              </li>
            ))}
            <li>
              <a href={`mailto:${site.email}`} className="flex items-center gap-2.5 hover:text-white">
                <Mail className="size-4 text-brand-400" aria-hidden />
                {site.email}
              </a>
            </li>
          </ul>
        </div>
        <div>
          <h2 className="text-lg font-bold text-white">Наша продукція</h2>
          <ul className="mt-3 grid grid-cols-2 gap-x-4 gap-y-2.5 lg:grid-cols-1">
            {categories.map((c) => (
              <li key={c.slug}>
                <Link href={`/gallery/${c.slug}`} title={c.title} className="hover:text-white">
                  {c.name}
                </Link>
              </li>
            ))}
          </ul>
        </div>
      </div>
      <div className="border-t border-white/10">
        <p className="mx-auto max-w-6xl px-4 py-5 text-sm text-white/50">
          © {new Date().getFullYear()} WEST-MEBLI. Меблі на замовлення, Рівне.
        </p>
      </div>
    </footer>
  );
}
