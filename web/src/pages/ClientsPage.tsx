import { clients } from '../content/clients'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'

export function ClientsPage() {
  return (
    <>
      <PageHero
        title={clients.pageTitle.title}
        subtitle={clients.pageTitle.subtitle}
        background={clients.pageTitle.background}
      />

      <Section
        title={clients.clientsHeading}
        description="Trusted across consulting, technology, education, and healthcare engagements."
      >
        <div className="grid gap-6 md:grid-cols-3">
          {clients.testimonials.map((item, i) => (
            <AnimatedCard
              key={item.author}
              delay={i * 0.08}
              className="rounded-xl border border-line bg-surface-elevated p-6 flex flex-col"
            >
              <blockquote className="text-ink-muted leading-relaxed flex-1">
                “{item.quote}”
              </blockquote>
              <div className="mt-6 flex items-center gap-3">
                <img
                  src={item.avatar}
                  alt=""
                  className="size-11 rounded-full object-cover"
                />
                <p className="font-display text-sm font-medium text-brand">
                  {item.author}
                </p>
              </div>
            </AnimatedCard>
          ))}
        </div>
      </Section>

      <Section
        title={clients.strategicPartners.sectionTitle}
        eyebrow="Partners"
        className="bg-surface-elevated/50"
      >
        <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          {clients.strategicPartners.items.map((partner, i) => (
            <AnimatedCard
              key={partner.logo}
              delay={(i % 3) * 0.05}
              className="rounded-xl border border-line bg-white p-6 flex flex-col gap-4"
            >
              <div className="h-14 flex items-center">
                <img
                  src={partner.logo}
                  alt=""
                  className="max-h-12 max-w-[160px] object-contain"
                />
              </div>
              <p className="text-sm text-ink-muted leading-relaxed">
                {partner.description}
              </p>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}
