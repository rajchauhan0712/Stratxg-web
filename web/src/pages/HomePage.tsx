import { Hero } from '../components/home/Hero'
import { Pillars } from '../components/home/Pillars'
import { Philosophy } from '../components/home/Philosophy'
import { Offerings } from '../components/home/Offerings'
import { Vision } from '../components/home/Vision'
import { FinalCta } from '../components/home/FinalCta'

export function HomePage() {
  return (
    <>
      <Hero />
      <Pillars />
      <Philosophy />
      <Offerings />
      <Vision />
      <FinalCta />
    </>
  )
}
