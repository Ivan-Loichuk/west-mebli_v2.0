import Link from "next/link";
import { categories } from "@/content/categories";

export function GalleryNav({ active }: { active?: string }) {
  return (
    <nav aria-label="Категорії галереї" className="-mx-4 overflow-x-auto px-4 lg:mx-0 lg:overflow-visible lg:px-0">
      <ul className="flex gap-2 lg:flex-col">
        <li>
          <Link
            href="/gallery"
            aria-current={!active ? "page" : undefined}
            className={`block whitespace-nowrap rounded-md px-4 py-2.5 font-semibold transition-colors ${
              !active ? "bg-ink-900 text-white" : "bg-white text-ink-800 ring-1 ring-black/5 hover:bg-brand-50"
            }`}
          >
            Усі категорії
          </Link>
        </li>
        {categories.map((c) => (
          <li key={c.slug}>
            <Link
              href={`/gallery/${c.slug}`}
              aria-current={active === c.slug ? "page" : undefined}
              className={`block whitespace-nowrap rounded-md px-4 py-2.5 font-semibold transition-colors ${
                active === c.slug ? "bg-ink-900 text-white" : "bg-white text-ink-800 ring-1 ring-black/5 hover:bg-brand-50"
              }`}
            >
              {c.name}
            </Link>
          </li>
        ))}
      </ul>
    </nav>
  );
}
