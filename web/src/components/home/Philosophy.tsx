import { home } from '../../content/home'
import { AnimatedCard } from '../ui/AnimatedCard'
import { Section } from '../ui/Section'

export function Philosophy() {
  const { successPhilosophy } = home

  return (
    <Section
      title={successPhilosophy.sectionTitle}
      eyebrow="Approach"
      description="Three connected movements that keep clients profitable, relevant, and ready for change."
    >
      <div className="grid gap-6 md:grid-cols-3">
        {successPhilosophy.items.map((item, i) => (
          <AnimatedCard
            key={item.title}
            delay={i * 0.08}
            className="group overflow-hidden rounded-xl bg-surface-elevated border border-line cursor-default"
          >
            <div className="aspect-[4/3] overflow-hidden">
              <img
                src={item.image}
                alt=""
                className="h-full w-full object-cover transition-transform duration-500 ease-[var(--ease-out-expo)] group-hover:scale-[1.04]"
              />
            </div>
            <div className="p-6">
              <h3 className="font-display text-xl font-semibold text-brand">
                {item.title}
              </h3>
              <p className="mt-3 text-sm leading-relaxed text-ink-muted">
                {item.body}
              </p>
            </div>
          </AnimatedCard>
        ))}
      </div>
    </Section>
  )
}
