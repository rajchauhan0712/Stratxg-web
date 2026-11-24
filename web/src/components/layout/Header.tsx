import { useState } from 'react'
import { Link, NavLink } from 'react-router-dom'
import { Menu, X } from 'lucide-react'
import { AnimatePresence, motion } from 'motion/react'
import { externalLinks, navLinks, site } from '../../content/site'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

export function Header() {
  const [open, setOpen] = useState(false)
  const reduced = usePrefersReducedMotion()

  return (
    <header className="sticky top-0 z-50 border-b border-line/70 bg-white">
      <div className="mx-auto flex max-w-6xl items-center justify-between gap-4 px-5 md:px-8 h-16 md:h-18">
        <Link
          to="/"
          className="flex items-center shrink-0 rounded-sm outline-none focus-visible:ring-2 focus-visible:ring-accent/60 active:scale-[0.98] transition-transform duration-[var(--duration-fast)] ease-[var(--ease-out-quart)]"
          onClick={() => setOpen(false)}
        >
          {/* clip-path crops the 1px frame baked into logo.png without changing the mark */}
          <img
            src={site.logo}
            alt={site.name}
            className="h-10 w-auto select-none [clip-path:inset(2px)]"
          />
        </Link>

        <nav className="hidden lg:flex items-center gap-1" aria-label="Primary">
          {navLinks.map((link) => (
            <NavLink
              key={link.to}
              to={link.to}
              className={({ isActive }) =>
                `font-display text-sm px-3 py-2 rounded-md transition-colors duration-[var(--duration-fast)] ${
                  isActive
                    ? 'text-brand bg-brand/[0.06]'
                    : 'text-ink-muted hover:text-brand hover:bg-brand/[0.04]'
                }`
              }
            >
              {link.label}
            </NavLink>
          ))}
        </nav>

        <div className="hidden lg:flex items-center gap-2">
          {externalLinks.map((link) => (
            <a
              key={link.label}
              href={link.href}
              target="_blank"
              rel="noopener noreferrer"
              className="font-display text-xs text-ink-muted hover:text-brand px-2 py-1.5 transition-colors"
            >
              {link.label}
            </a>
          ))}
        </div>

        <button
          type="button"
          className="lg:hidden inline-flex items-center justify-center size-10 rounded-md text-brand hover:bg-brand/[0.06] active:scale-[0.97] transition-[transform,background-color] duration-[var(--duration-fast)]"
          aria-label={open ? 'Close menu' : 'Open menu'}
          aria-expanded={open}
          onClick={() => setOpen((v) => !v)}
        >
          {open ? <X size={22} /> : <Menu size={22} />}
        </button>
      </div>

      <AnimatePresence>
        {open && (
          <motion.div
            className="lg:hidden border-t border-line bg-white origin-top"
            initial={reduced ? false : { opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={reduced ? undefined : { opacity: 0, height: 0 }}
            transition={{ duration: 0.28, ease: [0.16, 1, 0.3, 1] }}
          >
            <nav className="mx-auto max-w-6xl px-5 py-4 flex flex-col gap-1" aria-label="Mobile">
              {navLinks.map((link) => (
                <NavLink
                  key={link.to}
                  to={link.to}
                  onClick={() => setOpen(false)}
                  className={({ isActive }) =>
                    `font-display text-base px-3 py-3 rounded-md ${
                      isActive ? 'text-brand bg-brand/[0.06]' : 'text-ink'
                    }`
                  }
                >
                  {link.label}
                </NavLink>
              ))}
              <div className="mt-3 pt-3 border-t border-line flex flex-wrap gap-2">
                {externalLinks.map((link) => (
                  <a
                    key={link.label}
                    href={link.href}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="font-display text-sm text-ink-muted px-3 py-2"
                  >
                    {link.label}
                  </a>
                ))}
              </div>
            </nav>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  )
}
