import { Link } from 'react-router-dom'
import { externalLinks, navLinks, site } from '../../content/site'
import { BrandMark } from '../ui/BrandMark'

export function Footer() {
  return (
    <footer className="bg-brand text-white">
      <div className="mx-auto max-w-6xl px-5 md:px-8 py-16 grid gap-12 md:grid-cols-[1.4fr_1fr_1fr]">
        <div>
          <BrandMark variant="light" />
          <p className="mt-4 max-w-sm text-white/65 leading-relaxed">
            {site.tagline}. Digital consulting for strategy, transformation, and
            sustainable growth.
          </p>
        </div>

        <div>
          <p className="font-display text-xs font-semibold uppercase tracking-[0.16em] text-accent mb-4">
            Explore
          </p>
          <ul className="space-y-2">
            {navLinks.map((link) => (
              <li key={link.to}>
                <Link
                  to={link.to}
                  className="text-white/70 hover:text-white transition-colors"
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>

        <div>
          <p className="font-display text-xs font-semibold uppercase tracking-[0.16em] text-accent mb-4">
            More
          </p>
          <ul className="space-y-2">
            {externalLinks.map((link) => (
              <li key={link.label}>
                <a
                  href={link.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="text-white/70 hover:text-white transition-colors"
                >
                  {link.label}
                </a>
              </li>
            ))}
          </ul>
          <div className="mt-6 text-sm text-white/55 space-y-1">
            <a href={`mailto:${site.email}`} className="block hover:text-white">
              {site.email}
            </a>
            {site.phones.map((phone) => (
              <a key={phone} href={`tel:${phone.replace(/\s/g, '')}`} className="block hover:text-white">
                {phone}
              </a>
            ))}
          </div>
        </div>
      </div>
      <div className="border-t border-white/10">
        <div className="mx-auto max-w-6xl px-5 md:px-8 py-5 text-sm text-white/45 flex flex-col sm:flex-row gap-2 sm:justify-between">
          <span>© {new Date().getFullYear()} {site.legalName}</span>
          <span>ISO 9001:2015 & ISO/IEC 27001:2013 Certified</span>
        </div>
      </div>
    </footer>
  )
}
