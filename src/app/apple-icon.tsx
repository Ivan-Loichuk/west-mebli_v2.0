import { ImageResponse } from "next/og";

export const size = { width: 180, height: 180 };
export const contentType = "image/png";

export default function AppleIcon() {
  return new ImageResponse(
    (
      <div style={{ width: "100%", height: "100%", display: "flex", alignItems: "center", justifyContent: "center", background: "#7eb239" }}>
        <svg width="112" height="112" viewBox="0 0 48 48">
          <rect x="4" y="6" width="11" height="36" rx="1.5" fill="#ffffff" />
          <polygon points="18.5,6 29.5,9.5 29.5,38.5 18.5,42" fill="#ffffff" fillOpacity="0.6" />
          <rect x="33" y="6" width="11" height="36" rx="1.5" fill="#ffffff" />
        </svg>
      </div>
    ),
    size,
  );
}
