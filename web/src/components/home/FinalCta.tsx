import { home } from '../../content/home'
import { Button } from '../ui/Button'

export function FinalCta() {
  const { finalCta } = home

  return (
    <section className="py-20 md:py-28">
      <div className="mx-auto max-w-6xl px-5 md:px-8">
        <div className="relative overflow-hidden rounded-2xl bg-brand px-8 py-14 md:px-14 md:py-16 text-white">
          <div className="absolute -right-16 -top-16 size-56 rounded-full bg-accent/20 blur-2xl" />
          <div className="relative max-w-2xl">
            <h2 className="text-3xl md:text-4xl text-balance">{finalCta.title}</h2>
            <p className="mt-4 text-lg text-white/70 leading-relaxed">
              {finalCta.body}
            </p>
            <div className="mt-8 flex flex-wrap gap-3">
              <Button to={finalCta.primary.to} variant="onDark" size="lg">
                {finalCta.primary.label}
              </Button>
              <Button
                to={finalCta.secondary.to}
                variant="secondary"
                size="lg"
                className="!border-white/30 !text-white hover:!border-white hover:!bg-white/10"
              >
                {finalCta.secondary.label}
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
