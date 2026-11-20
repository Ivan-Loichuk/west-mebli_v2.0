import type { StaticImageData } from "next/image";
import cabinets from "../../public/img/titles/cabinets.jpg";
import kitchen from "../../public/img/titles/kitchen.jpg";
import bedroom from "../../public/img/titles/bedroom.jpg";
import children from "../../public/img/titles/children.jpg";
import other from "../../public/img/titles/other.jpg";
import office from "../../public/img/titles/office.jpg";
import matras from "../../public/img/titles/matras.jpg";

export type GalleryPhoto = {
  /** Path under /public, e.g. "/gallery/kukhni/kukhnia-01.jpg" */
  src: string;
  alt: string;
  width: number;
  height: number;
  /** Optional short description shown on hover */
  caption?: string;
};

export type Category = {
  slug: string;
  name: string;
  /** Longer, SEO-oriented name used in titles and alt texts */
  title: string;
  description: string;
  cover: StaticImageData;
  photos: GalleryPhoto[];
};

// To add photos: put the files in public/gallery/<slug>/ and list them in `photos`.
export const categories: Category[] = [
  {
    slug: "shafy-kupe",
    name: "Шафи-купе",
    title: "Шафи-купе на замовлення у Рівному",
    description: "Шафи-купе за індивідуальним проєктом, точно під розмір вашого приміщення.",
    cover: cabinets,
    photos: [],
  },
  {
    slug: "kukhni",
    name: "Кухні",
    title: "Кухні на замовлення у Рівному",
    description: "Сучасні та класичні кухні, кухні з вмонтованою технікою.",
    cover: kitchen,
    photos: [],
  },
  {
    slug: "spalni",
    name: "Спальні",
    title: "Спальні на замовлення у Рівному",
    description: "Спальні гарнітури в комплекті та модульні системи.",
    cover: bedroom,
    photos: [],
  },
  {
    slug: "dytiachi",
    name: "Дитячі",
    title: "Меблі в дитячу кімнату на замовлення",
    description: "Ексклюзивні та безпечні меблі для вашої дитини.",
    cover: children,
    photos: [],
  },
  {
    slug: "stinky",
    name: "Стінки та інше",
    title: "Стінки, комоди та інші меблі на замовлення",
    description: "Стінки, комоди, прихожі — від полички до масштабних об’єктів.",
    cover: other,
    photos: [],
  },
  {
    slug: "ofisni-mebli",
    name: "Офісні меблі",
    title: "Офісні меблі на замовлення у Рівному",
    description: "Проєктування, виготовлення та встановлення меблів для офісу.",
    cover: office,
    photos: [],
  },
  {
    slug: "matrasy",
    name: "Матраси",
    title: "Матраси на замовлення у Рівному",
    description: "Матраси під розмір вашого ліжка.",
    cover: matras,
    photos: [],
  },
];

export function getCategory(slug: string) {
  return categories.find((c) => c.slug === slug);
}
