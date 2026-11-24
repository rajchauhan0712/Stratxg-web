import { home } from '../../content/home'
import { Section } from '../ui/Section'

export function Vision() {
  const { vision, incubators, digitalIndia } = home

  return (
    <>
      <Section title={vision.sectionTitle} description={vision.subtitle}>
        <img
          src={vision.image}
          alt="StratXG vision roadmap"
          width={1611}
          height={962}
          loading="lazy"
          className="mx-auto w-full max-w-5xl h-auto object-contain"
        />
      </Section>

      <Section
        eyebrow={incubators.eyebrow}
        title={incubators.sectionTitle}
        description={incubators.body}
        className="!pt-0"
      >
        <p className="mb-8 text-ink-muted max-w-3xl">{incubators.commitment}</p>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          {incubators.logos.map((logo) => (
            <div
              key={logo.src}
              className="flex items-center justify-center rounded-xl border border-line bg-white px-4 py-5 md:px-5 md:py-6 min-h-32"
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
        <div className="mt-10 flex flex-wrap gap-4 items-center">
          {digitalIndia.logos.map((src) => (
            <div
              key={src}
              className="rounded-lg bg-white/95 px-3 py-2 flex items-center justify-center min-h-14"
            >
              <img src={src} alt="" className="max-h-10 w-auto object-contain" />
            </div>
          ))}
        </div>
      </Section>
    </>
  )
}
