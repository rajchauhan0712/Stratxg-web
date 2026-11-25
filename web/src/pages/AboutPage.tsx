import { about } from '../content/about'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'
import { Award, ExternalLink } from 'lucide-react'

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

      <Section eyebrow="Our story" title={whoWeAre.title}>
        <div className="grid items-start gap-8 lg:grid-cols-[1.25fr_0.75fr] lg:gap-12">
          <div>
            <div className="space-y-4 text-[0.96rem] leading-7 text-ink-muted">
              {whoWeAre.body.split('\n\n').map((paragraph) => (
                <p key={paragraph}>{paragraph}</p>
              ))}
            </div>
            <div className="mt-8 grid gap-3 sm:grid-cols-2">
              {[
                ['Our credo', whoWeAre.credo],
                ['Our vision', whoWeAre.vision],
                ['Our mission', whoWeAre.mission],
                ['Our pride', whoWeAre.pride],
              ].map(([label, text], index) => (
                <article
                  key={label}
                  className={`rounded-xl border p-5 ${
                    index === 3
                      ? 'border-brand/10 bg-brand text-white sm:col-span-2'
                      : 'border-line bg-white'
                  }`}
                >
                  <p
                    className={`font-display text-xs font-semibold uppercase tracking-[0.14em] ${
                      index === 3 ? 'text-accent' : 'text-accent-dark'
                    }`}
                  >
                    {label}
                  </p>
                  <p
                    className={`mt-2 text-sm leading-6 ${
                      index === 3 ? 'text-white/80' : 'text-ink-muted'
                    }`}
                  >
                    {text}
                  </p>
                </article>
              ))}
            </div>
            <div className="mt-8 space-y-4 border-t border-line pt-6 text-sm leading-6 text-ink-muted">
              <p>{whoWeAre.partners}</p>
              <p>{whoWeAre.keyCustomers}</p>
              <p>{whoWeAre.teamPresence}</p>
            </div>
          </div>

          <aside className="surface-card rounded-2xl p-6 sm:p-7 lg:sticky lg:top-28">
            <div className="mb-6 flex items-center gap-3">
              <span className="inline-flex size-11 items-center justify-center rounded-xl bg-accent/15 text-accent-dark">
                <Award size={21} />
              </span>
              <div>
                <p className="font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent-dark">
                  Trust & credentials
                </p>
                <h3 className="mt-1 font-display text-lg font-semibold text-brand">
                  {recognitions.title}
                </h3>
              </div>
            </div>
            <ul className="space-y-4">
              {recognitions.items.map((item) => (
                <li
                  key={item}
                  className="flex gap-3 text-sm leading-6 text-ink-muted"
                >
                  <span className="mt-2 size-1.5 shrink-0 rounded-full bg-accent-dark" />
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
        className="bg-white"
      >
        <div className="grid gap-6 md:grid-cols-3">
          {leaders.people.map((person, i) => (
            <AnimatedCard
              key={person.name}
              delay={i * 0.07}
              className="surface-card overflow-hidden"
            >
              <img
                src={person.image}
                alt={person.name}
                loading="lazy"
                decoding="async"
                className="aspect-[4/3] w-full bg-line object-cover object-top"
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
                <ul className="mt-4 space-y-3 border-t border-line pt-4">
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
        <div className="grid gap-4 sm:grid-cols-2">
          {usp.items.map((item, i) => (
            <AnimatedCard
              key={item}
              delay={(i % 4) * 0.04}
              className="surface-card group flex gap-4 p-5 transition-colors hover:border-brand/20"
            >
              <span className="inline-flex size-8 shrink-0 items-center justify-center rounded-lg bg-brand/[0.05] font-display text-xs font-semibold text-brand transition-colors group-hover:bg-accent/20">
                {String(i + 1).padStart(2, '0')}
              </span>
              <p className="text-sm leading-6 text-ink-muted">{item}</p>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}
