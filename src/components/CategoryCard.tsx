import Image from "next/image";
import Link from "next/link";
import { ArrowRight } from "lucide-react";
import type { Category } from "@/content/categories";

export function CategoryCard({ category }: { category: Category }) {
  return (
    <Link
      href={`/gallery/${category.slug}`}
      title={category.title}
      className="group block overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-black/5 transition-shadow hover:shadow-xl"
    >
      <div className="relative aspect-[5/3] overflow-hidden">
        <Image
          src={category.cover}
          alt={category.title}
          fill
          sizes="(min-width: 1024px) 33vw, (min-width: 640px) 50vw, 100vw"
          placeholder="blur"
          className="object-cover transition-transform duration-500 group-hover:scale-105"
        />
      </div>
      <div className="flex items-center justify-between gap-3 p-5">
        <div>
          <h3 className="text-lg font-bold text-ink-900">{category.name}</h3>
          <p className="mt-1 text-sm text-ink-600">{category.description}</p>
        </div>
        <ArrowRight
          className="size-5 shrink-0 text-brand-600 transition-transform group-hover:translate-x-1"
          aria-hidden
        />
      </div>
    </Link>
  );
}
