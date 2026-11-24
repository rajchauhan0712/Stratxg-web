import { Link } from 'react-router-dom'
import { ArrowUpRight } from 'lucide-react'
import { industries } from '../content/industries'
import { site } from '../content/site'
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
        description="Explore our industry focus areas. Detailed sector pages remain on the live site for now."
      >
        <div className="grid gap-4 sm:grid-cols-2">
          {industries.map((industry, i) => (
            <AnimatedCard
              key={industry.slug}
              delay={(i % 4) * 0.05}
              className="rounded-xl border border-line bg-surface-elevated p-6 group"
            >
              <div className="flex items-start justify-between gap-4">
                <div>
                  <p className="font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent-dark mb-2">
                    {industry.navLabel}
                  </p>
                  <h3 className="font-display text-xl font-semibold text-brand text-balance">
                    {industry.title}
                  </h3>
                </div>
                <a
                  href={`${site.legacyBaseUrl}/${industry.slug}.php`}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="shrink-0 inline-flex size-9 items-center justify-center rounded-md border border-line text-ink-muted hover:text-brand hover:border-brand/30 transition-colors active:scale-[0.97]"
                  aria-label={`Open ${industry.navLabel} on live site`}
                >
                  <ArrowUpRight size={16} />
                </a>
              </div>
              <p className="mt-4 text-sm leading-relaxed text-ink-muted">
                {industry.summary}
              </p>
            </AnimatedCard>
          ))}
        </div>

        <p className="mt-10 text-sm text-ink-muted">
          Looking for a specific engagement?{' '}
          <Link to="/contact" className="text-brand underline underline-offset-4">
            Contact our team
          </Link>
          .
        </p>
      </Section>
    </>
  )
}
