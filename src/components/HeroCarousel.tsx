"use client";

import Image, { type StaticImageData } from "next/image";
import Link from "next/link";
import { useCallback, useEffect, useState } from "react";
import { ChevronLeft, ChevronRight } from "lucide-react";

export type Slide = { image: StaticImageData; title: string; text: string; alt: string };

const INTERVAL_MS = 6000;

export function HeroCarousel({ slides }: { slides: Slide[] }) {
  const [index, setIndex] = useState(0);
  const [paused, setPaused] = useState(false);

  const go = useCallback((i: number) => setIndex((i + slides.length) % slides.length), [slides.length]);

  useEffect(() => {
    if (paused || window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    const id = setInterval(() => setIndex((i) => (i + 1) % slides.length), INTERVAL_MS);
    return () => clearInterval(id);
  }, [paused, slides.length]);

  return (
    <section
      aria-roledescription="карусель"
      aria-label="Наші роботи"
      className="relative h-[70vh] min-h-[420px] max-h-[720px] overflow-hidden bg-ink-950"
      onMouseEnter={() => setPaused(true)}
      onMouseLeave={() => setPaused(false)}
      onFocus={() => setPaused(true)}
      onBlur={() => setPaused(false)}
    >
      {slides.map((s, i) => (
        <div
          key={s.title}
          role="group"
          aria-roledescription="слайд"
          aria-label={`${i + 1} з ${slides.length}`}
          aria-hidden={i !== index}
          className={`absolute inset-0 transition-opacity duration-1000 ${i === index ? "opacity-100" : "opacity-0"}`}
        >
          <Image
            src={s.image}
            alt={s.alt}
            fill
            priority={i === 0}
            sizes="100vw"
            placeholder="blur"
            className="object-cover"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-ink-950/85 via-ink-950/30 to-ink-950/10" />
          <div className="absolute inset-x-0 bottom-0 mx-auto max-w-6xl px-4 pb-20 sm:pb-24">
            {i === 0 ? (
              <h1 className="max-w-2xl text-3xl font-bold leading-tight text-white sm:text-5xl">{s.title}</h1>
            ) : (
              <h2 className="max-w-2xl text-3xl font-bold leading-tight text-white sm:text-5xl">{s.title}</h2>
            )}
            <p className="mt-3 max-w-xl text-lg text-white/85 sm:text-xl">{s.text}</p>
            <div className="mt-6 flex flex-wrap gap-3">
              <Link
                href="/#contact"
                tabIndex={i === index ? 0 : -1}
                className="rounded-md bg-brand-600 px-5 py-3 font-semibold text-white transition-colors hover:bg-brand-700"
              >
                Замовити консультацію
              </Link>
              <Link
                href="/#gallery"
                tabIndex={i === index ? 0 : -1}
                className="rounded-md border border-white/40 px-5 py-3 font-semibold text-white transition-colors hover:bg-white/10"
              >
                Наші роботи
              </Link>
            </div>
          </div>
        </div>
      ))}

      <div className="absolute inset-x-0 bottom-6 mx-auto flex max-w-6xl items-center justify-between px-4">
        <div className="flex gap-2">
          {slides.map((s, i) => (
            <button
              key={s.title}
              type="button"
              aria-label={`Слайд ${i + 1}: ${s.title}`}
              aria-current={i === index}
              onClick={() => go(i)}
              className={`h-1.5 rounded-full transition-all ${i === index ? "w-8 bg-brand-400" : "w-4 bg-white/50 hover:bg-white/80"}`}
            />
          ))}
        </div>
        <div className="flex gap-2">
          <button
            type="button"
            aria-label="Попередній слайд"
            onClick={() => go(index - 1)}
            className="rounded-full border border-white/30 p-2 text-white hover:bg-white/10"
          >
            <ChevronLeft className="size-5" />
          </button>
          <button
            type="button"
            aria-label="Наступний слайд"
            onClick={() => go(index + 1)}
            className="rounded-full border border-white/30 p-2 text-white hover:bg-white/10"
          >
            <ChevronRight className="size-5" />
          </button>
        </div>
      </div>
    </section>
  );
}
