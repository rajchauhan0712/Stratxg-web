import { about } from '../content/about'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'
import { ExternalLink } from 'lucide-react'

export function AboutPage() {
  const { pageTitle, whoWeAre, recognitions, leaders, usp } = about
  const seo = pageSeo.about

  return (
    <>
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <PageHero
        title={pageTitle.title}
        subtitle={pageTitle.subtitle}
        background={pageTitle.background}
      />

      <Section title={whoWeAre.title}>
        <div className="grid gap-10 lg:grid-cols-[1.4fr_1fr]">
          <div className="space-y-5 text-ink-muted leading-relaxed whitespace-pre-line">
            <p>{whoWeAre.body}</p>
            <ul className="space-y-3 text-ink">
              <li className="pl-4 border-l-2 border-accent">{whoWeAre.credo}</li>
              <li className="pl-4 border-l-2 border-accent">{whoWeAre.vision}</li>
              <li className="pl-4 border-l-2 border-accent">{whoWeAre.mission}</li>
              <li className="pl-4 border-l-2 border-line">{whoWeAre.pride}</li>
            </ul>
            <p>{whoWeAre.partners}</p>
            <p>{whoWeAre.keyCustomers}</p>
            <p>{whoWeAre.teamPresence}</p>
          </div>

          <aside className="rounded-2xl border border-line bg-surface-elevated p-6 h-fit">
            <h3 className="font-display text-lg font-semibold text-brand mb-4">
              {recognitions.title}
            </h3>
            <ul className="space-y-3">
              {recognitions.items.map((item) => (
                <li
                  key={item}
                  className="text-sm leading-relaxed text-ink-muted pl-3 border-l border-accent/60"
                >
                  {item}
                </li>
              ))}
            </ul>
          </aside>
        </div>
      </Section>

      <Section
        title={leaders.sectionTitle}
        eyebrow="Leadership"
        className="bg-surface-elevated/50"
      >
        <div className="grid gap-6 md:grid-cols-3">
          {leaders.people.map((person, i) => (
            <AnimatedCard
              key={person.name}
              delay={i * 0.07}
              className="rounded-xl border border-line bg-surface overflow-hidden"
            >
              <img
                src={person.image}
                alt={person.name}
                className="aspect-[4/3] w-full object-cover object-top"
              />
              <div className="p-5">
                <div className="flex items-start justify-between gap-3">
                  <div>
                    <h3 className="font-display text-lg font-semibold text-brand">
                      {person.name}
                    </h3>
                    <p className="text-sm text-accent-dark mt-0.5">{person.title}</p>
                  </div>
                  <a
                    href={person.linkedin}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-ink-muted hover:text-brand transition-colors p-1"
                    aria-label={`${person.name} on LinkedIn`}
                  >
                    <ExternalLink size={18} />
                  </a>
                </div>
                <ul className="mt-4 space-y-2">
                  {person.bio.map((line) => (
                    <li key={line} className="text-sm text-ink-muted leading-relaxed">
                      {line}
                    </li>
                  ))}
                </ul>
              </div>
            </AnimatedCard>
          ))}
        </div>
      </Section>

      <Section title={usp.sectionTitle} eyebrow="Differentiators">
        <div className="grid gap-3 sm:grid-cols-2">
          {usp.items.map((item, i) => (
            <AnimatedCard
              key={item}
              delay={(i % 4) * 0.04}
              className="rounded-xl border border-line bg-white p-5"
            >
              <p className="text-sm leading-relaxed text-ink-muted">{item}</p>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}
