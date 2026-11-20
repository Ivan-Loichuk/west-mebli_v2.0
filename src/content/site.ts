export const site = {
  name: "WEST-MEBLI",
  url: (process.env.NEXT_PUBLIC_SITE_URL || "https://west-mebli.com.ua").replace(/\/$/, ""),
  title: "WEST-MEBLI — виготовлення меблів на замовлення в місті Рівне",
  description:
    "Індивідуальне замовлення будь-яких нестандартних корпусних меблів у Рівному: сучасні та класичні кухні, шафи-купе, спальні, прихожі, дитячі та офісні меблі. Встановлення безкоштовно.",
  keywords: [
    "меблі на замовлення Рівне",
    "виготовлення меблів",
    "корпусні меблі",
    "кухні на замовлення",
    "шафи-купе",
    "спальні",
    "офісні меблі",
    "дитячі меблі",
    "мебель на заказ Ровно",
    "west mebli",
  ],
  city: "Україна, м. Рівне",
  contactPerson: "Андрій Куришко",
  email: "contact@west-mebli.com.ua",
  phones: [
    { display: "(067) 38 78 803", href: "tel:+380673878803" },
    { display: "(093) 25 85 861", href: "tel:+380932585861" },
  ],
  facebook: "https://www.facebook.com/groups/1790465037903699",
};

export const nav = [
  { label: "Головна", href: "/#top" },
  { label: "Галерея", href: "/#gallery" },
  { label: "Як замовити?", href: "/#order" },
  { label: "Про нас", href: "/#about" },
  { label: "Контакт", href: "/#contact" },
];
