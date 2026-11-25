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
      className={`py-16 md:py-20 lg:py-24 ${dark ? 'bg-brand text-white' : ''} ${className}`}
    >
      <div className={`mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-10 ${containerClassName}`}>
        {(eyebrow || title || description) && (
          <header className="mb-9 max-w-3xl md:mb-12">
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
                className={`font-display text-3xl font-semibold tracking-[-0.025em] md:text-[2.5rem] text-balance ${
                  dark ? 'text-white' : 'text-ink'
                }`}
              >
                {title}
              </h2>
            )}
            {description && (
              <p
                className={`mt-4 max-w-2xl text-base leading-7 sm:text-lg sm:leading-8 ${
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
