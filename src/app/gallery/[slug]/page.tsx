import type { Metadata } from "next";
import Image from "next/image";
import Link from "next/link";
import { notFound } from "next/navigation";
import { Images, Phone } from "lucide-react";
import { GalleryNav } from "@/components/GalleryNav";
import { PhotoGrid } from "@/components/PhotoGrid";
import { categories, getCategory } from "@/content/categories";
import { site } from "@/content/site";

type Props = { params: Promise<{ slug: string }> };

export const dynamicParams = false;

export function generateStaticParams() {
  return categories.map((c) => ({ slug: c.slug }));
}

export async function generateMetadata({ params }: Props): Promise<Metadata> {
  const category = getCategory((await params).slug);
  if (!category) return {};
  return {
    title: category.title,
    description: `${category.description} Галерея робіт WEST-MEBLI, Рівне.`,
    alternates: { canonical: `/gallery/${category.slug}` },
    openGraph: { images: [category.cover.src] },
  };
}

export default async function CategoryPage({ params }: Props) {
  const category = getCategory((await params).slug);
  if (!category) notFound();

  return (
    <div className="mx-auto grid max-w-6xl grid-cols-[minmax(0,1fr)] gap-8 px-4 py-12 lg:grid-cols-[220px_minmax(0,1fr)] lg:py-16">
      <aside className="lg:sticky lg:top-24 lg:h-fit">
        <GalleryNav active={category.slug} />
      </aside>
      <div>
        <h1 className="text-3xl font-bold sm:text-4xl">{category.title}</h1>
        <p className="mt-2 text-lg text-ink-600">{category.description}</p>

        <div className="mt-8">
          {category.photos.length > 0 ? (
            <PhotoGrid photos={category.photos} />
          ) : (
            <div className="overflow-hidden rounded-xl bg-white ring-1 ring-black/5">
              <div className="relative aspect-[5/2]">
                <Image
                  src={category.cover}
                  alt={category.title}
                  fill
                  sizes="(min-width: 1024px) 800px, 100vw"
                  placeholder="blur"
                  className="object-cover"
                />
                <div className="absolute inset-0 bg-ink-950/50" />
              </div>
              <div className="flex flex-col items-center p-8 text-center sm:p-10">
                <Images className="size-10 text-brand-600" aria-hidden />
                <p className="mt-4 text-xl font-bold">Фото робіт незабаром з’являться тут</p>
                <p className="mt-2 max-w-md text-ink-600">
                  Хочете побачити приклади вже зараз? Зателефонуйте нам — покажемо роботи й розповімо про матеріали.
                </p>
                <div className="mt-6 flex flex-wrap justify-center gap-3">
                  <a
                    href={site.phones[0].href}
                    className="inline-flex items-center gap-2 rounded-md bg-brand-600 px-5 py-3 font-semibold text-white hover:bg-brand-700"
                  >
                    <Phone className="size-5" aria-hidden /> {site.phones[0].display}
                  </a>
                  <Link
                    href="/#contact"
                    className="rounded-md px-5 py-3 font-semibold text-ink-900 ring-1 ring-ink-500/30 hover:bg-brand-50"
                  >
                    Написати нам
                  </Link>
                </div>
              </div>
            </div>
          )}
        </div>
      </div>
    </div>
  );
}
