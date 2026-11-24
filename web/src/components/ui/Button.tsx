import { Link } from 'react-router-dom'
import type { ButtonHTMLAttributes, ReactNode } from 'react'

type Variant = 'primary' | 'secondary' | 'ghost' | 'onDark'
type Size = 'md' | 'lg'

type CommonProps = {
  children: ReactNode
  variant?: Variant
  size?: Size
  className?: string
}

type ButtonAsButton = CommonProps &
  ButtonHTMLAttributes<HTMLButtonElement> & { to?: undefined; href?: undefined }

type ButtonAsLink = CommonProps & { to: string; href?: undefined }

type ButtonAsExternal = CommonProps & { href: string; to?: undefined }

type Props = ButtonAsButton | ButtonAsLink | ButtonAsExternal

const base =
  'inline-flex items-center justify-center gap-2 font-display font-medium tracking-wide rounded-md transition-[transform,background-color,color,border-color,opacity] duration-[var(--duration-base)] ease-[var(--ease-out-quart)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.97] disabled:opacity-50 disabled:pointer-events-none'

const variants: Record<Variant, string> = {
  primary:
    'bg-brand text-white hover:bg-brand-soft border border-transparent',
  secondary:
    'bg-transparent text-brand border border-brand/25 hover:border-brand hover:bg-brand/[0.04]',
  ghost: 'bg-transparent text-ink hover:bg-ink/[0.05]',
  onDark:
    'bg-accent text-ink hover:bg-accent-dark border border-transparent',
}

const sizes: Record<Size, string> = {
  md: 'px-5 py-2.5 text-sm',
  lg: 'px-7 py-3.5 text-base',
}

export function Button(props: Props) {
  const {
    children,
    variant = 'primary',
    size = 'md',
    className = '',
    ...rest
  } = props
  const classes = `${base} ${variants[variant]} ${sizes[size]} ${className}`

  if ('to' in props && props.to) {
    return (
      <Link to={props.to} className={classes}>
        {children}
      </Link>
    )
  }

  if ('href' in props && props.href) {
    return (
      <a
        href={props.href}
        className={classes}
        target="_blank"
        rel="noopener noreferrer"
      >
        {children}
      </a>
    )
  }

  const buttonProps = rest as ButtonHTMLAttributes<HTMLButtonElement>
  return (
    <button type={buttonProps.type ?? 'button'} className={classes} {...buttonProps}>
      {children}
    </button>
  )
}
