import {
  useCallback,
  useEffect,
  useRef,
  useState,
  type CSSProperties,
  type TouchEvent,
} from 'react'
import gsap from 'gsap'
import { useGSAP } from '@gsap/react'
import { ArrowDownRight, ChevronLeft, ChevronRight } from 'lucide-react'
import { home } from '../../content/home'
import { Button } from '../ui/Button'
import { usePrefersReducedMotion } from '../../hooks/usePrefersReducedMotion'

gsap.registerPlugin(useGSAP)

export function Hero() {
  const root = useRef<HTMLElement>(null)
  const touchX = useRef<number | null>(null)
  const reduced = usePrefersReducedMotion()
  const { hero } = home
  const slides = hero.slides
  const [index, setIndex] = useState(0)
  const [paused, setPaused] = useState(false)
  const [entered, setEntered] = useState(reduced)
  const active = slides[index] ?? slides[0]

  const goTo = useCallback(
    (next: number) => {
      const len = slides.length
      setIndex(((next % len) + len) % len)
    },
    [slides.length],
  )

  const goPrev = useCallback(() => goTo(index - 1), [goTo, index])
  const goNext = useCallback(() => goTo(index + 1), [goTo, index])

  useEffect(() => {
    if (reduced || paused || slides.length < 2) return
    const id = window.setInterval(() => {
      setIndex((i) => (i + 1) % slides.length)
    }, hero.intervalMs)
    return () => window.clearInterval(id)
  }, [reduced, paused, slides.length, hero.intervalMs])

  useEffect(() => {
    const onVisibility = () => setPaused(document.hidden)
    document.addEventListener('visibilitychange', onVisibility)
    return () => document.removeEventListener('visibilitychange', onVisibility)
  }, [])

  useEffect(() => {
    const onKey = (e: KeyboardEvent) => {
      if (!root.current) return
      const tag = (e.target as HTMLElement | null)?.tagName
      if (tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT') return
      if (e.key === 'ArrowLeft') {
        e.preventDefault()
        goPrev()
      } else if (e.key === 'ArrowRight') {
        e.preventDefault()
        goNext()
      }
    }
    window.addEventListener('keydown', onKey)
    return () => window.removeEventListener('keydown', onKey)
  }, [goPrev, goNext])

  useGSAP(
    () => {
      if (reduced || !root.current) {
        setEntered(true)
        return
      }
      // Marketing entrance — brand+headline lead together; CTA/support overlap; controls fade only
      const tl = gsap.timeline({
        defaults: { ease: 'power3.out' },
        onComplete: () => setEntered(true),
      })
      tl.fromTo(
        '.hero-brand',
        { y: 16, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.55 },
      )
        .fromTo(
          '.hero-copy',
          { y: 28, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.65 },
          '-=0.42',
        )
        .fromTo(
          '.hero-support, .hero-cta',
          { y: 14, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.45, stagger: 0.06 },
          '-=0.38',
        )
        .fromTo(
          '.hero-rail',
          { opacity: 0 },
          { opacity: 1, duration: 0.4 },
          '-=0.2',
        )
    },
    { scope: root, dependencies: [reduced] },
  )

  const onTouchStart = (e: TouchEvent) => {
    touchX.current = e.changedTouches[0]?.clientX ?? null
  }

  const onTouchEnd = (e: TouchEvent) => {
    if (touchX.current == null) return
    const x = e.changedTouches[0]?.clientX
    if (x == null) return
    const delta = x - touchX.current
    touchX.current = null
    if (Math.abs(delta) < 48) return
    if (delta > 0) goPrev()
    else goNext()
  }

  return (
    <section
      ref={root}
      aria-roledescription="carousel"
      aria-label="StratXG highlights"
      onMouseEnter={() => setPaused(true)}
      onMouseLeave={() => setPaused(document.hidden)}
      onFocusCapture={() => setPaused(true)}
      onBlurCapture={(e) => {
        if (!root.current?.contains(e.relatedTarget as Node)) {
          setPaused(document.hidden)
        }
      }}
      onTouchStart={onTouchStart}
      onTouchEnd={onTouchEnd}
      className="relative isolate flex h-[calc(100svh-4rem)] max-h-[920px] items-end overflow-hidden bg-brand text-white md:h-[calc(100svh-4.5rem)] [@media(min-height:860px)]:pb-2"
    >
      {/* Full-bleed media plane */}
      <div className="absolute inset-0" aria-hidden="true">
        {slides.map((slide, i) => {
          const isActive = i === index
          return (
            <div
              key={slide.image}
              className={`absolute inset-0 transition-opacity duration-700 ease-[var(--ease-out-expo)] ${
                isActive ? 'opacity-100' : 'opacity-0'
              }`}
            >
              <picture className="block h-full w-full overflow-hidden">
                <source srcSet={slide.imageWebp} type="image/webp" />
                <img
                  src={slide.image}
                  alt=""
                  width={1600}
                  height={900}
                  decoding={i === 0 ? 'sync' : 'async'}
                  loading={i === 0 ? 'eager' : 'lazy'}
                  fetchPriority={i === 0 ? 'high' : 'low'}
                  className={`h-full w-full object-cover will-change-transform ${
                    isActive && !reduced && entered
                      ? 'hero-ken'
                      : 'scale-100'
                  }`}
                  style={
                    isActive && !reduced && entered
                      ? ({
                          '--hero-ken-duration': `${hero.intervalMs}ms`,
                          animationPlayState: paused ? 'paused' : 'running',
                        } as CSSProperties)
                      : undefined
                  }
                />
              </picture>
            </div>
          )
        })}
      </div>

      {/* Atmosphere — readable type without flattening the photo */}
      <div className="pointer-events-none absolute inset-0 bg-[radial-gradient(120%_80%_at_12%_88%,rgba(54,17,52,0.92)_0%,rgba(54,17,52,0.55)_42%,rgba(54,17,52,0.2)_72%,transparent_100%)]" />
      <div className="pointer-events-none absolute inset-0 bg-gradient-to-t from-brand via-brand/50 to-transparent" />
      <div className="pointer-events-none absolute inset-0 bg-gradient-to-r from-brand/55 via-transparent to-transparent" />

      {/*
        Extra bottom padding clears the Pillars overlap (-mt-8 / z-20)
        so progress + arrows sit fully above the white cards.
      */}
      <div className="relative z-10 mx-auto flex w-full max-w-6xl flex-col justify-end px-5 pb-24 pt-14 sm:pb-28 md:px-8 md:pb-32 md:pt-20 [@media(max-height:760px)]:pb-20 [@media(max-height:760px)]:pt-10">
        <div className="max-w-3xl">
          <div className="hero-brand flex items-center gap-3 opacity-0">
            <span
              aria-hidden
              className="h-px w-8 bg-accent sm:w-10"
            />
            <p className="font-display text-[0.7rem] font-semibold uppercase tracking-[0.28em] text-accent sm:text-xs">
              {hero.brand}
            </p>
          </div>

          <div className="hero-copy relative mt-3 min-h-[4.5rem] opacity-0 sm:min-h-[5.25rem] md:mt-4 md:min-h-[6.25rem] lg:min-h-[7rem]">
            {slides.map((slide, i) => {
              const isActive = i === index
              const Tag = isActive ? 'h1' : 'p'
              return (
                <Tag
                  key={slide.headline}
                  id={isActive ? 'hero-slide-heading' : undefined}
                  aria-hidden={!isActive}
                  className={`max-w-[18ch] text-balance font-display text-[2.05rem] font-semibold leading-[1.05] tracking-[-0.03em] text-white sm:max-w-none sm:text-4xl md:text-5xl md:leading-[1.02] lg:text-[3.35rem] xl:text-[3.6rem] [@media(max-height:760px)]:text-[1.85rem] [@media(max-height:760px)]:sm:text-3xl [@media(max-height:760px)]:md:text-[2.35rem] ${
                    isActive
                      ? 'relative opacity-100 translate-y-0'
                      : 'pointer-events-none absolute inset-x-0 top-0 opacity-0 translate-y-3'
                  }`}
                  style={{
                    transition:
                      'opacity var(--duration-slow) var(--ease-out-expo), transform var(--duration-slow) var(--ease-out-expo)',
                    textShadow: '0 2px 28px rgba(54,17,52,0.45)',
                  }}
                >
                  {slide.headline}
                </Tag>
              )
            })}
          </div>

          <p className="hero-support mt-3 max-w-md text-[0.98rem] leading-relaxed text-white/80 opacity-0 md:mt-4 md:max-w-lg md:text-lg [@media(max-height:760px)]:mt-2.5 [@media(max-height:760px)]:text-[0.95rem]">
            {hero.support}
          </p>

          <div className="hero-cta mt-5 flex flex-wrap items-center gap-3 opacity-0 md:mt-6 [@media(max-height:760px)]:mt-4">
            <Button to={hero.primaryCta.to} variant="onDark" size="lg">
              {hero.primaryCta.label}
              <ArrowDownRight className="h-4 w-4" aria-hidden />
            </Button>
            <Button
              to={hero.secondaryCta.to}
              variant="secondary"
              size="lg"
              className="!border-white/30 !text-white hover:!border-white hover:!bg-white/10"
            >
              {hero.secondaryCta.label}
            </Button>
          </div>
        </div>

        {/* Control rail — progress + arrows, lifted clear of overlapping pillars */}
        <div className="hero-rail mt-7 flex items-center justify-between gap-6 opacity-0 md:mt-9 [@media(max-height:760px)]:mt-5">
          <div
            role="tablist"
            aria-label="Hero slides"
            className="flex min-w-0 max-w-md flex-1 items-center gap-1.5 sm:gap-2"
          >
            {slides.map((slide, i) => {
              const selected = i === index
              return (
                <button
                  key={slide.image}
                  type="button"
                  role="tab"
                  aria-selected={selected}
                  aria-label={`Slide ${i + 1}: ${slide.headline}`}
                  aria-controls="hero-slide-heading"
                  onClick={() => goTo(i)}
                  className="group relative h-10 flex-1 rounded-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
                >
                  <span className="absolute inset-x-0 top-1/2 h-[2px] -translate-y-1/2 overflow-hidden rounded-full bg-white/25 transition-[background-color] duration-[var(--duration-fast)] group-hover:bg-white/45">
                    {selected && !reduced ? (
                      <span
                        key={index}
                        className="hero-progress absolute inset-y-0 left-0 bg-accent"
                        style={
                          {
                            '--hero-progress-duration': `${hero.intervalMs}ms`,
                            animationPlayState: paused
                              ? 'paused'
                              : 'running',
                          } as CSSProperties
                        }
                      />
                    ) : (
                      <span
                        className={`absolute inset-y-0 left-0 bg-accent transition-[width] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] ${
                          selected ? 'w-full' : 'w-0'
                        }`}
                      />
                    )}
                  </span>
                </button>
              )
            })}
          </div>

          <div className="flex shrink-0 items-center gap-2">
            <button
              type="button"
              onClick={goPrev}
              aria-label="Previous slide"
              className="inline-flex h-11 w-11 items-center justify-center rounded-md border border-white/20 bg-white/[0.04] text-white backdrop-blur-[2px] transition-[transform,background-color,border-color] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] hover:border-white/55 hover:bg-white/10 active:scale-[0.97] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
            >
              <ChevronLeft className="h-5 w-5" aria-hidden />
            </button>
            <button
              type="button"
              onClick={goNext}
              aria-label="Next slide"
              className="inline-flex h-11 w-11 items-center justify-center rounded-md border border-white/20 bg-white/[0.04] text-white backdrop-blur-[2px] transition-[transform,background-color,border-color] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] hover:border-white/55 hover:bg-white/10 active:scale-[0.97] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
            >
              <ChevronRight className="h-5 w-5" aria-hidden />
            </button>
          </div>
        </div>

        <p className="sr-only" aria-live="polite">
          Slide {index + 1} of {slides.length}: {active.headline}
        </p>
      </div>
    </section>
  )
}
