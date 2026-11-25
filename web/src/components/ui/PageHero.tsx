import { Link } from 'react-router-dom'
import { ArrowRight } from 'lucide-react'

type Props = {
  title: string
  subtitle?: string
  background?: string
  showCta?: boolean
}

export function PageHero({
  title,
  subtitle,
  background,
  showCta = true,
}: Props) {
  return (
    <section className="relative isolate min-h-[17rem] overflow-hidden bg-brand text-white sm:min-h-[19rem] lg:min-h-[22rem]">
      {background && (
        <img
          src={background}
          alt=""
          width={1600}
          height={600}
          decoding="async"
          loading="eager"
          className="absolute inset-0 h-full w-full object-cover opacity-30"
        />
      )}
      <div className="absolute inset-0 bg-[radial-gradient(ellipse_at_78%_30%,rgba(145,200,75,0.2),transparent_42%),linear-gradient(105deg,rgba(35,12,45,0.96),rgba(50,19,63,0.8)_58%,rgba(50,19,63,0.5))]" />
      <div className="relative mx-auto flex min-h-[17rem] max-w-7xl flex-col justify-center px-5 py-12 sm:min-h-[19rem] sm:px-8 sm:py-14 lg:min-h-[22rem] lg:px-10 lg:py-16">
        <nav aria-label="Breadcrumb" className="mb-5">
          <ol className="flex min-w-0 items-center gap-2 font-display text-xs font-medium text-white/65">
            <li>
              <Link to="/" className="transition-colors hover:text-white">
                Home
              </Link>
            </li>
            <li aria-hidden="true">/</li>
            <li
              aria-current="page"
              className="max-w-[min(70vw,36rem)] truncate text-accent"
            >
              {title}
            </li>
          </ol>
        </nav>
        <p className="mb-2 font-display text-xs font-semibold uppercase tracking-[0.2em] text-accent">
          StratXG
        </p>
        <div className="flex items-end justify-between gap-8">
          <div className="max-w-4xl">
            <h1 className="text-balance font-display text-4xl font-semibold leading-[1.08] tracking-[-0.035em] text-white sm:text-5xl lg:text-[3.5rem]">
              {title}
            </h1>
            {subtitle && (
              <p className="mt-4 max-w-2xl text-base leading-relaxed text-white/78 sm:text-lg">
                {subtitle}
              </p>
            )}
          </div>
          {showCta && (
            <Link
              to="/contact"
              className="mb-1 hidden shrink-0 items-center gap-2 rounded-full border border-white/25 px-5 py-3 font-display text-sm font-medium text-white transition-colors hover:border-accent hover:bg-white/10 xl:inline-flex"
            >
              Start a conversation <ArrowRight size={16} aria-hidden="true" />
            </Link>
          )}
        </div>
      </div>
    </section>
  )
}
