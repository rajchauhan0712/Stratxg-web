import { BarChart3, BookOpen, Cpu, Settings2 } from 'lucide-react'
import { home } from '../../content/home'
import { AnimatedCard } from '../ui/AnimatedCard'
import { Section } from '../ui/Section'

const icons = [BarChart3, Settings2, Cpu, BookOpen]

export function Pillars() {
  return (
    <Section className="!py-0">
      <div className="-mt-8 relative z-20 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
        {home.pillars.map((pillar, i) => {
          const Icon = icons[i] ?? BarChart3
          return (
            <AnimatedCard
              key={pillar.title}
              delay={i * 0.06}
              className="rounded-xl bg-surface-elevated border border-line p-6 shadow-[0_12px_40px_-24px_rgba(54,17,52,0.35)] cursor-default"
            >
              <div className="inline-flex size-10 items-center justify-center rounded-lg bg-brand/8 text-brand mb-4">
                <Icon size={20} strokeWidth={1.75} />
              </div>
              <h3 className="font-display text-lg font-semibold text-brand">
                {pillar.title}
              </h3>
              <p className="mt-2 text-sm leading-relaxed text-ink-muted">
                {pillar.body}
              </p>
            </AnimatedCard>
          )
        })}
      </div>
    </Section>
  )
}
