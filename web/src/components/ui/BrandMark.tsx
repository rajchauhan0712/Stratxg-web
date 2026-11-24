import { Link } from 'react-router-dom'

type Props = {
  to?: string
  onClick?: () => void
  variant?: 'dark' | 'light'
  showTagline?: boolean
  className?: string
}

export function BrandMark({
  to = '/',
  onClick,
  variant = 'dark',
  showTagline = false,
  className = '',
}: Props) {
  const isLight = variant === 'light'
  const mark = (
    <span className={`inline-flex items-center gap-2.5 ${className}`}>
      <span
        aria-hidden
        className={`relative grid size-8 place-items-center rounded-md ${
          isLight ? 'bg-white/12' : 'bg-brand'
        }`}
      >
        <svg
          width="18"
          height="18"
          viewBox="0 0 18 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M3 4.5h5.2L4.6 9.2 8.5 13.5H3.2L7 9.2 3 4.5Z"
            fill={isLight ? '#84ba3f' : '#84ba3f'}
          />
          <path
            d="M15 4.5h-5.2l3.6 4.7-3.9 4.3H14.8L11 9.2 15 4.5Z"
            fill={isLight ? '#ffffff' : '#f7f5f2'}
            opacity="0.92"
          />
        </svg>
      </span>
      <span className="flex flex-col leading-none">
        <span
          className={`font-display text-[1.15rem] font-semibold tracking-[-0.03em] ${
            isLight ? 'text-white' : 'text-brand'
          }`}
        >
          Strat
          <span className={isLight ? 'text-accent' : 'text-accent-dark'}>XG</span>
        </span>
        {showTagline && (
          <span
            className={`mt-1 font-display text-[0.62rem] font-medium tracking-[0.04em] ${
              isLight ? 'text-white/55' : 'text-ink-muted'
            }`}
          >
            Strategy · Transformation · Growth
          </span>
        )}
      </span>
    </span>
  )

  if (!to) return mark

  return (
    <Link
      to={to}
      onClick={onClick}
      className="shrink-0 rounded-md outline-offset-4 transition-opacity duration-[var(--duration-fast)] hover:opacity-90 active:scale-[0.98]"
      aria-label="StratXG home"
    >
      {mark}
    </Link>
  )
}
