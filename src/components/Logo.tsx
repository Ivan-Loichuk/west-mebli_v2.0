import { MapPin } from "lucide-react";

type LogoProps = {
  /** Show the "Рівне" label after a divider (hidden below the md breakpoint). */
  showCity?: boolean;
  className?: string;
};

/** Cabinet-door mark: two closed doors with handles, the middle one ajar. */
export function LogoMark({ className, handles = true }: { className?: string; handles?: boolean }) {
  return (
    <svg viewBox="0 0 48 48" className={className} aria-hidden>
      <rect x="4" y="6" width="11" height="36" rx="1.5" fill="#7eb239" />
      <polygon points="18.5,6 29.5,9.5 29.5,38.5 18.5,42" fill="#a9cf74" />
      <rect x="33" y="6" width="11" height="36" rx="1.5" fill="#7eb239" />
      {handles && (
        <>
          <rect x="11" y="20" width="2" height="8" rx="1" fill="#1c2024" />
          <rect x="35" y="20" width="2" height="8" rx="1" fill="#1c2024" />
        </>
      )}
    </svg>
  );
}

/** Logo for dark backgrounds: mark + "МЕБЛІ / НА ЗАМОВЛЕННЯ" (+ optional "Рівне"). */
export function Logo({ showCity = false, className = "" }: LogoProps) {
  return (
    <span className={`flex items-center gap-2.5 font-display ${className}`}>
      <LogoMark className="size-10 shrink-0" />
      <span className="flex flex-col leading-none">
        <span className="text-[24px] font-extrabold tracking-[0.03em] text-white">МЕБЛІ</span>
        <span className="mt-1 text-[8.5px] font-semibold tracking-[0.2em] text-brand-300">НА ЗАМОВЛЕННЯ</span>
      </span>
      {showCity && (
        <>
          <span className="ml-1.5 hidden h-8 w-px bg-white/20 md:block" aria-hidden />
          <span className="ml-1.5 hidden items-center gap-1 text-sm font-medium text-white/70 md:flex">
            <MapPin className="size-4 text-brand-400" aria-hidden />
            Рівне
          </span>
        </>
      )}
    </span>
  );
}
