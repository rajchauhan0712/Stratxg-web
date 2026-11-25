import { Link } from 'react-router-dom'
import { ArrowUpRight } from 'lucide-react'
import { industries } from '../content/industries'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'

export function IndustriesPage() {
  const seo = pageSeo.industries
  return (
    <>
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <PageHero
        title="Industries"
        subtitle="Sector expertise across education, healthcare, infrastructure, technology, utilities, and more."
      />

      <Section
        title="Where we create impact"
        description="Specialist teams combine sector knowledge with practical strategy, technology, and delivery experience."
      >
        <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
          {industries.map((industry, i) => (
            <AnimatedCard
              key={industry.slug}
              delay={(i % 4) * 0.05}
              className="group h-full"
            >
              <Link
                to={`/industries/${industry.slug}`}
                className="surface-card flex h-full flex-col p-6 transition-[transform,border-color,box-shadow] duration-300 hover:-translate-y-1 hover:border-brand/20 hover:shadow-[0_24px_50px_-34px_rgba(50,19,63,0.38)] focus-visible:outline"
              >
                <div className="flex items-center justify-between gap-4">
                  <p className="font-display text-[0.68rem] font-semibold uppercase tracking-[0.16em] text-accent-dark">
                    {industry.navLabel}
                  </p>
                  <span className="inline-flex size-9 shrink-0 items-center justify-center rounded-full bg-brand/[0.05] text-brand transition-colors group-hover:bg-brand group-hover:text-white">
                    <ArrowUpRight size={17} />
                  </span>
                </div>
                <h3 className="mt-5 font-display text-xl font-semibold leading-snug tracking-[-0.02em] text-brand text-balance">
                  {industry.title}
                </h3>
                <p className="mt-3 line-clamp-4 flex-1 text-sm leading-6 text-ink-muted">
                  {industry.summary}
                </p>
                <span className="mt-5 inline-flex items-center gap-2 font-display text-sm font-semibold text-brand">
                  Explore sector <ArrowUpRight size={15} aria-hidden="true" />
                </span>
              </Link>
            </AnimatedCard>
          ))}
        </div>

        <p className="mt-10 text-sm text-ink-muted">
          Looking for a specific engagement?{' '}
          <Link to="/contact" className="font-semibold text-brand underline underline-offset-4">
            Talk to our team
          </Link>
          .
        </p>
      </Section>
    </>
  )
}
