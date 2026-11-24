import type { ReactNode } from 'react'

type Props = {
  id?: string
  children: ReactNode
  className?: string
  containerClassName?: string
  eyebrow?: string
  title?: string
  description?: string
  dark?: boolean
}

export function Section({
  id,
  children,
  className = '',
  containerClassName = '',
  eyebrow,
  title,
  description,
  dark = false,
}: Props) {
  return (
    <section
      id={id}
      className={`py-20 md:py-28 ${dark ? 'bg-brand text-white' : ''} ${className}`}
    >
      <div className={`mx-auto w-full max-w-6xl px-5 md:px-8 ${containerClassName}`}>
        {(eyebrow || title || description) && (
          <header className="mb-12 max-w-3xl">
            {eyebrow && (
              <p
                className={`font-display text-xs font-semibold uppercase tracking-[0.18em] mb-3 ${
                  dark ? 'text-accent' : 'text-accent-dark'
                }`}
              >
                {eyebrow}
              </p>
            )}
            {title && (
              <h2
                className={`text-3xl md:text-4xl text-balance ${
                  dark ? 'text-white' : 'text-ink'
                }`}
              >
                {title}
              </h2>
            )}
            {description && (
              <p
                className={`mt-4 text-lg leading-relaxed ${
                  dark ? 'text-white/75' : 'text-ink-muted'
                }`}
              >
                {description}
              </p>
            )}
          </header>
        )}
        {children}
      </div>
    </section>
  )
}
