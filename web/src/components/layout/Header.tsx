import { Fragment, useEffect, useRef, useState } from 'react'
import { Link, NavLink, useLocation } from 'react-router-dom'
import { ChevronDown, Menu, X } from 'lucide-react'
import { AnimatePresence, motion } from 'motion/react'
import { exploreLinks, navLinks, site } from '../../content/site'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

export function Header() {
  const [open, setOpen] = useState(false)
  const [exploreOpen, setExploreOpen] = useState(false)
  const exploreMenuRef = useRef<HTMLDivElement>(null)
  const exploreButtonRef = useRef<HTMLButtonElement>(null)
  const { pathname } = useLocation()
  const reduced = usePrefersReducedMotion()

  useEffect(() => {
    setOpen(false)
    setExploreOpen(false)
  }, [pathname])

  useEffect(() => {
    if (!exploreOpen) return

    const closeOnOutsideClick = (event: PointerEvent) => {
      if (
        event.target instanceof Node &&
        !exploreMenuRef.current?.contains(event.target)
      ) {
        setExploreOpen(false)
      }
    }

    const closeOnEscape = (event: KeyboardEvent) => {
      if (event.key === 'Escape') {
        setExploreOpen(false)
        exploreButtonRef.current?.focus()
      }
    }

    document.addEventListener('pointerdown', closeOnOutsideClick)
    document.addEventListener('keydown', closeOnEscape)
    return () => {
      document.removeEventListener('pointerdown', closeOnOutsideClick)
      document.removeEventListener('keydown', closeOnEscape)
    }
  }, [exploreOpen])

  return (
    <header className="sticky top-0 z-50 border-b border-line/80 bg-white/95 shadow-[0_8px_24px_-22px_rgba(27,16,31,0.35)] backdrop-blur-xl">
      <div className="relative mx-auto flex h-[4.5rem] max-w-7xl items-center justify-between gap-4 px-5 sm:px-8 lg:h-20 lg:px-10">
        <Link
          to="/"
          className="flex items-center shrink-0 rounded-sm outline-none focus-visible:ring-2 focus-visible:ring-accent/60 active:scale-[0.98] transition-transform duration-[var(--duration-fast)] ease-[var(--ease-out-quart)]"
          onClick={() => {
            setOpen(false)
            setExploreOpen(false)
          }}
        >
          {/* clip-path crops the 1px frame baked into logo.png without changing the mark */}
          <img
            src={site.logo}
            alt={site.name}
            className="h-9 w-auto max-w-[10.75rem] select-none sm:h-10 sm:max-w-none [clip-path:inset(2px)]"
          />
        </Link>

        <nav className="absolute left-1/2 hidden -translate-x-1/2 items-center gap-1 xl:flex" aria-label="Primary">
          {navLinks.map((link) => (
            <Fragment key={link.to}>
              {link.label === 'Clients' && (
                <div ref={exploreMenuRef} className="relative">
                  <button
                    ref={exploreButtonRef}
                    type="button"
                    aria-expanded={exploreOpen}
                    aria-controls="desktop-explore-links"
                    onClick={() => setExploreOpen((value) => !value)}
                    className="flex cursor-pointer items-center gap-1 rounded-md px-2 py-2 font-display text-xs font-medium text-ink-muted transition-colors hover:bg-brand/[0.05] hover:text-brand focus-visible:outline focus-visible:outline-2 focus-visible:outline-accent 2xl:px-2.5"
                  >
                    Explore
                    <ChevronDown
                      size={13}
                      className={`transition-transform ${exploreOpen ? 'rotate-180' : ''}`}
                    />
                  </button>
                  {exploreOpen && (
                    <div
                      id="desktop-explore-links"
                      className="absolute left-0 top-full z-50 mt-2 w-56 rounded-lg border border-line bg-white p-2 shadow-xl"
                    >
                      {exploreLinks.map((exploreLink) => (
                        <Link
                          key={exploreLink.to}
                          to={exploreLink.to}
                          onClick={() => setExploreOpen(false)}
                          className="block rounded-md px-3 py-2 font-display text-sm text-ink-muted transition-colors hover:bg-brand/[0.05] hover:text-brand"
                        >
                          {exploreLink.label}
                        </Link>
                      ))}
                    </div>
                  )}
                </div>
              )}
              <NavLink
                to={link.to}
                onClick={() => setExploreOpen(false)}
                className={({ isActive }) =>
                  `rounded-md px-2 py-2 font-display text-xs font-medium transition-colors duration-[var(--duration-fast)] 2xl:px-2.5 ${
                    isActive
                    ? 'bg-brand/[0.07] text-brand'
                    : 'text-ink-muted hover:bg-brand/[0.05] hover:text-brand'
                  }`
                }
              >
                {link.label}
              </NavLink>
            </Fragment>
          ))}
        </nav>

        <button
          type="button"
          className="inline-flex size-10 items-center justify-center rounded-full text-brand transition-colors hover:bg-brand/[0.06] active:scale-[0.97] xl:hidden"
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
            className="absolute left-0 right-0 top-full max-h-[calc(100svh-4.5rem)] overflow-y-auto border-t border-line bg-white shadow-xl origin-top xl:hidden"
            initial={reduced ? false : { opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={reduced ? undefined : { opacity: 0, height: 0 }}
            transition={{ duration: 0.28, ease: [0.16, 1, 0.3, 1] }}
          >
            <nav className="mx-auto flex max-w-7xl flex-col gap-1 px-5 py-4 sm:px-8" aria-label="Mobile">
              {navLinks.map((link) => (
                <Fragment key={link.to}>
                  {link.label === 'Clients' && (
                    <>
                      <button
                        type="button"
                        aria-expanded={exploreOpen}
                        aria-controls="mobile-explore-links"
                        onClick={() => setExploreOpen((value) => !value)}
                        className="flex items-center justify-between rounded-lg px-3 py-3 text-left font-display text-base font-medium text-ink transition-colors hover:bg-brand/[0.04] hover:text-brand"
                      >
                        Explore
                        <ChevronDown
                          size={18}
                          className={`transition-transform ${exploreOpen ? 'rotate-180' : ''}`}
                        />
                      </button>
                      {exploreOpen && (
                        <div id="mobile-explore-links" className="ml-3 border-l border-line pl-3">
                          {exploreLinks.map((exploreLink) => (
                            <NavLink
                              key={exploreLink.to}
                              to={exploreLink.to}
                              onClick={() => {
                                setOpen(false)
                                setExploreOpen(false)
                              }}
                              className={({ isActive }) =>
                                `block rounded-md px-3 py-2.5 font-display text-sm ${
                                  isActive ? 'text-brand bg-brand/[0.06]' : 'text-ink-muted'
                                }`
                              }
                            >
                              {exploreLink.label}
                            </NavLink>
                          ))}
                        </div>
                      )}
                    </>
                  )}
                  <NavLink
                    to={link.to}
                    onClick={() => setOpen(false)}
                    className={({ isActive }) =>
                      `rounded-lg px-3 py-3 font-display text-base font-medium ${
                        isActive ? 'text-brand bg-brand/[0.06]' : 'text-ink'
                      }`
                    }
                  >
                    {link.label}
                  </NavLink>
                </Fragment>
              ))}
            </nav>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  )
}
