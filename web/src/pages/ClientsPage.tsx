import { clients } from '../content/clients'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'

export function ClientsPage() {
  const seo = pageSeo.clients
  return (
    <>
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <PageHero
        title={clients.pageTitle.title}
        subtitle={clients.pageTitle.subtitle}
        background={clients.pageTitle.background}
      />

      <Section
        title="Trusted by teams across sectors"
        eyebrow="Trusted partnerships"
        description="A few words from the people and teams we have worked alongside."
      >
        <div className="grid gap-6 md:grid-cols-3">
          {clients.testimonials.map((item, i) => (
            <AnimatedCard
              key={item.author}
              delay={i * 0.08}
              className="surface-card flex h-full flex-col p-6 sm:p-7"
            >
              <span
                aria-hidden="true"
                className="font-display text-5xl leading-[0.7] text-accent-dark/70"
              >
                “
              </span>
              <blockquote className="mt-4 flex-1 text-sm leading-7 text-ink-muted sm:text-[0.94rem]">
                {item.quote}
              </blockquote>
              <div className="mt-6 flex items-center gap-3 border-t border-line pt-5">
                <img
                  src={item.avatar}
                  alt=""
                  loading="lazy"
                  className="size-12 rounded-full border border-line object-cover"
                />
                <p className="font-display text-sm font-semibold leading-5 text-brand">
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
        className="bg-white"
      >
        <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          {clients.strategicPartners.items.map((partner, i) => (
            <AnimatedCard
              key={partner.logo}
              delay={(i % 3) * 0.05}
              className="group flex h-full flex-col gap-5 rounded-xl border border-line bg-surface p-6 transition-[transform,border-color,box-shadow] duration-300 hover:-translate-y-1 hover:border-brand/20 hover:shadow-[0_24px_50px_-36px_rgba(50,19,63,0.38)]"
            >
              <div className="flex h-16 items-center justify-center rounded-lg border border-line/70 bg-white px-4">
                <img
                  src={partner.logo}
                  alt=""
                  loading="lazy"
                  className="max-h-12 max-w-[170px] object-contain transition-transform duration-300 group-hover:scale-[1.03]"
                />
              </div>
              <p className="flex-1 text-sm leading-6 text-ink-muted">
                {partner.description}
              </p>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}
