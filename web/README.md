# StratXG Web (Phase 1)

Modern marketing site for StratXG — Vite + React + TypeScript, Tailwind, Motion, and GSAP.

Legacy PHP content in `../stratxg/` is the copy source. Academy, login, and payments stay on the live PHP site via external links.

## Stack

- Vite + React 19 / 18 + TypeScript
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
| `VITE_LEGACY_BASE_URL` | Base URL for Academy / VentureCap / Media / Login / industry deep links (default `https://www.stratxg.com`). |

## Routes

| Path | Page |
| --- | --- |
| `/` | Home |
| `/about` | About |
| `/advisors` | Advisors |
| `/clients` | Clients & partners |
| `/industries` | Industries landing |
| `/contact` | Contact |

## Notes

- Brand tokens: plum `#361134`, accent `#84ba3f` — see `src/index.css`.
- Content modules live in `src/content/`.
- Images used by Phase 1 are copied under `public/`.
