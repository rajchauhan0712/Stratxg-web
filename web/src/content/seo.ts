import { site } from './site'

const origin = import.meta.env.VITE_SITE_URL || 'https://www.stratxg.com'

export const siteOrigin = String(origin).replace(/\/$/, '')

export const defaultSeo = {
  siteName: site.name,
  title: `${site.name} | Strategy · Transformation · Growth`,
  description:
    'StratXG Consulting — strategy, digital transformation, and growth advisory across healthcare, infrastructure, edutainment, renewable energy, and more.',
  ogImage: `${siteOrigin}/hero/92af2-01.jpg`,
  twitterCard: 'summary_large_image' as const,
}

export const pageSeo = {
  home: {
    title: defaultSeo.title,
    description: defaultSeo.description,
    path: '/',
  },
  about: {
    title: `About | ${site.name}`,
    description:
      'Learn who StratXG is — a digital consulting firm reinvigorating growth through strategic repositioning, knowledge services, and innovative technologies.',
    path: '/about',
  },
  advisors: {
    title: `Advisors | ${site.name}`,
    description:
      'Meet StratXG advisors guiding strategy, transformation, and growth programs for enterprises across India.',
    path: '/advisors',
  },
  clients: {
    title: `Clients | ${site.name}`,
    description:
      'Organizations that trust StratXG for consulting, digital transformation, and profitable growth.',
    path: '/clients',
  },
  industries: {
    title: `Industries | ${site.name}`,
    description:
      'StratXG industry expertise across healthcare, infrastructure, edutainment, IT, NBFC, renewable energy, smart cities, and utilities.',
    path: '/industries',
  },
  contact: {
    title: `Contact | ${site.name}`,
    description:
      'Get a quote or request a conversation with StratXG Consulting in Pune — strategy, transformation, and growth.',
    path: '/contact',
  },
} as const

export type PageSeoKey = keyof typeof pageSeo
