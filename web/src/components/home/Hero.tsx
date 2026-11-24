import { useRef } from 'react'
import gsap from 'gsap'
import { useGSAP } from '@gsap/react'
import { home } from '../../content/home'
import { Button } from '../ui/Button'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

gsap.registerPlugin(useGSAP)

export function Hero() {
  const root = useRef<HTMLElement>(null)
  const reduced = usePrefersReducedMotion()
  const { hero } = home

  useGSAP(
    () => {
      if (reduced || !root.current) return
      const tl = gsap.timeline({ defaults: { ease: 'power3.out' } })
      tl.from('.hero-media', { scale: 1.08, opacity: 0.55, duration: 1.1 })
        .from('.hero-brand', { y: 18, opacity: 0, duration: 0.55 }, '-=0.65')
        .from('.hero-headline', { y: 28, opacity: 0, duration: 0.65 }, '-=0.35')
        .from('.hero-support', { y: 16, opacity: 0, duration: 0.5 }, '-=0.35')
        .from('.hero-cta', { y: 12, opacity: 0, duration: 0.45 }, '-=0.25')
    },
    { scope: root, dependencies: [reduced] },
  )

  return (
    <section
      ref={root}
      className="relative isolate min-h-[min(92vh,880px)] flex items-end overflow-hidden bg-brand text-white"
    >
      <img
        src={hero.image}
        alt=""
        className="hero-media absolute inset-0 h-full w-full object-cover"
      />
      {/* Dense bottom scrim keeps type readable over busy photography */}
      <div className="absolute inset-0 bg-gradient-to-t from-brand via-brand/85 to-brand/45" />
      <div className="absolute inset-0 bg-gradient-to-r from-brand/70 via-brand/25 to-transparent" />

      <div className="relative z-10 mx-auto w-full max-w-6xl px-5 md:px-8 pb-16 md:pb-24 pt-32">
        <p className="hero-brand font-display text-sm font-semibold uppercase tracking-[0.22em] text-accent mb-5">
          {hero.brand}
        </p>
        <h1 className="hero-headline max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-[4.25rem] leading-[1.05] text-balance text-white [text-shadow:0_2px_24px_rgba(54,17,52,0.55)]">
          {hero.headline}
        </h1>
        <p className="hero-support mt-6 max-w-xl text-lg md:text-xl text-white/85 leading-relaxed [text-shadow:0_1px_12px_rgba(54,17,52,0.45)]">
          {hero.support}
        </p>
        <div className="hero-cta mt-10 flex flex-wrap gap-3">
          <Button to={hero.primaryCta.to} variant="onDark" size="lg">
            {hero.primaryCta.label}
          </Button>
          <Button
            to={hero.secondaryCta.to}
            variant="secondary"
            size="lg"
            className="!border-white/35 !text-white hover:!border-white hover:!bg-white/10"
          >
            {hero.secondaryCta.label}
          </Button>
        </div>
      </div>
    </section>
  )
}
