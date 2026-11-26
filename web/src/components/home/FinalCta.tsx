import { ArrowRight } from 'lucide-react'
import { Link } from 'react-router-dom'
import { home } from '../../content/home'

export function FinalCta() {
  return (
    <section className="pb-16 pt-4 md:pb-20">
      <div className="mx-auto grid max-w-6xl gap-5 px-5 md:grid-cols-2 md:px-8">
        {home.finalCta.map((item) => (
          <div
            key={item.title}
            className="flex flex-col items-start justify-between gap-6 rounded-2xl bg-brand p-7 text-white sm:flex-row sm:items-center sm:p-9"
          >
            <h2 className="font-display text-2xl font-semibold">{item.title}</h2>
            <Link
              to={item.to}
              className="inline-flex shrink-0 items-center gap-2 rounded-md border border-white/35 px-5 py-3 font-display text-sm font-medium text-white transition-colors hover:border-white hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
            >
              {item.label}
              <ArrowRight size={16} aria-hidden />
            </Link>
          </div>
        ))}
      </div>
    </section>
  )
}
