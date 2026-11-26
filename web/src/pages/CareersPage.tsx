import {
  ArrowRight,
  Award,
  Compass,
  Flame,
  Handshake,
  Heart,
  Lightbulb,
  RefreshCw,
  Sparkles,
  Target,
  TrendingUp,
  Workflow,
  Zap,
} from 'lucide-react'
import { Seo } from '../components/Seo'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Button } from '../components/ui/Button'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { site } from '../content/site'

const values = [
  { title: 'Venturous Entrepreneur', icon: Compass },
  { title: 'Trustworthy Devotee', icon: Handshake },
  { title: 'Experienced Motivator', icon: Award },
  { title: 'Dependable Optimizer', icon: Workflow },
  { title: 'Dynamic Realist', icon: TrendingUp },
  { title: 'Change Ambassador', icon: RefreshCw },
  { title: 'Purposeful Trailblazer', icon: Target },
  { title: 'Whimsical Loyalist', icon: Heart },
  { title: 'Fearless Opportunist', icon: Flame },
  { title: 'Ambitious Visionary', icon: Sparkles },
  { title: 'Persistent Ideator', icon: Lightbulb },
  { title: 'Inquisitive Facilitator', icon: Zap },
]

const capabilities = [
  'Strategy & business modeling',
  'Project management consulting',
  'Business transformation',
  'Technology integration',
  'Process excellence',
  'Digital transformation',
  'Robotic process automation',
  'IoT-enabled solutions',
  'Design thinking',
]

const growthAreas = [
  'Disruption, innovation, and strategy',
  'Technology, consulting, and digital solutions',
  'Risk, compliance, and organization building',
  'Process, project, and data science',
  'Understanding business-critical challenges',
  'Building sustainable business models',
  'Improving revenue and eliminating leakages',
  'Cost optimization and productivity',
]

const teamPhotos = [
  {
    src: '/images/seventh.jpeg',
    alt: 'StratXG representatives supporting a community initiative',
  },
  {
    src: '/images/eightth.jpeg',
    alt: 'StratXG team sharing a learning experience with students',
  },
  {
    src: '/images/ninth.jpeg',
    alt: 'Learners celebrating their achievements at a StratXG program',
  },
]

export function CareersPage() {
  return (
    <>
      <Seo
        title={`Careers | ${site.name}`}
        description="Bring your passion for strategy, technology, consulting, and transformation to StratXG. Explore how our people turn complex challenges into opportunities."
        path="/careers"
      />
      <PageHero
        title="Careers at StratXG"
        subtitle="Harness your priceless passion. Grow your skills while helping transform challenges into business opportunities."
        background="/images/bg/careers.png"
        showCta={false}
      />

      <Section
        eyebrow="The people behind our progress"
        title="What we offer. Our fuel for success."
        description="We value people who bring curiosity, ownership, and a different perspective to the work."
        className="bg-white"
      >
        <ul className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          {values.map(({ title, icon: Icon }, index) => (
            <li key={title}>
              <AnimatedCard
                delay={(index % 4) * 0.04}
                className="surface-card group flex h-full min-h-40 flex-col justify-between rounded-xl p-5 transition-[border-color,background-color] duration-300 hover:border-brand/20 hover:bg-brand/[0.02]"
              >
                <span className="flex items-center justify-between">
                  <span className="inline-flex size-11 items-center justify-center rounded-xl bg-brand/[0.06] text-brand transition-colors group-hover:bg-accent/20">
                    <Icon size={21} strokeWidth={1.7} aria-hidden />
                  </span>
                  <span className="font-display text-xs font-semibold tabular-nums tracking-widest text-ink-muted/60">
                    {String(index + 1).padStart(2, '0')}
                  </span>
                </span>
                <h3 className="mt-7 font-display text-base font-semibold leading-snug text-brand">
                  {title}
                </h3>
              </AnimatedCard>
            </li>
          ))}
        </ul>
      </Section>

      <Section
        eyebrow="Our purpose"
        title="Transforming every challenge into a business opportunity"
        className="bg-surface-elevated/60"
      >
        <div className="grid items-center gap-8 lg:grid-cols-[1.05fr_0.95fr] lg:gap-14">
          <div className="space-y-5 text-base leading-7 text-ink-muted">
            <p>
              StratXG is a young and digital consulting company, reinvigorating
              growth through strategic repositioning in education, healthcare,
              infrastructure, and utilities.
            </p>
            <p>
              We help transform organizations from non-compliant business units
              into profitable ventures. Our work draws on knowledge services,
              sector best practices, ground-level execution, industry
              re-engineering, compliance management, and business-model
              consulting.
            </p>
            <p>
              Our delivery focus is on enabling new ways of doing business,
              embracing digital transformation, and helping clients stay
              profitable and relevant.
            </p>
          </div>
          <div className="relative">
            <img
              src="/images/img/Landing_hero_careers.png"
              alt="Join the StratXG team"
              loading="lazy"
              decoding="async"
              className="mx-auto w-full max-w-2xl"
            />
            <div className="absolute inset-x-5 bottom-0 -z-10 h-2/3 rounded-3xl bg-accent/15 blur-2xl" />
          </div>
        </div>
      </Section>

      <Section
        eyebrow="Where business thinking stops, ours starts"
        title="Who we are"
        description="A multidisciplinary team working across sectors to make complex change practical."
      >
        <div className="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">
          <div className="space-y-4 text-ink-muted">
            <p className="text-base leading-7">
              Our people combine strategic thinking, technical knowledge, and
              hands-on delivery to help organizations move forward.
            </p>
            <p className="text-sm leading-6">
              From business modelling to digital solutions, every capability
              contributes to a more effective, sustainable outcome for clients.
            </p>
          </div>
          <ul className="grid gap-3 sm:grid-cols-2">
            {capabilities.map((capability, index) => (
              <li
                key={capability}
                className="flex items-center gap-3 rounded-lg border border-line bg-white p-4"
              >
                <span className="inline-flex size-8 shrink-0 items-center justify-center rounded-lg bg-brand/[0.06] font-display text-xs font-semibold text-brand">
                  {String(index + 1).padStart(2, '0')}
                </span>
                <span className="font-display text-sm font-medium leading-5 text-ink">
                  {capability}
                </span>
              </li>
            ))}
          </ul>
        </div>
      </Section>

      <Section
        eyebrow="Learning and growth"
        title="What will you learn?"
        description="Work alongside experienced professionals and build skills across the disciplines that shape modern business."
        className="bg-brand text-white"
      >
        <ul className="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
          {growthAreas.map((area) => (
            <li
              key={area}
              className="flex min-h-24 items-start gap-3 rounded-xl border border-white/10 bg-white/[0.06] p-4 text-sm leading-6 text-white/85"
            >
              <span className="mt-2 size-2 shrink-0 rounded-full bg-accent" />
              {area}
            </li>
          ))}
        </ul>
      </Section>

      <Section
        title="Growing through shared experiences"
        description="A few moments from our work with teams, learners, and communities."
      >
        <ul className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          {teamPhotos.map((photo) => (
            <li
              key={photo.src}
              className="surface-card overflow-hidden rounded-xl"
            >
              <img
                src={photo.src}
                alt={photo.alt}
                loading="lazy"
                decoding="async"
                className="aspect-[4/3] w-full object-cover transition-transform duration-500 hover:scale-[1.03]"
              />
            </li>
          ))}
        </ul>
      </Section>

      <section className="px-5 pb-16 md:px-8 md:pb-20">
        <div className="relative mx-auto flex max-w-6xl flex-col gap-7 overflow-hidden rounded-2xl bg-brand p-7 text-white sm:p-10 lg:flex-row lg:items-center lg:justify-between lg:p-12">
          <div
            aria-hidden="true"
            className="absolute -right-14 -top-20 size-64 rounded-full bg-accent/15 blur-3xl"
          />
          <div className="relative max-w-2xl">
            <p className="font-display text-xs font-semibold uppercase tracking-[0.18em] text-accent">
              Your next chapter
            </p>
            <h2 className="mt-3 font-display text-2xl font-semibold leading-tight text-white sm:text-3xl">
              Ready to grow with a team of passionate professionals?
            </h2>
            <p className="mt-3 text-sm leading-6 text-white/75 sm:text-base">
              Introduce yourself and share how you would like to contribute.
              Our team will be glad to hear from you.
            </p>
          </div>
          <Button
            href="mailto:careers@stratxg.com?subject=Career%20enquiry%20-%20StratXG"
            variant="onDark"
            size="lg"
            className="relative shrink-0"
          >
            Email careers@stratxg.com
            <ArrowRight size={17} aria-hidden />
          </Button>
        </div>
      </section>
    </>
  )
}
