type Props = {
  title: string
  subtitle?: string
  background?: string
}

export function PageHero({ title, subtitle, background }: Props) {
  return (
    <section className="relative isolate overflow-hidden bg-brand text-white">
      {background && (
        <img
          src={background}
          alt=""
          width={1600}
          height={600}
          decoding="async"
          loading="eager"
          fetchPriority="low"
          className="absolute inset-0 h-full w-full object-cover opacity-40"
        />
      )}
      <div className="absolute inset-0 bg-gradient-to-b from-brand/70 via-brand/80 to-brand" />
      <div className="relative mx-auto max-w-6xl px-5 md:px-8 py-24 md:py-32">
        <p className="font-display text-xs font-semibold uppercase tracking-[0.2em] text-accent mb-4">
          StratXG
        </p>
        <h1 className="max-w-3xl text-4xl md:text-5xl text-balance text-white">
          {title}
        </h1>
        {subtitle && (
          <p className="mt-5 max-w-2xl text-lg text-white/80 leading-relaxed">
            {subtitle}
          </p>
        )}
      </div>
    </section>
  )
}
