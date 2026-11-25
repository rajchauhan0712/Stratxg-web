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
        eyebrow="Expertise at the table"
        description="Seasoned mentors across education, technology, healthcare, energy, and markets."
      >
        <div className="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          {advisors.people.map((person, i) => (
            <AnimatedCard
              key={person.name}
              delay={(i % 6) * 0.04}
              className="surface-card group h-full overflow-hidden"
            >
              <div className="relative aspect-[4/3] overflow-hidden bg-line/40">
                <img
                  src={person.image}
                  alt={person.name}
                  loading={i < 4 ? 'eager' : 'lazy'}
                  className="h-full w-full object-cover object-top transition-transform duration-500 ease-[var(--ease-out-expo)] group-hover:scale-[1.04]"
                />
                <div className="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-brand/35 to-transparent opacity-0 transition-opacity group-hover:opacity-100" />
              </div>
              <div className="flex h-[7.5rem] flex-col p-5">
                <h3 className="font-display text-lg font-semibold leading-snug text-brand">
                  {person.name}
                </h3>
                <p className="mt-2 line-clamp-2 text-sm leading-5 text-ink-muted">
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
