# WEST-MEBLI

Website of WEST-MEBLI — custom furniture manufacturing in Rivne, Ukraine.

Built with Next.js (App Router), React, TypeScript and Tailwind CSS; deployed on Vercel.
The previous PHP/MySQL version lives on the `master` branch.

## Local development

```bash
npm install
npm run dev
```

Open http://localhost:3000. Without `RESEND_API_KEY`, contact-form submissions are printed to the
dev server console instead of being emailed.

## Configuration

Copy `.env.example` to `.env.local` (locally) or set the same variables in the Vercel project settings:

| Variable | Purpose |
| --- | --- |
| `NEXT_PUBLIC_SITE_URL` | Public site URL for canonical links, sitemap and robots.txt |
| `RESEND_API_KEY` | [Resend](https://resend.com) API key used by the contact form |
| `CONTACT_TO_EMAIL` | Recipient(s) of contact-form messages, comma-separated |
| `CONTACT_FROM_EMAIL` | Sender address; its domain must be verified in Resend |

## Content

- Phones, email and other contact details: `src/content/site.ts`
- Gallery categories: `src/content/categories.ts`

### Adding gallery photos

1. Put the images in `public/gallery/<category-slug>/`.
2. List them in that category's `photos` array in `src/content/categories.ts`:

```ts
photos: [
  { src: "/gallery/kukhni/kukhnia-01.jpg", alt: "Червона кухня на замовлення", width: 1600, height: 1067 },
],
```

Old PHP URLs (`/index`, `/gallery_view?type=...`) permanently redirect to the new pages — see
`next.config.ts` and `src/content/legacy-urls.ts`.
