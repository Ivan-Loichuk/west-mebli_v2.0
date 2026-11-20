import type { Metadata, Viewport } from "next";
import { Open_Sans } from "next/font/google";
import { Header } from "@/components/Header";
import { Footer } from "@/components/Footer";
import { site } from "@/content/site";
import "./globals.css";

const openSans = Open_Sans({
  subsets: ["latin", "cyrillic"],
  variable: "--font-open-sans",
  display: "swap",
});

export const metadata: Metadata = {
  metadataBase: new URL(site.url),
  title: { default: site.title, template: `%s | ${site.name}` },
  description: site.description,
  keywords: site.keywords,
  icons: { icon: "/img/shortcut_icon.png" },
  openGraph: {
    type: "website",
    locale: "uk_UA",
    siteName: site.name,
    title: site.title,
    description: site.description,
    images: ["/img/korpusni-mebli-na-zamowlenia-rivne.jpg"],
  },
};

export const viewport: Viewport = {
  themeColor: "#1c2024",
};

const localBusiness = {
  "@context": "https://schema.org",
  "@type": "FurnitureStore",
  name: site.name,
  url: site.url,
  email: site.email,
  telephone: site.phones.map((p) => p.href.replace("tel:", "")),
  address: { "@type": "PostalAddress", addressLocality: "Рівне", addressCountry: "UA" },
  image: `${site.url}/img/korpusni-mebli-na-zamowlenia-rivne.jpg`,
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="uk" className={openSans.variable}>
      <body className="font-sans antialiased">
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{ __html: JSON.stringify(localBusiness) }}
        />
        <Header />
        <main id="top">{children}</main>
        <Footer />
      </body>
    </html>
  );
}
