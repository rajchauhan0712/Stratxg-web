import { lazy } from 'react'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import { Toaster } from 'sonner'
import { PageShell } from './components/layout/PageShell'

const HomePage = lazy(async () => ({
  default: (await import('./pages/HomePage')).HomePage,
}))
const AboutPage = lazy(async () => ({
  default: (await import('./pages/AboutPage')).AboutPage,
}))
const AdvisorsPage = lazy(async () => ({
  default: (await import('./pages/AdvisorsPage')).AdvisorsPage,
}))
const ClientsPage = lazy(async () => ({
  default: (await import('./pages/ClientsPage')).ClientsPage,
}))
const IndustriesPage = lazy(async () => ({
  default: (await import('./pages/IndustriesPage')).IndustriesPage,
}))
const ContactPage = lazy(async () => ({
  default: (await import('./pages/ContactPage')).ContactPage,
}))
const AcademyPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).AcademyPage,
}))
const CareersPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).CareersPage,
}))
const CsrPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).CsrPage,
}))
const GalleryPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).GalleryPage,
}))
const IndustryDetailPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).IndustryDetailPage,
}))
const LegacyFallbackPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).LegacyFallbackPage,
}))
const MediaPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).MediaPage,
}))
const ServicesPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).ServicesPage,
}))
const VentureCapPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).VentureCapPage,
}))
const VideosPage = lazy(async () => ({
  default: (await import('./pages/LegacyPages')).VideosPage,
}))

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route element={<PageShell />}>
          <Route index element={<HomePage />} />
          <Route path="index.php" element={<HomePage />} />
          <Route path="about" element={<AboutPage />} />
          <Route path="about-us.php" element={<AboutPage />} />
          <Route path="team.php" element={<AboutPage />} />
          <Route path="advisors" element={<AdvisorsPage />} />
          <Route path="advisors.php" element={<AdvisorsPage />} />
          <Route path="clients" element={<ClientsPage />} />
          <Route path="partners.php" element={<ClientsPage />} />
          <Route path="industries" element={<IndustriesPage />} />
          <Route path="industries/:slug" element={<IndustryDetailPage />} />
          <Route path="contact" element={<ContactPage />} />
          <Route path="contact.php" element={<ContactPage />} />
          <Route path="services" element={<ServicesPage />} />
          <Route path="business.php" element={<ServicesPage />} />
          <Route path="academy" element={<AcademyPage />} />
          <Route path="academy.php" element={<AcademyPage />} />
          <Route path="careers" element={<CareersPage />} />
          <Route path="careers.php" element={<CareersPage />} />
          <Route path="media" element={<MediaPage />} />
          <Route path="media.php" element={<MediaPage />} />
          <Route path="gallery" element={<GalleryPage />} />
          <Route path="gallery.php" element={<GalleryPage />} />
          <Route path="venturecap" element={<VentureCapPage />} />
          <Route path="vc.php" element={<VentureCapPage />} />
          <Route path="csr" element={<CsrPage />} />
          <Route path="csr.php" element={<CsrPage />} />
          <Route path="videos" element={<VideosPage />} />
          <Route path="videos.php" element={<VideosPage />} />
          <Route path="edu.php" element={<IndustryDetailPage />} />
          <Route path="healthcare.php" element={<IndustryDetailPage />} />
          <Route path="infra.php" element={<IndustryDetailPage />} />
          <Route path="it.php" element={<IndustryDetailPage />} />
          <Route path="insurance.php" element={<IndustryDetailPage />} />
          <Route path="msw.php" element={<IndustryDetailPage />} />
          <Route path="smartcity.php" element={<IndustryDetailPage />} />
          <Route path="textile.php" element={<IndustryDetailPage />} />
          <Route path="utility.php" element={<IndustryDetailPage />} />
          <Route path="cnf-space.php" element={<IndustryDetailPage />} />
          <Route path="*" element={<LegacyFallbackPage />} />
        </Route>
      </Routes>
      <Toaster
        position="bottom-right"
        toastOptions={{
          className: 'font-display',
        }}
      />
    </BrowserRouter>
  )
}
