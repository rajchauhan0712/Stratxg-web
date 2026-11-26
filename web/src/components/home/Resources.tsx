import { FileDown } from 'lucide-react'
import { home } from '../../content/home'
import { Section } from '../ui/Section'

export function Resources() {
  return (
    <Section
      title={home.resources.title}
      className="bg-surface-elevated/60"
    >
      <ul className="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        {home.resources.items.map((item) => (
          <li
            key={item.file}
            className="surface-card flex min-h-44 flex-col items-start justify-between gap-5 p-5"
          >
            <div className="inline-flex size-10 items-center justify-center rounded-lg bg-brand/[0.06] text-brand">
              <FileDown size={20} aria-hidden />
            </div>
            <div>
              <h3 className="font-display text-sm font-semibold text-brand">
                {item.title}
              </h3>
              <a
                href={item.file}
                target="_blank"
                rel="noopener noreferrer"
                className="mt-3 inline-flex min-h-10 items-center font-display text-sm font-medium text-accent-dark underline decoration-accent/50 underline-offset-4 transition-colors hover:text-brand focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand"
              >
                Download Now
              </a>
            </div>
          </li>
        ))}
      </ul>
    </Section>
  )
}
