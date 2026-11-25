# StratXG Web

Modern StratXG website built with Vite, React, TypeScript, Tailwind CSS, Motion, and GSAP.

Legacy PHP content in `../stratxg/` is the content and image source. Public company, industry, Academy, Careers, Media, VentureCap, CSR, Gallery, and video pages are available in the new site. Login, learning-account, payment, and other not-yet-migrated legacy pages remain accessible from the transition page.

## Stack

- Vite + React 18 + TypeScript
- React Router
- Tailwind CSS v4
- Motion (Framer Motion) + GSAP / ScrollTrigger
- Sonner (toasts)
- Lucide icons

## Getting started

```bash
cd web
npm install
npm run dev
```

Open the URL Vite prints (usually `http://localhost:5173`).

```bash
npm run build    # production build → dist/
npm run preview  # preview production build
```

## Environment

Copy `.env.example` to `.env` if needed:

| Variable | Purpose |
| --- | --- |
| `VITE_CONTACT_ENDPOINT` | Optional POST URL for the contact form (e.g. legacy `php/contact-form.php`). If empty, the form falls back to `mailto:info@stratxg.com`. |
| `VITE_LEGACY_BASE_URL` | Base URL used to open legacy account and other not-yet-migrated pages (default `https://www.stratxg.com`). |

## Routes

| Path | Page |
| --- | --- |
| `/` | Home |
| `/about` | About |
| `/advisors` | Advisors |
| `/clients` | Clients & partners |
| `/industries` | Industries landing |
| `/industries/:slug` | Industry detail |
| `/contact` | Contact |
| `/services` | Products and services |
| `/academy` | Academy information |
| `/careers` | Careers |
| `/media` | News and updates |
| `/gallery` | Event gallery |
| `/venturecap` | VentureCap |
| `/csr` | Corporate responsibility |
| `/videos` | Video and content services |

## Notes

- Brand tokens: plum `#361134`, accent `#84ba3f` — see `src/index.css`.
- Content modules live in `src/content/`.
- The legacy image library is available under `public/images/`; the event gallery uses optimized WebP assets under `src/assets/gallery/`.
- Existing `.php` URLs for migrated pages resolve to their new React equivalents. Unmigrated URLs show a transition page linking to the legacy site.
