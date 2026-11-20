import { HeroCarousel, type Slide } from "@/components/HeroCarousel";
import { CategoryCard } from "@/components/CategoryCard";
import { SectionHeading } from "@/components/SectionHeading";
import { OrderSteps } from "@/components/OrderSteps";
import { About } from "@/components/About";
import { Contact } from "@/components/Contact";
import { categories } from "@/content/categories";
import slide1 from "../../public/img/korpusni-mebli-na-zamowlenia-rivne.jpg";
import slide2 from "../../public/img/mebli-dla-spalni-na-zamowlenia-rivne.jpg";
import slide3 from "../../public/img/mebli-dla-dytiachoi-kimnaty-rivne.jpg";
import slide4 from "../../public/img/mebli-dla-kuchni-na-zamowlenia-rivne.jpg";

const slides: Slide[] = [
  {
    image: slide1,
    title: "Меблі на замовлення у Рівному",
    text: "Виготовлення корпусних меблів за вашим індивідуальним проєктом.",
    alt: "Корпусні меблі на замовлення від WEST-MEBLI, Рівне",
  },
  {
    image: slide2,
    title: "Меблі для спальні",
    text: "Індивідуальний дизайн на ваш смак.",
    alt: "Меблі для спальні на замовлення, Рівне",
  },
  {
    image: slide3,
    title: "Ексклюзивні дитячі кімнати",
    text: "Безпечні й яскраві меблі для вашої дитини.",
    alt: "Дитячі меблі на замовлення",
  },
  {
    image: slide4,
    title: "Сучасні кухні",
    text: "Створіть куточок своєї мрії.",
    alt: "Кухонні меблі на замовлення, Рівне",
  },
];

export default function HomePage() {
  return (
    <>
      <HeroCarousel slides={slides} />

      <section id="gallery" className="py-20 sm:py-24">
        <div className="mx-auto max-w-6xl px-4">
          <SectionHeading title="Галерея робіт" subtitle="Оберіть категорію, щоб переглянути наші роботи." />
          <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            {categories
              .filter((c) => c.slug !== "matrasy")
              .map((c) => (
                <CategoryCard key={c.slug} category={c} />
              ))}
          </div>
        </div>
      </section>

      <OrderSteps />
      <About />
      <Contact />
    </>
  );
}
