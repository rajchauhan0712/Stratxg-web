import { Link } from 'react-router-dom'
import { ArrowUpRight, Mail, MapPin, Phone } from 'lucide-react'
import { exploreLinks, externalLinks, navLinks, site } from '../../content/site'

export function Footer() {
  return (
    <footer className="bg-brand text-white">
      <div className="mx-auto grid max-w-7xl gap-12 px-5 py-14 sm:px-8 md:grid-cols-2 md:py-16 lg:grid-cols-[1.35fr_0.8fr_1fr_1.15fr] lg:gap-10 lg:px-10">
        <div className="max-w-sm">
          <Link
            to="/"
            aria-label="StratXG home"
            className="inline-flex shrink-0 rounded-sm outline-offset-4 transition-opacity hover:opacity-90"
          >
            <img
              src={site.logo}
              alt={site.name}
              className="h-9 w-auto max-w-[10.75rem] select-none [clip-path:inset(2px)] sm:h-10 sm:max-w-none"
            />
          </Link>
          <p className="mt-5 text-sm leading-7 text-white/70">
            {site.tagline}. We help organizations turn complex challenges into
            clear, sustainable progress.
          </p>
          <a
            href={`mailto:${site.email}`}
            className="mt-6 inline-flex items-center gap-2 font-display text-sm font-medium text-white transition-colors hover:text-accent"
          >
            <Mail size={16} aria-hidden="true" />
            {site.email}
          </a>
        </div>

        <div>
          <p className="mb-5 font-display text-xs font-semibold uppercase tracking-[0.16em] text-accent">
            Company
          </p>
          <ul className="space-y-3">
            {navLinks.map((link) => (
              <li key={link.to}>
                <Link
                  to={link.to}
                  className="text-sm text-white/70 transition-colors hover:text-white"
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>

        <div>
          <p className="mb-5 font-display text-xs font-semibold uppercase tracking-[0.16em] text-accent">
            Explore
          </p>
          <ul className="grid grid-cols-2 gap-x-3 gap-y-3">
            {exploreLinks.map((link) => (
              <li key={link.to}>
                <Link
                  to={link.to}
                  className="text-sm text-white/70 transition-colors hover:text-white"
                >
                  {link.label}
                </Link>
              </li>
            ))}
            {externalLinks.map((link) => (
              <li key={link.label}>
                <a
                  href={link.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="inline-flex items-center gap-1 text-sm text-white/70 transition-colors hover:text-white"
                >
                  {link.label} <ArrowUpRight size={13} aria-hidden="true" />
                </a>
              </li>
            ))}
          </ul>
        </div>

        <div>
          <p className="mb-5 font-display text-xs font-semibold uppercase tracking-[0.16em] text-accent">
            Get in touch
          </p>
          <address className="space-y-4 text-sm not-italic leading-6 text-white/70">
            <p className="flex items-start gap-3">
              <MapPin className="mt-1 shrink-0 text-accent" size={16} aria-hidden="true" />
              <span>{site.address}</span>
            </p>
            {site.phones.map((phone) => (
              <a
                key={phone}
                href={`tel:${phone.replace(/\s/g, '')}`}
                className="flex items-center gap-3 transition-colors hover:text-white"
              >
                <Phone className="shrink-0 text-accent" size={16} aria-hidden="true" />
                {phone}
              </a>
            ))}
          </address>
        </div>
      </div>
      <div className="border-t border-white/10">
        <div className="mx-auto flex max-w-7xl flex-col gap-2 px-5 py-5 text-xs text-white/55 sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-10">
          <span>© {new Date().getFullYear()} {site.legalName}</span>
          <span>ISO 9001:2015 & ISO/IEC 27001:2013 Certified</span>
        </div>
      </div>
    </footer>
  )
}
