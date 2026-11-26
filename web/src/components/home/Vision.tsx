import { home } from '../../content/home'
import { Section } from '../ui/Section'

export function Vision() {
  const { vision, incubators, digitalIndia } = home

  return (
    <>
      <Section title={vision.sectionTitle} description={vision.subtitle}>
        <div className="surface-card overflow-hidden p-3 sm:p-6 lg:p-8">
          <img
            src={vision.image}
            alt="StratXG vision roadmap"
            width={1611}
            height={962}
            loading="lazy"
            className="mx-auto h-auto w-full max-w-5xl object-contain"
          />
        </div>
      </Section>

      <Section
        title={incubators.sectionTitle}
        description={incubators.body}
        className="!pt-0"
      >
        <p className="mb-8 text-ink-muted max-w-3xl">{incubators.commitment}</p>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          {incubators.logos.map((logo) => (
            <div
              key={logo.src}
              className="surface-card flex min-h-32 items-center justify-center px-4 py-5 transition-transform duration-300 hover:-translate-y-1 md:px-5 md:py-6"
            >
              <img
                src={logo.src}
                alt={logo.alt}
                loading="lazy"
                className="max-h-20 md:max-h-24 w-full object-contain"
              />
            </div>
          ))}
        </div>
      </Section>

      <Section dark className="!py-16 md:!py-20">
        <p className="max-w-4xl text-xl md:text-2xl font-display leading-snug text-balance">
          {digitalIndia.headline}
        </p>
        <p className="mt-6 max-w-3xl text-white/70 leading-relaxed">
          {digitalIndia.body}
        </p>
        <div className="mt-10 flex flex-wrap items-center gap-3">
          {digitalIndia.logos.map((src) => (
            <div
              key={src}
              className="flex min-h-14 items-center justify-center rounded-lg bg-white/95 px-3 py-2"
            >
              <img src={src} alt="" className="max-h-10 w-auto object-contain" />
            </div>
          ))}
        </div>
      </Section>
    </>
  )
}
