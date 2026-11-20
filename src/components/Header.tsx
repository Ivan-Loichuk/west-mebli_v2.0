"use client";

import Link from "next/link";
import { useEffect, useState } from "react";
import { MapPin, Menu, Phone, X } from "lucide-react";
import { nav, site } from "@/content/site";
import { Logo } from "./Logo";

export function Header() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40);
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  return (
    <>
      <div className="bg-ink-950 text-sm text-white/75">
        <div className="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-x-6 gap-y-1 px-4 py-2">
          <span className="flex items-center gap-1.5">
            <MapPin className="size-4 text-brand-400" aria-hidden />
            {site.city}
          </span>
          <span className="flex flex-wrap gap-x-5">
            {site.phones.map((p) => (
              <a key={p.href} href={p.href} className="flex items-center gap-1.5 hover:text-white">
                <Phone className="size-4 text-brand-400" aria-hidden />
                {p.display}
              </a>
            ))}
          </span>
        </div>
      </div>

      <header
        className={`sticky top-0 z-50 bg-ink-900/95 backdrop-blur transition-shadow ${
          scrolled ? "shadow-lg shadow-black/20" : ""
        }`}
      >
        <div className="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
          <Link href="/" aria-label="Меблі на замовлення, Рівне — на головну" onClick={() => setOpen(false)}>
            <Logo showCity />
          </Link>

          <nav aria-label="Головне меню" className="hidden md:block">
            <ul className="flex gap-1">
              {nav.map((item) => (
                <li key={item.href}>
                  <Link
                    href={item.href}
                    className="rounded-md px-3 py-2 text-[15px] font-semibold text-white/85 transition-colors hover:bg-white/10 hover:text-white"
                  >
                    {item.label}
                  </Link>
                </li>
              ))}
            </ul>
          </nav>

          <button
            type="button"
            className="rounded-md p-2 text-white hover:bg-white/10 md:hidden"
            aria-expanded={open}
            aria-controls="mobile-menu"
            aria-label={open ? "Закрити меню" : "Відкрити меню"}
            onClick={() => setOpen((v) => !v)}
          >
            {open ? <X className="size-6" /> : <Menu className="size-6" />}
          </button>
        </div>

        {open && (
          <nav id="mobile-menu" aria-label="Мобільне меню" className="border-t border-white/10 md:hidden">
            <ul className="mx-auto max-w-6xl px-4 py-2">
              {nav.map((item) => (
                <li key={item.href}>
                  <Link
                    href={item.href}
                    onClick={() => setOpen(false)}
                    className="block rounded-md px-3 py-3 font-semibold text-white/90 hover:bg-white/10"
                  >
                    {item.label}
                  </Link>
                </li>
              ))}
            </ul>
          </nav>
        )}
      </header>
    </>
  );
}
