import { useEffect } from 'react'
import { defaultSeo, siteOrigin } from '../content/seo'

type Props = {
  title?: string
  description?: string
  path?: string
  image?: string
  noIndex?: boolean
}

function upsertMeta(
  attr: 'name' | 'property',
  key: string,
  content: string,
) {
  let el = document.head.querySelector<HTMLMetaElement>(
    `meta[${attr}="${key}"]`,
  )
  if (!el) {
    el = document.createElement('meta')
    el.setAttribute(attr, key)
    document.head.appendChild(el)
  }
  el.setAttribute('content', content)
}

function upsertLink(rel: string, href: string) {
  let el = document.head.querySelector<HTMLLinkElement>(`link[rel="${rel}"]`)
  if (!el) {
    el = document.createElement('link')
    el.rel = rel
    document.head.appendChild(el)
  }
  el.href = href
}

/** Lightweight document head manager — no helmet dependency. */
export function Seo({
  title = defaultSeo.title,
  description = defaultSeo.description,
  path = '/',
  image = defaultSeo.ogImage,
  noIndex = false,
}: Props) {
  useEffect(() => {
    const url = `${siteOrigin}${path === '/' ? '/' : path}`
    document.title = title
    upsertMeta('name', 'description', description)
    upsertMeta('name', 'robots', noIndex ? 'noindex,nofollow' : 'index,follow')
    upsertMeta('property', 'og:type', 'website')
    upsertMeta('property', 'og:site_name', defaultSeo.siteName)
    upsertMeta('property', 'og:title', title)
    upsertMeta('property', 'og:description', description)
    upsertMeta('property', 'og:url', url)
    upsertMeta('property', 'og:image', image)
    upsertMeta(
      'property',
      'og:image:alt',
      'Formula 1 pit crew working together during a race',
    )
    upsertMeta('name', 'twitter:card', defaultSeo.twitterCard)
    upsertMeta('name', 'twitter:title', title)
    upsertMeta('name', 'twitter:description', description)
    upsertMeta('name', 'twitter:image', image)
    upsertMeta(
      'name',
      'twitter:image:alt',
      'Formula 1 pit crew working together during a race',
    )
    upsertLink('canonical', url)
  }, [title, description, path, image, noIndex])

  return null
}
