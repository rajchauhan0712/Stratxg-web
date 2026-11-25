import { ArrowRight, ExternalLink } from 'lucide-react'
import { Link, Navigate, useLocation, useParams } from 'react-router-dom'
import { Seo } from '../components/Seo'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Button } from '../components/ui/Button'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { industries } from '../content/industries'
import { site } from '../content/site'

const galleryPhotoNames = new Set([
  '1.jpg.webp', '2.jpg.webp', '3.jpg.webp', '4.jpg.webp', '5.jpg.webp',
  '7.jpg.webp', '8.jpg.webp', '9.jpg.webp', '10.jpg.webp', '11.jpg.webp',
  '12.jpg.webp', '14.jpg.webp', '16.jpg.webp', '17.jpg.webp', '18.jpg.webp',
  '19.jpg.webp', '22.jpg.webp', '28.jpg.webp', '29.jpg.webp', '30.jpg.webp',
  '31.jpg.webp', '32.jpg.webp', '33.jpg.webp', '34.jpg.webp', '35.jpg.webp',
  '36.jpg.webp', '37.jpg.webp', '38.jpg.webp', '39.jpg.webp', '40.jpg.webp',
  '42.jpg.webp', '43.jpg.webp', '44.jpg.webp', '46.jpg.webp', '54.jpg.webp',
  '55.jpg.webp', '57.jpg.webp', '63.jpg.webp', '64.jpg.webp', '65.jpg.webp',
  '66.jpg.webp', '68.jpg.webp', '69.jpg.webp', '70.jpg.webp', '72.jpg.webp',
  '73.jpg.webp', '74.jpg.webp', '75.jpg.webp', '76.jpg.webp', '77.jpg.webp',
  '78.jpg.webp', '79.jpg.webp', '87.jpg.webp', '88.jpg.webp', '95.jpg.webp',
  '96.jpg.webp', '98.jpg.webp', '100.jpg.webp', '101.jpg.webp',
  '102.jpg.webp', '104.jpg.webp',
])

const allGalleryFiles = Object.entries(
  import.meta.glob<string>('../assets/gallery/*.webp', {
    eager: true,
    import: 'default',
    query: '?url',
  }),
)
  .sort(([a], [b]) => a.localeCompare(b, undefined, { numeric: true }))
  .map(([path, src]) => ({
    name: path.slice(path.lastIndexOf('/') + 1),
    src,
  }))

const galleryFiles = allGalleryFiles.filter(({ name }) =>
  galleryPhotoNames.has(name),
)

const galleryByName = Object.fromEntries(
  allGalleryFiles.map(({ name, src }) => [name, src]),
)

function getGalleryAsset(name: string) {
  const src = galleryByName[`${name}.webp`] ?? galleryByName[name]
  if (!src) throw new Error(`Missing gallery image: ${name}`)
  return src
}

const industryVisuals: Record<string, string> = {
  edu: '/images/about_section/eeducation.PNG',
  healthcare: '/images/about_section/healthcare.PNG',
  infra: '/images/about_section/highway.PNG',
  it: '/images/about_section/digital.PNG',
  insurance: '/images/about_section/insuretech.PNG',
  msw: '/images/about_section/waste.PNG',
  smartcity: '/images/about_section/smartcity.PNG',
  textile: '/images/Textileindustry.jpg',
  utility: '/images/about_section/water.PNG',
  'cnf-space': '/images/bg/19.jpg',
}

const industrySolutions: Record<string, [string, string][]> = {
  edu: [
    ['Digital learning', 'Custom eLearning, mobile courses, and K–12 digital content.'],
    ['Learning platforms', 'LMS, learning apps, and assessment experiences.'],
    ['Media & localization', 'Explainer videos, translation, audio, and localization.'],
  ],
  healthcare: [
    ['Patient experience', 'Support patient, department, and staff workflows.'],
    ['Clinical operations', 'Improve clinical management and day-to-day operations.'],
    ['Quality & compliance', 'Support NABH/NABL standards and continuous improvement.'],
  ],
  infra: [
    ['Project controls', 'Coordinate project planning, delivery, and oversight.'],
    ['Digital procurement', 'Modernize EPC procurement and document workflows.'],
    ['Safety & command', 'Improve field visibility, incident response, and control.'],
  ],
  it: [
    ['Modern platforms', 'Build cloud-native, integrated, and API-enabled services.'],
    ['Automation & data', 'Apply analytics, AI, machine learning, and process automation.'],
    ['Legacy modernization', 'Reduce complexity while improving flexibility and resilience.'],
  ],
  insurance: [
    ['Core operations', 'Support sales, servicing, claims, renewals, and settlement.'],
    ['Shared services', 'Improve finance, HR, supply chain, and IT workflows.'],
    ['Risk & compliance', 'Strengthen assurance, governance, and regulatory readiness.'],
  ],
  msw: [
    ['Collection & operations', 'Improve visibility and coordination across waste services.'],
    ['Resource recovery', 'Explore composting and recovery of reusable materials.'],
    ['Waste to energy', 'Assess practical pathways for energy recovery.'],
  ],
  smartcity: [
    ['Connected services', 'Coordinate city operations and citizen-facing services.'],
    ['Urban mobility', 'Support traffic, parking, and field-force management.'],
    ['Command & analytics', 'Bring operational data together for faster decisions.'],
  ],
  textile: [
    ['Production visibility', 'Connect cutting, stitching, embroidery, and dispatch.'],
    ['Inventory & costing', 'Track fabric, jobwork, wastage, and production costs.'],
    ['Business operations', 'Bring sales, accounting, attendance, and payroll together.'],
  ],
  utility: [
    ['Customer operations', 'Improve customer care, billing, and service processes.'],
    ['Revenue assurance', 'Strengthen meter-to-cash and order-to-cash workflows.'],
    ['Field operations', 'Connect field teams, maintenance, and operational data.'],
  ],
  'cnf-space': [
    ['Risk assessment', 'Identify hazards and plan work before entry.'],
    ['People & training', 'Clarify roles, authorizations, and emergency readiness.'],
    ['Safe systems', 'Coordinate permits, protective equipment, and rescue plans.'],
  ],
}

const mediaItems = [
  {
    date: '7 November 2020',
    title: 'Hear our Managing Director, Mr Somdev Singh at MSME Manthan 2020',
    image: 'GUTEC2020.jpg',
    description:
      'A speaker session on procurement, vendor empanelment, investment, and growth opportunities for MSMEs.',
  },
  {
    date: '15 August 2020',
    title: 'StratXG Academy Lean Six Sigma Program is now globally accredited',
    image: 'six_sigma_certification.jpg',
    description:
      'The StratXG Academy Six Sigma program received accreditation from The Council for Six Sigma Certification.',
  },
  {
    date: '18 July 2020',
    title: 'StratXG named among Mumbai’s top learning and development consultants',
    image: 'true_educational.jpg',
    description:
      'Recognition for the team’s work in learning and development consulting.',
  },
  {
    date: '14 July 2020',
    title: 'NPC empanels StratXG for healthcare capacity-building services',
    image: 'npc_empanelled.jpg',
    description:
      'An implementation partnership supporting quality practices in healthcare facilities, hospitals, and laboratories.',
  },
  {
    date: '5 July 2020',
    title: 'StratXG joins hands with GETCO IT Services, Bangladesh',
    image: 'join_hands.jpg',
    description:
      'A technology partnership to accelerate digital development and transformation.',
  },
  {
    date: '27 May 2020',
    title: 'Upcoming webinar on Relationship Management',
    image: 'relationship_management.jpg',
    description:
      'A StratXG and LearningLab TISS webinar exploring practical relationship-management skills.',
  },
  {
    date: '27 February 2020',
    title: 'Jagroop Singh receives Rising Star of the Year 2020 award',
    description:
      'StratXG’s Chief Strategy and Transformation Officer was recognized at the Chief Strategy Officer Summit & Awards.',
  },
  {
    date: '12 February 2020',
    title: 'StratXG invited to #GUTEC2020 in New Delhi',
    description:
      'Managing Director Somdev Singh was invited as a keynote speaker at the Oil & Gas Digital Transformation Summit.',
  },
  {
    date: '18 January 2020',
    title: 'StratXG wins process transformation engagement with RB Cutters',
  },
  {
    date: '10 January 2020',
    title: 'StratXG signs strategic engagement with Mexus Education',
    description: 'The engagement covered school management systems and K–12 digital learning.',
  },
  {
    date: '25 June 2019',
    title: 'StratXG joins AIC-RNTU and TISS as an incubator partner',
    description:
      'The association supports sustainable change through entrepreneurship and innovation.',
  },
  {
    date: '27 June 2019',
    title: 'StratXG collaborates with InfiAmp on renewable energy',
    description:
      'The partnership focuses on electric mobility and integrated solar street-lighting solutions.',
  },
]

const academyPrograms = [
  {
    title: 'Growth and leadership',
    body: 'Build capability in leadership, organizational culture, creative thinking, and emotional intelligence.',
  },
  {
    title: 'Digital and innovation',
    body: 'Develop practical knowledge across digital business, design thinking, digital marketing, and emerging technologies.',
  },
  {
    title: 'Operations and quality',
    body: 'Learn Lean, Six Sigma, Agile, project management, and continuous improvement practices.',
  },
  {
    title: 'Compliance and safety',
    body: 'Strengthen regulatory, healthcare, environmental, health, and safety practices.',
  },
]

export function AcademyPage() {
  return (
    <>
      <Seo
        title={`StratXG Academy | ${site.name}`}
        description="Customized digital and industry-specific learning and development programs from StratXG Academy."
        path="/academy"
      />
      <PageHero
        title="StratXG Academy"
        subtitle="One-stop learning and development for digital capability and industry-specific skills."
        background="/images/bg/04.jpg"
      />
      <Section
        eyebrow="Learn, apply, grow"
        title="Capability building for the changing workplace"
        description="Customized programs connect foundational knowledge with practical application—from design thinking through implementation."
      >
        <div className="grid gap-5 sm:grid-cols-2">
          {academyPrograms.map((program, index) => (
            <AnimatedCard
              key={program.title}
              delay={index * 0.06}
              className="rounded-xl border border-line bg-white p-6"
            >
              <h3 className="font-display text-xl font-semibold text-brand">
                {program.title}
              </h3>
              <p className="mt-3 text-sm leading-relaxed text-ink-muted">
                {program.body}
              </p>
            </AnimatedCard>
          ))}
        </div>
        <div className="mt-10 flex flex-wrap gap-3">
          <Button to="/contact">Ask about a program</Button>
          <Button
            href={`${site.legacyBaseUrl}/academy.php`}
            variant="secondary"
          >
            Open the existing learning portal
          </Button>
        </div>
      </Section>
      <Section
        className="bg-surface-elevated/60"
        eyebrow="Learning outcomes"
        title="Practical learning, grounded in real work"
        description="Learners apply program methods to projects across healthcare, water, energy, infrastructure, and organizational operations."
      >
        <div className="grid gap-6 md:grid-cols-3">
          {[
            '/images/academy/academy_slider_1.jpg',
            '/images/academy/academy_slider_2.jpg',
            '/images/academy/academy_slider_3.jpg',
          ].map((image, index) => (
            <img
              key={image}
              src={image}
              alt={`StratXG Academy learning example ${index + 1}`}
              loading="lazy"
              className="aspect-[4/3] w-full rounded-xl object-cover"
            />
          ))}
        </div>
      </Section>
    </>
  )
}

export function CareersPage() {
  return (
    <>
      <Seo
        title={`Careers | ${site.name}`}
        description="Explore a career with StratXG, where business thinking, technology, consulting, and innovation come together."
        path="/careers"
      />
      <PageHero
        title="Build what comes next"
        subtitle="Bring your passion for strategy, technology, consulting, and transformation to StratXG."
        background="/images/bg/careers.png"
      />
      <Section
        eyebrow="Careers at StratXG"
        title="Where business thinking stops, ours starts"
        description="StratXG is a digital consulting company working across education, healthcare, infrastructure, and utilities. Our work turns complex challenges into practical opportunities for growth."
      >
        <div className="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
          <div className="space-y-5 text-ink-muted leading-relaxed">
            <p>
              We bring together people who are curious, collaborative, and ready
              to test new ideas. Our teams work across disruption, innovation,
              strategy, technology, consulting, risk, compliance, process,
              projects, and data.
            </p>
            <p>
              If you want to contribute to meaningful transformation and keep
              learning along the way, introduce yourself to our team.
            </p>
            <a
              href="mailto:careers@stratxg.com"
              className="inline-flex items-center gap-2 font-display font-semibold text-brand underline underline-offset-4"
            >
              Email careers@stratxg.com <ArrowRight size={16} />
            </a>
          </div>
          <img
            src="/images/img/Landing_hero_careers.png"
            alt="StratXG team collaborating"
            loading="lazy"
            className="w-full rounded-2xl object-cover"
          />
        </div>
      </Section>
      <Section
        className="bg-surface-elevated/60"
        title="Our work, together"
        description="A selection of moments from StratXG’s work with teams and communities."
      >
        <div className="grid gap-5 sm:grid-cols-2">
          {['89.jpg', '91.jpg', '92.png'].map((image) => (
            <img
              key={image}
              src={getGalleryAsset(image)}
              alt="StratXG team and community"
              loading="lazy"
              className="aspect-[4/3] w-full rounded-xl object-cover"
            />
          ))}
        </div>
      </Section>
    </>
  )
}

export function MediaPage() {
  return (
    <>
      <Seo
        title={`Media | ${site.name}`}
        description="News, announcements, partnerships, and recognition from StratXG."
        path="/media"
      />
      <PageHero
        title="StratXG in the news"
        subtitle="Announcements, partnerships, and milestones from our work."
        background="/images/bg/13.jpg"
      />
      <Section title="News and updates">
        <div className="grid gap-5 md:grid-cols-2">
          {mediaItems.map((item, index) => (
            <AnimatedCard
              key={item.title}
              delay={(index % 4) * 0.04}
              className="surface-card overflow-hidden"
            >
                {item.image && (
                  <img
                    src={getGalleryAsset(item.image)}
                    alt=""
                    loading="lazy"
                    className="aspect-[16/8] w-full bg-line object-cover"
                  />
                )}
                <div className="p-6">
                  <p className="font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent-dark">
                    {item.date}
                  </p>
                  <h2 className="mt-3 font-display text-xl font-semibold leading-snug text-brand">
                    {item.title}
                  </h2>
                  {item.description && (
                    <p className="mt-3 text-sm leading-6 text-ink-muted">
                      {item.description}
                    </p>
                  )}
                </div>
            </AnimatedCard>
          ))}
        </div>
      </Section>
    </>
  )
}

export function VentureCapPage() {
  return (
    <>
      <Seo
        title={`VentureCap | ${site.name}`}
        description="Integrated business modelling, knowledge, and transformation support for startups and growing organizations."
        path="/venturecap"
      />
      <PageHero
        title="StratXG VentureCap"
        subtitle="Achieving growth through emergent strategy and frugal innovation."
        background="/images/bg/young-plant-growing-hand-watering-garden_34152-1274.jpg"
      />
      <Section
        eyebrow="For startups and growing organizations"
        title="Build a resilient, sustainable business"
        description="StratXG helps organizations address common growth barriers such as financial constraints, shifting focus, unrelated diversification, and changing regulatory requirements."
      >
        <div className="grid gap-8 lg:grid-cols-[1.2fr_0.8fr]">
          <div className="space-y-5 text-ink-muted leading-relaxed">
            <p>
              Our integrated knowledge services support business modelling,
              funding requirements, compliance, scalability, and sustainable
              growth—helping organizations stay profitable and relevant.
            </p>
            <p>
              Connect with thought leaders and specialists across industry,
              finance, legal, execution, quality, and digital transformation.
            </p>
          </div>
          <div className="rounded-2xl border border-line bg-white p-7">
            <p className="font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent-dark">
              Start a conversation
            </p>
            <h2 className="mt-3 font-display text-2xl font-semibold text-brand">
              One step closer to your next stage of growth.
            </h2>
            <Link
              to="/contact"
              className="mt-6 inline-flex items-center gap-2 font-display font-semibold text-brand"
            >
              Talk to StratXG <ArrowRight size={16} />
            </Link>
          </div>
        </div>
      </Section>
    </>
  )
}

export function CsrPage() {
  return (
    <>
      <Seo
        title={`Corporate Social Responsibility | ${site.name}`}
        description="StratXG community initiatives focused on safer roads and practical social impact."
        path="/csr"
      />
      <PageHero
        title="Corporate Social Responsibility"
        subtitle="Touching lives by looking beyond economics and technology."
        background="/images/bg/14.jpg"
      />
      <Section
        eyebrow="Community impact"
        title="Reducing road traffic accidents in rural India"
        description="A road-safety initiative that places reflective tapes on agricultural vehicles to improve their visibility."
      >
        <div className="grid gap-8 lg:grid-cols-[1.2fr_0.8fr]">
          <div className="space-y-5 text-ink-muted leading-relaxed">
            <p>
              Agricultural vehicles are part of everyday rural life and can be
              difficult to see on the road, particularly in low light. Reflective
              tapes help make these vehicles more visible to other road users.
            </p>
            <p>
              The initiative reflects StratXG’s commitment to practical,
              community-centred action and safer journeys.
            </p>
            <Button to="/contact">Partner with us</Button>
          </div>
          <img
            src="/images/bg/15.jpg"
            alt="Road safety awareness"
            loading="lazy"
            className="min-h-64 w-full rounded-2xl object-cover"
          />
        </div>
      </Section>
    </>
  )
}

export function GalleryPage() {
  return (
    <>
      <Seo
        title={`Gallery | ${site.name}`}
        description="Events, team activities, and community initiatives from StratXG."
        path="/gallery"
      />
      <PageHero
        title="Gallery of events"
        subtitle="A visual record of StratXG’s work, learning, partnerships, and community."
        background="/images/bg/14.jpg"
      />
      <Section
        title="Moments from StratXG"
        description="People, projects, and partnerships that bring our work to life."
      >
        <div className="columns-2 gap-3 sm:columns-3 sm:gap-4 lg:columns-4 xl:columns-5">
          {galleryFiles.map(({ src }, index) => (
            <a
              key={src}
              href={src}
              target="_blank"
              rel="noopener noreferrer"
              className="group relative mb-3 block break-inside-avoid overflow-hidden rounded-xl bg-line shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand sm:mb-4"
              aria-label={`Open StratXG gallery image ${index + 1}`}
            >
              <img
                src={src}
                alt={`StratXG event ${index + 1}`}
                loading="lazy"
                decoding="async"
                className="h-auto w-full object-cover transition-transform duration-500 ease-[var(--ease-out-expo)] group-hover:scale-[1.035]"
              />
              <span className="pointer-events-none absolute inset-0 bg-gradient-to-t from-brand/45 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100" />
            </a>
          ))}
        </div>
      </Section>
    </>
  )
}

export function IndustryDetailPage() {
  const { slug } = useParams()
  const { pathname } = useLocation()
  const currentSlug = slug ?? pathname.slice(1).replace(/\.php$/, '')
  const industry = industries.find((item) => item.slug === currentSlug)
  if (!industry) return <Navigate to="/industries" replace />
  const solutions = industrySolutions[industry.slug] ?? []

  return (
    <>
      <Seo
        title={`${industry.navLabel} | ${site.name}`}
        description={industry.summary}
        path={`/industries/${industry.slug}`}
      />
      <PageHero
        title={industry.title}
        subtitle={industry.navLabel}
        background={industryVisuals[industry.slug]}
      />
      <Section
        eyebrow="Industry expertise"
        title={`StratXG for ${industry.navLabel}`}
        description={industry.summary}
      >
        <div className="grid items-start gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-10">
          <img
            src={industryVisuals[industry.slug]}
            alt=""
            loading="lazy"
            className="surface-card aspect-[4/3] w-full object-cover p-2"
          />
          <div className="grid gap-4 sm:grid-cols-2">
            {solutions.map(([title, body], index) => (
              <AnimatedCard
                key={title}
                className="surface-card h-full p-5"
              >
                <span className="inline-flex size-8 items-center justify-center rounded-lg bg-brand/[0.06] font-display text-xs font-semibold text-brand">
                  0{index + 1}
                </span>
                <h2 className="mt-4 font-display text-lg font-semibold text-brand">
                  {title}
                </h2>
                <p className="mt-2 text-sm leading-6 text-ink-muted">{body}</p>
              </AnimatedCard>
            ))}
          </div>
        </div>
        <div className="mt-9 flex flex-wrap gap-3">
          <Button to="/contact">Discuss an engagement</Button>
          <Link
            to="/industries"
            className="inline-flex items-center gap-2 rounded-md border border-line px-5 py-2.5 font-display text-sm text-brand hover:border-brand/40"
          >
            All industries
          </Link>
        </div>
      </Section>
    </>
  )
}

export function VideosPage() {
  return (
    <>
      <Seo
        title={`Videos | ${site.name}`}
        description="Corporate, explainer, product, training, presentation, and design video services from StratXG."
        path="/videos"
      />
      <PageHero
        title="Videos and creative content"
        subtitle="Content that makes complex ideas clearer and more engaging."
        background="/images/bg/13.jpg"
      />
      <Section title="Creative and learning content">
        <div className="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
          {[
            ['Corporate videos', '/images/CorporatVideos.jpg'],
            ['Explainer videos', '/images/Explainervideos.jpg'],
            ['Product videos', '/images/academy/academy_slider_1.jpg'],
            ['Training videos', '/images/learningvideos.jpg'],
            ['Presentation videos', '/images/graphicsanimation.jpg'],
            ['Graphics and brand development', '/images/graphicsanimation.jpg'],
          ].map((item) => (
            <AnimatedCard
              key={item[0]}
              className="surface-card group overflow-hidden"
            >
              <img
                src={item[1]}
                alt=""
                loading="lazy"
                className="aspect-[16/9] w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]"
              />
              <div className="p-5">
                <h2 className="font-display text-lg font-semibold text-brand">
                  {item[0]}
                </h2>
                <p className="mt-2 text-sm leading-6 text-ink-muted">
                  Story-led content that supports communication, learning, and
                  brand experiences.
                </p>
              </div>
            </AnimatedCard>
          ))}
        </div>
        <div className="mt-9">
          <Button to="/contact">Discuss a content project</Button>
        </div>
      </Section>
    </>
  )
}

export function ServicesPage() {
  return (
    <>
      <Seo
        title={`Products and Services | ${site.name}`}
        description="Strategy, consulting, technology, education, and healthcare services from StratXG."
        path="/services"
      />
      <PageHero
        title="Products and services"
        subtitle="Building organizational capability and creating practical paths to growth."
        background="/images/bg/03.jpg"
      />
      <Section
        title="Explore our expertise"
        description="StratXG combines strategy, consulting, digital technology, and learning services to support organizations through change."
      >
        <div className="grid gap-5 sm:grid-cols-2">
          {[
            ['Strategy and consulting', 'Business modelling, design thinking, and management consulting.'],
            ['Technology', 'Digital products, integration, analytics, and emerging technologies.'],
            ['Education and learning', 'Customized learning solutions and digital content.'],
            ['Healthcare', 'Operational improvement, quality, and digital healthcare solutions.'],
          ].map(([title, body]) => (
            <AnimatedCard
              key={title}
              className="surface-card p-6"
            >
              <h2 className="font-display text-xl font-semibold text-brand">
                {title}
              </h2>
              <p className="mt-3 text-sm leading-relaxed text-ink-muted">{body}</p>
            </AnimatedCard>
          ))}
        </div>
        <Link
          to="/industries"
          className="mt-8 inline-flex items-center gap-2 font-display font-semibold text-brand"
        >
          View industries <ExternalLink size={16} />
        </Link>
      </Section>
    </>
  )
}

export function LegacyFallbackPage() {
  const { pathname, search, hash } = useLocation()
  const legacyUrl = `${site.legacyBaseUrl}${pathname}${search}${hash}`

  return (
    <>
      <Seo
        title={`Page in transition | ${site.name}`}
        description="This StratXG page is still available on the current website."
        path={pathname}
      />
      <PageHero
        title="This page is still on our current website"
        subtitle="We’re bringing StratXG content into the new site in stages. The existing page is still available."
      />
      <Section title="Continue to the existing page">
        <div className="flex flex-wrap gap-3">
          <Button href={legacyUrl}>Open the existing page</Button>
          <Button to="/" variant="secondary">
            Back to the new site
          </Button>
        </div>
      </Section>
    </>
  )
}
