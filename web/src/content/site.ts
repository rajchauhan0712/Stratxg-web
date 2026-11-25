export const site = {
  name: 'StratXG',
  legalName: 'StratXG Consulting Private Limited',
  tagline: 'Strategy · Transformation · Growth',
  email: 'info@stratxg.com',
  supportEmail: 'support@stratxg.com',
  phones: ['+(91) 976 921 1415', '+(91) 870 069 2070'],
  address:
    'ILESEUM GLC Bavdhan 18 DSK Ranwara Rd, Pakharbaug Society, Ram Nagar, Bavdhan Pune. 411021',
  logo: '/images/logo.png',
  logoWhite: '/images/logo-white.png',
  legacyBaseUrl: (
    import.meta.env.VITE_LEGACY_BASE_URL ?? 'https://www.stratxg.com'
  ).replace(/\/+$/, ''),
}

export const navLinks = [
  { label: 'Home', to: '/' },
  { label: 'About', to: '/about' },
  { label: 'Advisors', to: '/advisors' },
  { label: 'Clients', to: '/clients' },
  { label: 'Industries', to: '/industries' },
  { label: 'Contact', to: '/contact' },
] as const

export const exploreLinks = [
  { label: 'Academy', to: '/academy' },
  { label: 'Careers', to: '/careers' },
  { label: 'Media', to: '/media' },
  { label: 'Gallery', to: '/gallery' },
  { label: 'VentureCap', to: '/venturecap' },
  { label: 'Videos', to: '/videos' },
  { label: 'Corporate responsibility', to: '/csr' },
] as const

export const externalLinks = [
  { label: 'Login', href: `${site.legacyBaseUrl}/login.php` },
] as const
