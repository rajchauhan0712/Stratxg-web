type Props = {
  pathname: string
}

function SkeletonLine({ className = '' }: { className?: string }) {
  return <div aria-hidden="true" className={`rounded bg-current ${className}`} />
}

function SectionHeading() {
  return (
    <div className="mb-9 max-w-3xl md:mb-12">
      <SkeletonLine className="h-8 w-2/3 text-brand/[0.09]" />
      <SkeletonLine className="mt-4 h-4 w-full max-w-2xl text-brand/[0.06]" />
      <SkeletonLine className="mt-2 h-4 w-4/5 max-w-xl text-brand/[0.06]" />
    </div>
  )
}

function ContentCards({ count = 3 }: { count?: number }) {
  return (
    <div className="grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
      {Array.from({ length: count }, (_, index) => (
        <div
          key={index}
          aria-hidden="true"
          className="rounded-2xl border border-line bg-white p-6 shadow-[0_16px_40px_-32px_rgba(34,18,39,0.24)]"
        >
          <SkeletonLine className="h-3 w-1/3 text-brand/[0.09]" />
          <SkeletonLine className="mt-5 h-6 w-3/4 text-brand/[0.1]" />
          <SkeletonLine className="mt-4 h-3 w-full text-brand/[0.06]" />
          <SkeletonLine className="mt-2 h-3 w-5/6 text-brand/[0.06]" />
          <SkeletonLine className="mt-2 h-3 w-2/3 text-brand/[0.06]" />
          <SkeletonLine className="mt-6 h-4 w-1/3 text-brand/[0.08]" />
        </div>
      ))}
    </div>
  )
}

function PageBanner() {
  return (
    <section
      aria-hidden="true"
      className="relative isolate flex min-h-[17rem] overflow-hidden bg-brand text-white sm:min-h-[19rem] lg:min-h-[22rem]"
    >
      <div className="absolute inset-0 bg-[radial-gradient(ellipse_at_78%_30%,rgba(145,200,75,0.16),transparent_42%),linear-gradient(105deg,rgba(35,12,45,0.96),rgba(50,19,63,0.8)_58%,rgba(50,19,63,0.68))]" />
      <div className="relative mx-auto flex min-h-[17rem] w-full max-w-7xl flex-col justify-center px-5 py-12 sm:min-h-[19rem] sm:px-8 sm:py-14 lg:min-h-[22rem] lg:px-10 lg:py-16">
        <SkeletonLine className="mb-5 h-3 w-44 text-white/20" />
        <SkeletonLine className="mb-3 h-3 w-16 text-accent/40" />
        <div className="flex items-end justify-between gap-8">
          <div className="w-full max-w-4xl">
            <SkeletonLine className="h-10 w-4/5 max-w-2xl text-white/20 sm:h-12 lg:h-14" />
            <SkeletonLine className="mt-4 h-4 w-full max-w-2xl text-white/15" />
            <SkeletonLine className="mt-2 h-4 w-3/5 max-w-xl text-white/15" />
          </div>
          <SkeletonLine className="mb-1 hidden h-11 w-48 rounded-full border border-white/10 text-white/10 xl:block" />
        </div>
      </div>
    </section>
  )
}

function HomeSkeleton() {
  return (
    <>
      <section
        aria-hidden="true"
        className="relative isolate flex h-[min(44rem,calc(100svh-5rem))] min-h-[34rem] items-end overflow-hidden bg-brand text-white sm:min-h-[36rem] lg:min-h-[39rem]"
      >
        <div className="absolute inset-0 bg-[radial-gradient(ellipse_at_75%_25%,rgba(145,200,75,0.12),transparent_38%),linear-gradient(90deg,rgba(35,12,40,0.9),rgba(35,12,40,0.55)),linear-gradient(0deg,rgba(35,12,40,0.65),transparent_70%)]" />
        <div className="relative mx-auto w-full max-w-7xl px-5 pb-20 pt-16 sm:px-8 sm:pb-24 lg:px-10">
          <SkeletonLine className="h-3 w-24 text-accent/50" />
          <SkeletonLine className="mt-5 h-10 w-full max-w-3xl text-white/20 sm:h-12 lg:h-14" />
          <SkeletonLine className="mt-3 h-10 w-4/5 max-w-2xl text-white/20 sm:h-12 lg:h-14" />
          <SkeletonLine className="mt-5 h-4 w-full max-w-lg text-white/15" />
          <SkeletonLine className="mt-2 h-4 w-4/5 max-w-md text-white/15" />
          <div className="mt-6 flex gap-3">
            <SkeletonLine className="h-11 w-36 rounded-md text-accent/50" />
            <SkeletonLine className="h-11 w-40 rounded-md border border-white/20 text-white/10" />
          </div>
          <SkeletonLine className="mt-8 h-2 w-full max-w-xl text-white/20" />
        </div>
      </section>
      <div className="relative z-20 mx-auto -mt-8 grid w-full max-w-7xl gap-3 px-5 sm:grid-cols-2 sm:px-8 lg:grid-cols-4 lg:px-10">
        {Array.from({ length: 4 }, (_, index) => (
          <div
            key={index}
            aria-hidden="true"
            className="rounded-2xl border border-line bg-white p-6 shadow-[0_16px_40px_-32px_rgba(34,18,39,0.24)]"
          >
            <SkeletonLine className="size-10 rounded-xl text-brand/[0.08]" />
            <SkeletonLine className="mt-5 h-5 w-2/3 text-brand/10" />
            <SkeletonLine className="mt-3 h-3 w-full text-brand/[0.06]" />
            <SkeletonLine className="mt-2 h-3 w-5/6 text-brand/[0.06]" />
          </div>
        ))}
      </div>
    </>
  )
}

function ContactSkeleton() {
  return (
    <section className="py-16 md:py-20 lg:py-24">
      <div className="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <SectionHeading />
        <div className="grid gap-8 lg:grid-cols-[0.82fr_1.18fr] lg:gap-10">
          <div
            aria-hidden="true"
            className="rounded-2xl bg-brand p-6 sm:p-8"
          >
            <SkeletonLine className="h-6 w-4/5 text-white/20" />
            <SkeletonLine className="mt-3 h-4 w-full text-white/15" />
            <SkeletonLine className="mt-2 h-4 w-3/4 text-white/15" />
            <div className="mt-8 space-y-5">
              {Array.from({ length: 5 }, (_, index) => (
                <SkeletonLine
                  key={index}
                  className="h-4 w-4/5 text-white/15"
                />
              ))}
            </div>
          </div>
          <div
            aria-hidden="true"
            className="space-y-5 rounded-2xl border border-line bg-white p-6 shadow-[0_16px_40px_-32px_rgba(34,18,39,0.24)] sm:p-8"
          >
            {Array.from({ length: 4 }, (_, index) => (
              <div key={index}>
                <SkeletonLine className="mb-2 h-4 w-24 text-brand/10" />
                <SkeletonLine className="h-11 w-full rounded-md border border-line text-brand/[0.04]" />
              </div>
            ))}
            <SkeletonLine className="h-11 w-40 rounded-md text-brand/10" />
          </div>
        </div>
      </div>
    </section>
  )
}

function VisualGridSkeleton() {
  return (
    <section className="py-16 md:py-20 lg:py-24">
      <div className="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <SectionHeading />
        <div className="columns-1 gap-4 sm:columns-2 lg:columns-3">
          {Array.from({ length: 9 }, (_, index) => (
            <div
              key={index}
              aria-hidden="true"
              className={`mb-4 break-inside-avoid rounded-2xl bg-brand/[0.08] ${
                index % 3 === 1 ? 'h-48' : 'h-64'
              }`}
            />
          ))}
        </div>
      </div>
    </section>
  )
}

function StandardPageSkeleton({ pathname }: Props) {
  if (pathname === '/contact' || pathname === '/contact.php') {
    return <ContactSkeleton />
  }

  if (
    ['/gallery', '/gallery.php', '/media', '/media.php', '/videos', '/videos.php'].includes(
      pathname,
    )
  ) {
    return <VisualGridSkeleton />
  }

  return (
    <section className="py-16 md:py-20 lg:py-24">
      <div className="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <SectionHeading />
        <ContentCards count={pathname === '/industries' ? 6 : 3} />
      </div>
    </section>
  )
}

export function PageSkeleton({ pathname }: Props) {
  const isHome = pathname === '/' || pathname === '/index.php'

  return (
    <div
      role="status"
      aria-label="Loading page"
      className="animate-pulse"
    >
      <span className="sr-only">Loading page content</span>
      {isHome ? (
        <HomeSkeleton />
      ) : (
        <>
          <PageBanner />
          <StandardPageSkeleton pathname={pathname} />
        </>
      )}
    </div>
  )
}
