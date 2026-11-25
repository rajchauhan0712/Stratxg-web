import { Outlet, useLocation } from 'react-router-dom'
import { Suspense, useEffect } from 'react'
import { Header } from './Header'
import { Footer } from './Footer'
import { PageSkeleton } from './PageSkeleton'
import { useHashScroll } from '../../hooks/useHashScroll'

export function PageShell() {
  const { pathname, hash } = useLocation()
  useHashScroll()

  useEffect(() => {
    if (!hash) window.scrollTo(0, 0)
  }, [pathname, hash])

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        <Suspense fallback={<PageSkeleton pathname={pathname} />}>
          <Outlet />
        </Suspense>
      </main>
      <Footer />
    </div>
  )
}
