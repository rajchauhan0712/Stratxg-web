import { Seo } from '../components/Seo'
import { AnimatedCard } from '../components/ui/AnimatedCard'
import { Button } from '../components/ui/Button'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { site } from '../content/site'

const demoGroups = [
  {
    title: 'HR Transformation',
    items: [
      {
        title: 'Data Accuracy',
        body: "Achieving good data accuracy should be a top priority; it's what many important decisions are based on. With PromptHR there is no problem, it flows data accurately.",
      },
      {
        title: 'On Demand Delivery Model',
        body: 'Our delivery model gives you liberty to choose your model. It could be On-site Cloud or hosted cloud.',
      },
      {
        title: 'Employee Life Cycle Management',
        body: "It covers complete employees' life cycle, employees follow during their time within the organization, from their first contacts with the recruiter to their departure.",
      },
      {
        title: 'Integration With Other Applications',
        body: 'Our tool can be integrated with others and allows seamless integration with other applications.',
      },
    ],
  },
  {
    title: 'Strategy',
    items: [
      {
        title: 'Business Modeling',
        body: 'Value and Growth based business modeling and remodeling.',
      },
      {
        title: 'Design Thinking',
        body: 'Resolving problem through creative thinking, fundamental design ascepts for proven results.',
      },
      {
        title: 'Management Consulting',
        body: 'Serving leading business at every level of their organization, trusted advisor to top management.',
      },
      {
        title: 'Knowledge Services',
        body: 'Our knowledge services transform organization from non compliant business units to profitable venture.',
      },
    ],
  },
  {
    title: 'Growth',
    items: [
      {
        title: 'Profitablity Management',
        body: 'Profitablity managament considering people, process, technology, products and services, brand image, financial.',
      },
      {
        title: 'Governance, Risk and Compliance',
        body: 'GRC framework for the leadership, organization and operation to enable organization strategic objectives.',
      },
      {
        title: 'Quality Management & Continual Improvement',
        body: 'Quality improvment using lean six sigma, agile, scrum, ISO, ITIL, Project Management practices.',
      },
      {
        title: 'Finance Transformation',
        body: 'Procure to pay, order to cash, budget, RFI, Contract, Supplier, Treasury, Project, Cash, Assets Managament, financial modeling and anylatics, reports and dashboards.',
      },
      {
        title: 'HR Transformation',
        body: 'Employee life cycle, Onboarding, Payroll, Performance Management, Time Managament, Visitors Management, Expenses Management, Travel & Claim Management.',
      },
      {
        title: 'Employee Safety, Security & Health',
        body: 'Emergency Management, Incident Handling, Employee Health, SOS, Hazard Management.',
      },
    ],
  },
]

export function DemosPage() {
  return (
    <>
      <Seo
        title={`Our Demos | ${site.name}`}
        description="Explore StratXG demos for HR transformation, strategy, and growth."
        path="/demos"
      />
      <PageHero
        title="Our Demos"
        subtitle="How Does StratXG Bring Value To Your Business"
        background="/images/bg/about3.jpg"
      />
      {demoGroups.map((group) => (
        <Section key={group.title} title={group.title}>
          <ul className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            {group.items.map((item, index) => (
              <li key={item.title}>
                <AnimatedCard className="surface-card h-full p-5">
                  <span className="font-display text-xs font-semibold tracking-widest text-accent-dark">
                    {String(index + 1).padStart(2, '0')}
                  </span>
                  <h2 className="mt-3 font-display text-lg font-semibold text-brand">
                    {item.title}
                  </h2>
                  <p className="mt-2 text-sm leading-6 text-ink-muted">
                    {item.body}
                  </p>
                </AnimatedCard>
              </li>
            ))}
          </ul>
          {group.title === 'HR Transformation' && (
            <h2 className="mt-10 font-display text-xl font-semibold text-brand">
              Our Modules
            </h2>
          )}
        </Section>
      ))}
      <Section className="!pt-0">
        <Button to="/contact">Get Quotes</Button>
      </Section>
    </>
  )
}
