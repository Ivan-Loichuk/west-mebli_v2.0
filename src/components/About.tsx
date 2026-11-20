import Image, { type StaticImageData } from "next/image";
import Link from "next/link";
import { ArrowRight, Check } from "lucide-react";
import { SectionHeading } from "./SectionHeading";
import wardrobe from "../../public/img/item_furniture2.jpg";
import bedroom from "../../public/img/bed_room.jpg";
import office from "../../public/img/office_furniture.jpg";
import kitchen from "../../public/img/kuhnia-na_zamowlenia.jpg";

const Brand = () => <strong className="font-semibold text-brand-700">«WEST-MEBLI»</strong>;

const highlights = [
  "Індивідуальний підхід до кожного клієнта",
  "Власний дизайн під ваші потреби",
  "Від полички до масштабних об’єктів",
  "Встановлення безкоштовно",
];

type Block = {
  title: string;
  slug: string;
  image: StaticImageData;
  alt: string;
  body: React.ReactNode;
};

const blocks: Block[] = [
  {
    title: "Шафи-купе",
    slug: "shafy-kupe",
    image: wardrobe,
    alt: "Шафа-купе на замовлення, Рівне",
    body: (
      <>
        <p>
          Шафа-купе — це система, яка дозволяє грамотно організувати простір у квартирі чи офісі й одночасно є
          елементом інтер’єру. Шафи-купе виробництва <Brand /> проєктуються та виготовляються за індивідуальним
          проєктом, з урахуванням особливостей вашого приміщення, а внутрішній простір планується під ваші потреби.
        </p>
        <p>
          Завдяки високій функціональності шафи-купе — один із найпопулярніших видів наших меблів, конкурувати з
          яким можуть хіба що кухні. Якщо у вас є вільна ніша, ми виготовимо шафу точно під її розмір — навіть без
          бокових стінок, що збереже простір і кошти. Розсувний механізм гарантує плавний і безшумний хід дверей, а
          правильно підібраний профіль — довговічність. Наповнення шафи обмежене лише вашою фантазією.
        </p>
      </>
    ),
  },
  {
    title: "Спальні",
    slug: "spalni",
    image: bedroom,
    alt: "Меблі для спальні на замовлення, Рівне",
    body: (
      <>
        <p>
          Спальня на замовлення — ідеальний спосіб створити стильне, затишне й практичне місце для відпочинку. Від
          якості меблів залежить якість вашого сну, тож усі предмети інтер’єру мають бути зручними та водночас
          мати індивідуальний дизайн.
        </p>
        <p>
          Ми пропонуємо як спальні гарнітури в комплекті, так і модульні системи, з яких можна підібрати окремі
          елементи. Допоможемо обрати спальню, яка найкраще пасуватиме вашому смаку, бюджету та габаритам кімнати.
        </p>
      </>
    ),
  },
  {
    title: "Офісні меблі",
    slug: "ofisni-mebli",
    image: office,
    alt: "Офісні меблі на замовлення, Рівне",
    body: (
      <p>
        Пропонуємо якісні меблі для офісу з індивідуальним і ексклюзивним дизайном: проєктування, виготовлення та
        встановлення під ключ. Робоче місце, яке зручне щодня і відповідає стилю вашої компанії.
      </p>
    ),
  },
  {
    title: "Кухні",
    slug: "kukhni",
    image: kitchen,
    alt: "Кухня на замовлення, Рівне",
    body: (
      <>
        <p>
          Усі кухні <Brand /> виготовляються за індивідуальним проєктом з урахуванням ваших вимог: розміри, кольори,
          фурнітура й комплектація. Висока якість досягається завдяки сучасному устаткуванню й передовим технологіям.
        </p>
        <p>
          Саме кухня — місце творчості, де народжуються ваші кулінарні подвиги. Меблі для кухні на замовлення
          дозволяють отримати інтер’єр, повністю виготовлений за вашим смаком, — за доступними цінами в Рівному.
        </p>
      </>
    ),
  },
];

export function About() {
  return (
    <section id="about" className="py-20 sm:py-24">
      <div className="mx-auto max-w-6xl px-4">
        <SectionHeading title="Про нас" />

        <div className="grid gap-10 lg:grid-cols-[1.4fr_1fr] lg:items-start">
          <div className="space-y-4 text-lg leading-relaxed text-ink-800">
            <h3 className="text-2xl font-bold text-ink-900">Виготовлення корпусних меблів на замовлення у Рівному</h3>
            <p>
              У нас можна зробити індивідуальне замовлення на будь-які корпусні меблі: сучасні кухні, кухні з
              вмонтованою технікою, класичні кухні, шафи-купе, спальні, прихожі, офісні меблі та інше.
            </p>
            <p>
              Компанія <Brand /> пропонує професійні послуги дизайну та виготовлення меблів на замовлення для вашого
              дому та офісу — як за індивідуальним дизайном, так і серійні моделі на ваш смак. Наші меблі слугуватимуть
              довгі роки й радуватимуть якістю, неповторністю та доступними цінами. Ми стараємося для вас!
            </p>
          </div>
          <ul className="grid gap-3 rounded-xl bg-brand-50 p-6 ring-1 ring-brand-100">
            {highlights.map((h) => (
              <li key={h} className="flex items-start gap-3 font-semibold text-ink-900">
                <Check className="mt-0.5 size-5 shrink-0 text-brand-600" aria-hidden />
                {h}
              </li>
            ))}
          </ul>
        </div>

        <div className="mt-16 space-y-16 sm:mt-20 sm:space-y-20">
          {blocks.map((b, i) => (
            <article key={b.slug} className="grid items-center gap-8 md:grid-cols-2 md:gap-12">
              <Link
                href={`/gallery/${b.slug}`}
                className={`relative block aspect-[4/3] overflow-hidden rounded-xl shadow-md ${i % 2 ? "md:order-2" : ""}`}
              >
                <Image
                  src={b.image}
                  alt={b.alt}
                  fill
                  sizes="(min-width: 768px) 50vw, 100vw"
                  placeholder="blur"
                  className="object-cover transition-transform duration-500 hover:scale-105"
                />
              </Link>
              <div className="space-y-4 leading-relaxed text-ink-800">
                <h3 className="text-2xl font-bold text-ink-900">{b.title} на замовлення</h3>
                {b.body}
                <Link
                  href={`/gallery/${b.slug}`}
                  className="inline-flex items-center gap-2 font-semibold text-brand-700 hover:text-brand-800"
                >
                  Дивитися в галереї <ArrowRight className="size-4" aria-hidden />
                </Link>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}
