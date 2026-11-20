import type { Metadata } from "next";
import { CategoryCard } from "@/components/CategoryCard";
import { GalleryNav } from "@/components/GalleryNav";
import { categories } from "@/content/categories";

export const metadata: Metadata = {
  title: "Галерея — корпусні меблі на замовлення в місті Рівному",
  description:
    "Галерея робіт WEST-MEBLI: кухні, шафи-купе, спальні, дитячі та офісні меблі, стінки й матраси на замовлення у Рівному.",
  alternates: { canonical: "/gallery" },
};

export default function GalleryPage() {
  return (
    <div className="mx-auto grid max-w-6xl grid-cols-[minmax(0,1fr)] gap-8 px-4 py-12 lg:grid-cols-[220px_minmax(0,1fr)] lg:py-16">
      <aside className="lg:sticky lg:top-24 lg:h-fit">
        <GalleryNav />
      </aside>
      <div>
        <h1 className="text-3xl font-bold sm:text-4xl">Галерея робіт</h1>
        <p className="mt-2 text-lg text-ink-600">Оберіть категорію меблів.</p>
        <div className="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
          {categories.map((c) => (
            <CategoryCard key={c.slug} category={c} />
          ))}
        </div>
      </div>
    </div>
  );
}
