export function SectionHeading({ title, subtitle, dark }: { title: string; subtitle?: string; dark?: boolean }) {
  return (
    <div className="mb-10 text-center sm:mb-14">
      <h2 className={`text-3xl font-bold sm:text-4xl ${dark ? "text-white" : "text-ink-900"}`}>{title}</h2>
      <div className="mx-auto mt-4 h-1 w-14 rounded-full bg-brand-400" aria-hidden />
      {subtitle && (
        <p className={`mx-auto mt-4 max-w-2xl text-lg ${dark ? "text-white/70" : "text-ink-600"}`}>{subtitle}</p>
      )}
    </div>
  );
}
