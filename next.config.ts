import type { NextConfig } from "next";
import { legacyGalleryTypes } from "./src/content/legacy-urls";

const nextConfig: NextConfig = {
  // Keep the old PHP site's URLs working (and their search ranking) after the move.
  async redirects() {
    const legacyGallery = Object.entries(legacyGalleryTypes).flatMap(([slug, types]) =>
      types.flatMap((type) =>
        ["/gallery_view", "/gallery_view.php"].map((source) => ({
          source,
          has: [{ type: "query" as const, key: "type", value: type }],
          destination: `/gallery/${slug}`,
          permanent: true,
        })),
      ),
    );
    return [
      ...legacyGallery,
      { source: "/gallery_view", destination: "/gallery", permanent: true },
      { source: "/gallery_view.php", destination: "/gallery", permanent: true },
      { source: "/index", destination: "/", permanent: true },
      { source: "/index.php", destination: "/", permanent: true },
    ];
  },
};

export default nextConfig;
