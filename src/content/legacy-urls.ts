// `type` query values used by the old PHP site (gallery_view?type=...), mapped to new category slugs.
// Kept free of image imports so next.config.ts can load it.
export const legacyGalleryTypes: Record<string, string[]> = {
  "shafy-kupe": ["szafy-kupe-zamowlenia", "cabinets"],
  kukhni: ["mebli-dla-kuhni-zamowlenia", "kitchen-furniture"],
  spalni: ["mebli-dla-spalni-zamowlenia", "bedroom"],
  dytiachi: ["mebli-w-dytiachu-kimnatu", "children"],
  stinky: ["mebli-na-zamowlenia-rivne", "other"],
  "ofisni-mebli": ["ofisni-mebli-zamowlenia", "office"],
  matrasy: ["matrasy-na-zamowlenia-rivne"],
};
