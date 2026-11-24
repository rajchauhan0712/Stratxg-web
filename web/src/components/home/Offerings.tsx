import { useState } from 'react'
import { AnimatePresence, motion } from 'motion/react'
import { home } from '../../content/home'
import { Section } from '../ui/Section'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

export function Offerings() {
  const { offerings } = home
  const [active, setActive] = useState(offerings.tabs[0].id)
  const reduced = usePrefersReducedMotion()
  const tab = offerings.tabs.find((t) => t.id === active) ?? offerings.tabs[0]

  return (
    <Section
      id="offerings"
      title={offerings.sectionTitle}
      eyebrow="What we do"
      className="bg-surface-elevated/60"
    >
      <div
        role="tablist"
        aria-label="Offerings"
        className="inline-flex flex-wrap gap-1 rounded-lg bg-line/60 p-1 mb-10"
      >
        {offerings.tabs.map((t) => {
          const isActive = t.id === active
          return (
            <button
              key={t.id}
              type="button"
              role="tab"
              aria-selected={isActive}
              onClick={() => setActive(t.id)}
              className={`font-display text-sm px-4 py-2 rounded-md transition-[background-color,color,transform] duration-[var(--duration-fast)] active:scale-[0.97] ${
                isActive
                  ? 'bg-brand text-white shadow-sm'
                  : 'text-ink-muted hover:text-brand'
              }`}
            >
              {t.label}
            </button>
          )
        })}
      </div>

      <AnimatePresence mode="wait">
        <motion.div
          key={tab.id}
          role="tabpanel"
          initial={reduced ? false : { opacity: 0, y: 10 }}
          animate={{ opacity: 1, y: 0 }}
          exit={reduced ? undefined : { opacity: 0, y: -8 }}
          transition={{ duration: 0.28, ease: [0.16, 1, 0.3, 1] }}
          className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3"
        >
          {tab.items.map((item) => (
            <article
              key={item.title}
              className="rounded-xl border border-line bg-surface p-5 transition-colors hover:border-brand/25"
            >
              <h3 className="font-display text-base font-semibold text-brand">
                {item.title}
              </h3>
              <p className="mt-2 text-sm leading-relaxed text-ink-muted">
                {item.body}
              </p>
            </article>
          ))}
        </motion.div>
      </AnimatePresence>
    </Section>
  )
}
