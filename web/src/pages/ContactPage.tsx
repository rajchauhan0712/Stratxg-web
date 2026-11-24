import { useState } from 'react'
import type { FormEvent } from 'react'
import { toast } from 'sonner'
import { Mail, MapPin, Phone } from 'lucide-react'
import { contact } from '../content/contact'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { Button } from '../components/ui/Button'

type FormState = {
  name: string
  email: string
  phone: string
  message: string
}

const initial: FormState = { name: '', email: '', phone: '', message: '' }

export function ContactPage() {
  const [form, setForm] = useState<FormState>(initial)
  const [submitting, setSubmitting] = useState(false)
  const endpoint = import.meta.env.VITE_CONTACT_ENDPOINT as string | undefined

  async function onSubmit(e: FormEvent) {
    e.preventDefault()
    if (!form.name.trim() || !form.email.trim() || !form.message.trim()) {
      toast.error('Please fill in name, email, and message.')
      return
    }

    setSubmitting(true)
    try {
      if (endpoint) {
        const body = new FormData()
        body.append('action', 'submit')
        body.append('name', form.name)
        body.append('email', form.email)
        body.append('phone', form.phone)
        body.append('message', form.message)
        const res = await fetch(endpoint, { method: 'POST', body })
        if (!res.ok) throw new Error('Request failed')
        toast.success('Thank you for contacting StratXG')
        setForm(initial)
      } else {
        const subject = encodeURIComponent('Message from StratXG website')
        const body = encodeURIComponent(
          `From: ${form.name}\nEmail: ${form.email}\nPhone: ${form.phone}\n\n${form.message}`,
        )
        window.location.href = `mailto:info@stratxg.com?subject=${subject}&body=${body}`
        toast.message('Opening your email client…')
      }
    } catch {
      toast.error('Sorry, there was an error. Please try again later.')
    } finally {
      setSubmitting(false)
    }
  }

  return (
    <>
      <PageHero
        title={contact.pageTitle.title}
        subtitle={contact.pageTitle.subtitle}
        background={contact.pageTitle.background}
      />

      <Section title={contact.heading} description={contact.intro}>
        <div className="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
          <aside className="space-y-6">
            <p className="font-display text-lg text-brand">{contact.tagline}</p>
            <div className="space-y-4 text-sm text-ink-muted">
              <p className="flex gap-3">
                <MapPin className="shrink-0 text-accent-dark mt-0.5" size={18} />
                <span>{contact.address}</span>
              </p>
              {contact.phones.map((phone) => (
                <a
                  key={phone}
                  href={`tel:${phone.replace(/\s/g, '')}`}
                  className="flex gap-3 hover:text-brand transition-colors"
                >
                  <Phone className="shrink-0 text-accent-dark" size={18} />
                  {phone}
                </a>
              ))}
              {contact.emails.map((email) => (
                <a
                  key={email}
                  href={`mailto:${email}`}
                  className="flex gap-3 hover:text-brand transition-colors"
                >
                  <Mail className="shrink-0 text-accent-dark" size={18} />
                  {email}
                </a>
              ))}
            </div>

            <div className="pt-4 border-t border-line">
              <p className="font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent-dark mb-3">
                Presence
              </p>
              <p className="text-sm text-ink-muted mb-2">
                India: {contact.presence.india.join(' · ')}
              </p>
              <p className="text-sm text-ink-muted">
                International: {contact.presence.international.join(' · ')}
              </p>
            </div>
          </aside>

          <form
            onSubmit={onSubmit}
            className="rounded-2xl border border-line bg-surface-elevated p-6 md:p-8 space-y-5"
            noValidate
          >
            {(
              [
                ['name', 'Name*', 'text'],
                ['email', 'Email*', 'email'],
                ['phone', 'Phone', 'tel'],
              ] as const
            ).map(([key, label, type]) => (
              <label key={key} className="block">
                <span className="font-display text-sm text-ink mb-1.5 block">
                  {label}
                </span>
                <input
                  type={type}
                  value={form[key]}
                  onChange={(e) =>
                    setForm((prev) => ({ ...prev, [key]: e.target.value }))
                  }
                  className="w-full rounded-md border border-line bg-white px-3.5 py-2.5 text-ink outline-none transition-[border-color,box-shadow] focus:border-brand/40 focus:shadow-[0_0_0_3px_rgba(54,17,52,0.08)]"
                  required={key !== 'phone'}
                />
              </label>
            ))}

            <label className="block">
              <span className="font-display text-sm text-ink mb-1.5 block">
                Comment*
              </span>
              <textarea
                value={form.message}
                onChange={(e) =>
                  setForm((prev) => ({ ...prev, message: e.target.value }))
                }
                rows={5}
                required
                className="w-full rounded-md border border-line bg-white px-3.5 py-2.5 text-ink outline-none resize-y min-h-28 transition-[border-color,box-shadow] focus:border-brand/40 focus:shadow-[0_0_0_3px_rgba(54,17,52,0.08)]"
              />
            </label>

            <Button type="submit" size="lg" disabled={submitting} className="w-full sm:w-auto">
              {submitting ? 'Sending…' : contact.submitLabel}
            </Button>
          </form>
        </div>
      </Section>
    </>
  )
}
