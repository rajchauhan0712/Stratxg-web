import { advisors } from '../content/advisors'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'

export function AdvisorsPage() {
  const seo = pageSeo.advisors
  return (
    <>
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <PageHero
        title={advisors.pageTitle.title}
        subtitle={advisors.pageTitle.subtitle}
        background={advisors.pageTitle.background}
      />

      <Section
        title={advisors.sectionTitle}
        description="Seasoned mentors across education, technology, healthcare, energy, and markets."
      >
        <div className="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          {advisors.people.map((person, i) => (
            <AnimatedCard
              key={person.name}
              delay={(i % 6) * 0.04}
              className="rounded-xl border border-line bg-surface-elevated overflow-hidden group cursor-default"
            >
              <div className="aspect-square overflow-hidden bg-line/40">
                <img
                  src={person.image}
                  alt={person.name}
                  className="h-full w-full object-cover object-top transition-transform duration-500 ease-[var(--ease-out-expo)] group-hover:scale-[1.03]"
                />
              </div>
              <div className="p-4">
                <h3 className="font-display text-base font-semibold text-brand">
                  {person.name}
                </h3>
                <p className="mt-1 text-sm text-ink-muted leading-snug">
                  {person.title}
                </p>
              </div>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}
