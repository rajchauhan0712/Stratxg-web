import { home } from '../../content/home'
import { site } from '../../content/site'
import { Button } from '../ui/Button'

export function FinalCta() {
  const { finalCta } = home

  return (
    <section className="pt-16 pb-12 md:pt-20 md:pb-16">
      <div className="mx-auto max-w-6xl px-5 md:px-8">
        <div className="relative overflow-hidden rounded-2xl bg-brand px-8 py-12 md:px-14 md:py-14 text-white">
          <div className="absolute -right-16 -top-16 size-56 rounded-full bg-accent/12 blur-2xl" />
          <div className="relative max-w-2xl">
            <h2 className="text-3xl md:text-4xl text-balance">{finalCta.title}</h2>
            <p className="mt-4 text-lg text-white/70 leading-relaxed">
              {finalCta.body}
            </p>
            <div className="mt-8 flex flex-wrap gap-3">
              <Button to={finalCta.primary.to} variant="onDark" size="lg">
                {finalCta.primary.label}
              </Button>
              <a
                href={`mailto:${site.email}`}
                className="inline-flex items-center justify-center gap-2 font-display font-medium tracking-wide rounded-md px-7 py-3.5 text-base border border-white/30 text-white transition-[transform,background-color,border-color] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] hover:border-white hover:bg-white/10 active:scale-[0.97] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
              >
                {finalCta.secondary.label}
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
