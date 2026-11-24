import { BrowserRouter, Navigate, Route, Routes } from 'react-router-dom'
import { Toaster } from 'sonner'
import { PageShell } from './components/layout/PageShell'
import { HomePage } from './pages/HomePage'
import { AboutPage } from './pages/AboutPage'
import { AdvisorsPage } from './pages/AdvisorsPage'
import { ClientsPage } from './pages/ClientsPage'
import { IndustriesPage } from './pages/IndustriesPage'
import { ContactPage } from './pages/ContactPage'

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route element={<PageShell />}>
          <Route index element={<HomePage />} />
          <Route path="about" element={<AboutPage />} />
          <Route path="advisors" element={<AdvisorsPage />} />
          <Route path="clients" element={<ClientsPage />} />
          <Route path="industries" element={<IndustriesPage />} />
          <Route path="contact" element={<ContactPage />} />
          <Route path="*" element={<Navigate to="/" replace />} />
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
