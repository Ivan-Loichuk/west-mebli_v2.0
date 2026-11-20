"use client";

import Image from "next/image";
import { useEffect, useRef, useState } from "react";
import { ChevronLeft, ChevronRight, X } from "lucide-react";
import type { GalleryPhoto } from "@/content/categories";

export function PhotoGrid({ photos }: { photos: GalleryPhoto[] }) {
  const [current, setCurrent] = useState<number | null>(null);
  const dialog = useRef<HTMLDialogElement>(null);

  useEffect(() => {
    if (current === null) dialog.current?.close();
    else if (!dialog.current?.open) dialog.current?.showModal();
  }, [current]);

  const step = (d: number) => setCurrent((i) => (i === null ? i : (i + d + photos.length) % photos.length));
  const photo = current === null ? null : photos[current];

  return (
    <>
      <ul className="grid grid-cols-2 gap-3 sm:gap-4 md:grid-cols-3">
        {photos.map((p, i) => (
          <li key={p.src}>
            <button
              type="button"
              onClick={() => setCurrent(i)}
              className="group relative block aspect-square w-full overflow-hidden rounded-lg bg-ink-800/10"
            >
              <Image
                src={p.src}
                alt={p.alt}
                fill
                sizes="(min-width: 768px) 25vw, 50vw"
                className="object-cover transition-transform duration-500 group-hover:scale-105"
              />
              {p.caption && (
                <span className="absolute inset-x-0 bottom-0 translate-y-full bg-ink-950/80 p-3 text-left text-sm text-white transition-transform group-hover:translate-y-0">
                  {p.caption}
                </span>
              )}
            </button>
          </li>
        ))}
      </ul>

      <dialog
        ref={dialog}
        onClose={() => setCurrent(null)}
        onKeyDown={(e) => {
          if (e.key === "ArrowRight") step(1);
          if (e.key === "ArrowLeft") step(-1);
        }}
        className="m-auto max-h-none max-w-none bg-transparent p-0 backdrop:bg-ink-950/90"
      >
        {photo && (
          <figure className="relative">
            <Image
              src={photo.src}
              alt={photo.alt}
              width={photo.width}
              height={photo.height}
              sizes="90vw"
              className="max-h-[85vh] w-auto max-w-[92vw] rounded-md object-contain"
            />
            <figcaption className="mt-3 text-center text-white/80">
              {photo.caption ?? photo.alt} · {current! + 1} / {photos.length}
            </figcaption>
            <button
              type="button"
              aria-label="Закрити"
              onClick={() => setCurrent(null)}
              className="absolute right-2 top-2 rounded-full bg-ink-950/70 p-2 text-white hover:bg-ink-950"
            >
              <X className="size-5" />
            </button>
            {photos.length > 1 && (
              <>
                <button
                  type="button"
                  aria-label="Попереднє фото"
                  onClick={() => step(-1)}
                  className="absolute left-2 top-1/2 -translate-y-1/2 rounded-full bg-ink-950/70 p-2 text-white hover:bg-ink-950"
                >
                  <ChevronLeft className="size-6" />
                </button>
                <button
                  type="button"
                  aria-label="Наступне фото"
                  onClick={() => step(1)}
                  className="absolute right-2 top-1/2 -translate-y-1/2 rounded-full bg-ink-950/70 p-2 text-white hover:bg-ink-950"
                >
                  <ChevronRight className="size-6" />
                </button>
              </>
            )}
          </figure>
        )}
      </dialog>
    </>
  );
}
