import { useState } from 'react'
import { AnimatePresence, motion } from 'motion/react'
import type { LucideIcon } from 'lucide-react'
import {
  BarChart3,
  Bot,
  Briefcase,
  Cpu,
  Fingerprint,
  HeartPulse,
  Landmark,
  Lightbulb,
  LineChart,
  Network,
  RefreshCw,
  Scale,
  ShieldCheck,
  TrendingUp,
  Users,
  Workflow,
} from 'lucide-react'
import { home } from '../../content/home'
import { Section } from '../ui/Section'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

const tabIcons: Record<string, LucideIcon> = {
  strategy: BarChart3,
  transformation: RefreshCw,
  growth: TrendingUp,
}

const itemIcons: Record<string, LucideIcon> = {
  'Business Modeling': LineChart,
  'Design Thinking': Lightbulb,
  'Management Consulting': Briefcase,
  'Knowledge Services': Landmark,
  'Business Transformation': Workflow,
  'Digital Transformation': Cpu,
  'Robotic Process Automation': Bot,
  'IOT Enabled Solutions': Network,
  'Technology Integration': Network,
  'Profitablity Management': TrendingUp,
  'Governance, Risk and Compliance': Scale,
  'Quality Management & Continual Improvement': ShieldCheck,
  'Finance Transformation': Landmark,
  'HR Transformation': Users,
  'Employee Safety, Security & Health': HeartPulse,
}

export function Offerings() {
  const { offerings } = home
  const [active, setActive] = useState(offerings.tabs[0].id)
  const reduced = usePrefersReducedMotion()
  const tab = offerings.tabs.find((t) => t.id === active) ?? offerings.tabs[0]
  const panelId = `offerings-panel-${tab.id}`

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
          const TabIcon = tabIcons[t.id] ?? BarChart3
          const tabId = `offerings-tab-${t.id}`
          return (
            <button
              key={t.id}
              id={tabId}
              type="button"
              role="tab"
              aria-selected={isActive}
              aria-controls={`offerings-panel-${t.id}`}
              tabIndex={isActive ? 0 : -1}
              onClick={() => setActive(t.id)}
              className={`inline-flex items-center gap-2 font-display text-sm px-4 py-2 rounded-md transition-[background-color,color,transform] duration-[var(--duration-fast)] ease-[var(--ease-out-quart)] active:scale-[0.97] ${
                isActive
                  ? 'bg-brand text-white shadow-sm'
                  : 'text-ink-muted hover:text-brand hover:bg-brand/[0.04]'
              }`}
            >
              <TabIcon
                size={16}
                strokeWidth={1.75}
                aria-hidden
                className={isActive ? 'text-accent' : 'text-current opacity-80'}
              />
              {t.label}
            </button>
          )
        })}
      </div>

      <AnimatePresence mode="wait">
        <motion.div
          key={tab.id}
          id={panelId}
          role="tabpanel"
          aria-labelledby={`offerings-tab-${tab.id}`}
          initial={reduced ? false : { opacity: 0, y: 10 }}
          animate={{ opacity: 1, y: 0 }}
          exit={reduced ? undefined : { opacity: 0, y: -8 }}
          transition={{ duration: 0.28, ease: [0.16, 1, 0.3, 1] }}
          className="grid min-h-[28rem] gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:min-h-[22rem]"
        >
          {tab.items.map((item) => {
            const ItemIcon = itemIcons[item.title] ?? Fingerprint
            return (
              <article
                key={item.title}
                className="rounded-xl border border-line bg-surface p-5 transition-colors duration-[var(--duration-fast)] ease-[var(--ease-out-quart)] hover:border-brand/25"
              >
                <div className="inline-flex size-10 items-center justify-center rounded-lg bg-brand/8 text-brand mb-3">
                  <ItemIcon size={20} strokeWidth={1.75} aria-hidden />
                </div>
                <h3 className="font-display text-base font-semibold text-brand">
                  {item.title}
                </h3>
                <p className="mt-2 text-sm leading-relaxed text-ink-muted">
                  {item.body}
                </p>
              </article>
            )
          })}
        </motion.div>
      </AnimatePresence>
    </Section>
  )
}
