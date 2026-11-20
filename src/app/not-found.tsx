import Link from "next/link";

export default function NotFound() {
  return (
    <div className="mx-auto flex max-w-xl flex-col items-center px-4 py-28 text-center">
      <p className="text-6xl font-bold text-brand-600">404</p>
      <h1 className="mt-4 text-2xl font-bold">Сторінку не знайдено</h1>
      <p className="mt-2 text-ink-600">Можливо, її було переміщено або видалено.</p>
      <Link href="/" className="mt-8 rounded-md bg-brand-600 px-5 py-3 font-semibold text-white hover:bg-brand-700">
        На головну
      </Link>
    </div>
  );
}
