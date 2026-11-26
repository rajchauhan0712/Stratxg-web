import { home } from '../../content/home'
import { AnimatedCard } from '../ui/AnimatedCard'
import { Section } from '../ui/Section'

function pad(n: number) {
  return String(n).padStart(2, '0')
}

export function Philosophy() {
  const { successPhilosophy } = home

  return (
    <Section
      title={successPhilosophy.sectionTitle}
    >
      <ol className="grid gap-5 md:grid-cols-3 md:gap-6">
        {successPhilosophy.items.map((item, i) => (
          <li key={item.title}>
            <AnimatedCard
              delay={0.04 + i * 0.07}
              className="group h-full rounded-xl border border-line bg-surface-elevated p-6 shadow-[0_12px_40px_-24px_rgba(54,17,52,0.28)] cursor-default transition-[border-color] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] [@media(hover:hover)_and_(pointer:fine)]:hover:border-brand/20"
            >
              <div className="flex items-start justify-between gap-3">
                <div className="inline-flex size-20 shrink-0 items-center justify-center rounded-xl bg-brand/[0.06] ring-1 ring-brand/10">
                  <img
                    src={item.image}
                    alt=""
                    className="size-[4.25rem] object-contain transition-transform duration-[var(--duration-slow)] ease-[var(--ease-out-expo)] [@media(hover:hover)_and_(pointer:fine)]:group-hover:scale-[1.04]"
                  />
                </div>
                <span
                  aria-hidden
                  className="font-display text-xs font-semibold tabular-nums tracking-[0.14em] text-accent-dark"
                >
                  {pad(i + 1)}
                </span>
              </div>

              <h3 className="mt-5 font-display text-xl font-semibold text-brand">
                {item.title}
              </h3>

              <ul className="mt-4 space-y-2.5">
                {item.points.map((point) => (
                  <li
                    key={point}
                    className="flex gap-2.5 text-sm leading-relaxed text-ink-muted"
                  >
                    <span
                      aria-hidden
                      className="mt-2 size-1.5 shrink-0 rounded-full bg-accent"
                    />
                    <span>{point}</span>
                  </li>
                ))}
              </ul>
            </AnimatedCard>
          </li>
        ))}
      </ol>
    </Section>
  )
}
