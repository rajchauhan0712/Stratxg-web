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
              className="surface-card h-full p-6 transition-[transform,border-color,box-shadow] duration-300 hover:-translate-y-1 hover:border-brand/20 hover:shadow-[0_24px_50px_-34px_rgba(50,19,63,0.38)]"
            >
              <div className="mb-5 inline-flex size-11 items-center justify-center rounded-xl bg-brand/[0.06] text-brand">
                <Icon size={20} strokeWidth={1.75} />
              </div>
              <h3 className="font-display text-xl font-semibold leading-snug text-brand">
                {pillar.title}
              </h3>
              <p className="mt-3 text-sm leading-6 text-ink-muted">
                {pillar.body}
              </p>
            </AnimatedCard>
          )
        })}
      </div>
    </Section>
  )
}
