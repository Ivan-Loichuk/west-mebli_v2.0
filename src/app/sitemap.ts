import type { MetadataRoute } from "next";
import { categories } from "@/content/categories";
import { site } from "@/content/site";

export default function sitemap(): MetadataRoute.Sitemap {
  return [
    { url: site.url, priority: 1 },
    { url: `${site.url}/gallery`, priority: 0.8 },
    ...categories.map((c) => ({ url: `${site.url}/gallery/${c.slug}`, priority: 0.7 })),
  ];
}
