import { Hero } from '../components/home/Hero'
import { Pillars } from '../components/home/Pillars'
import { Philosophy } from '../components/home/Philosophy'
import { Offerings } from '../components/home/Offerings'
import { Vision } from '../components/home/Vision'
import { FinalCta } from '../components/home/FinalCta'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'

export function HomePage() {
  const seo = pageSeo.home
  return (
    <>
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <Hero />
      <Pillars />
      <Philosophy />
      <Offerings />
      <Vision />
      <FinalCta />
    </>
  )
}
