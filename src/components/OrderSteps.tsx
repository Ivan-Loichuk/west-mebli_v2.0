import { FileSignature, Hammer, Handshake, PencilRuler, PhoneCall, Truck } from "lucide-react";
import { SectionHeading } from "./SectionHeading";

const steps = [
  {
    icon: PhoneCall,
    title: "Зателефонуйте нам",
    text: "Зв'яжіться з нами за телефоном або через форму на сайті і домовтеся про зустріч.",
  },
  {
    icon: Handshake,
    title: "Зустріч",
    text: "У зручний для вас час ми приїдемо, щоб зрозуміти ваші потреби, виконати попередні заміри та обговорити функціональність і дизайн нових меблів.",
  },
  {
    icon: PencilRuler,
    title: "Проєкт майбутніх меблів",
    text: "Наш досвідчений дизайнер виконає для вас індивідуальний проєкт з повною інформацією щодо цін. Уже маєте проєкт? Надішліть його нам — ми швидко розрахуємо вартість.",
  },
  {
    icon: FileSignature,
    title: "Договір",
    text: "Після узгодження проєкту ми підготуємо договір, у якому будуть описані умови співпраці, перелік робіт, терміни реалізації та спосіб оплати.",
  },
  {
    icon: Hammer,
    title: "Реалізація проєкту",
    text: "Після підписання договору й отримання авансу розпочинаємо виготовлення. Термін залежить від складності проєкту та обраних матеріалів.",
  },
  {
    icon: Truck,
    title: "Доставка і встановлення",
    text: "Встановлення нових меблів виконаємо швидко й професійно — у зручний для вас час. Встановлення безкоштовне.",
  },
];

export function OrderSteps() {
  return (
    <section id="order" className="bg-ink-900 py-20 sm:py-24">
      <div className="mx-auto max-w-6xl px-4">
        <SectionHeading title="Як замовити?" subtitle="Шість простих кроків від дзвінка до готових меблів у вашому домі." dark />
        <ol className="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
          {steps.map((step, i) => (
            <li key={step.title} className="relative rounded-xl bg-white/[0.04] p-6 ring-1 ring-white/10">
              <div className="flex items-center gap-4">
                <span className="flex size-12 items-center justify-center rounded-lg bg-brand-400/15 text-brand-400">
                  <step.icon className="size-6" aria-hidden />
                </span>
                <span className="text-sm font-bold uppercase tracking-wider text-brand-300">Крок {i + 1}</span>
              </div>
              <h3 className="mt-5 text-xl font-bold text-white">{step.title}</h3>
              <p className="mt-2 leading-relaxed text-white/70">{step.text}</p>
            </li>
          ))}
        </ol>
      </div>
    </section>
  );
}
