import { useState } from 'react'
import type { FormEvent } from 'react'
import { toast } from 'sonner'
import { Mail, MapPin, Phone } from 'lucide-react'
import { contact } from '../content/contact'
import { PageHero } from '../components/ui/PageHero'
import { Section } from '../components/ui/Section'
import { Button } from '../components/ui/Button'
import { Seo } from '../components/Seo'
import { pageSeo } from '../content/seo'

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
  const seo = pageSeo.contact

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
      <Seo title={seo.title} description={seo.description} path={seo.path} />
      <PageHero
        title={contact.pageTitle.title}
        subtitle={contact.pageTitle.subtitle}
        background={contact.pageTitle.background}
        showCta={false}
      />

      <Section title={contact.heading} description={contact.intro}>
        <div className="grid gap-8 lg:grid-cols-[0.82fr_1.18fr] lg:gap-10">
          <aside className="surface-card h-fit rounded-2xl bg-brand p-6 text-white sm:p-8">
            <p className="font-display text-xl font-medium leading-snug text-white sm:text-2xl">
              {contact.tagline}
            </p>
            <p className="mt-3 text-sm leading-6 text-white/70">
              Our team is ready to help with strategy, transformation, and
              growth.
            </p>
            <div className="mt-8 space-y-5 text-sm text-white/80">
              <p className="flex gap-3">
                <MapPin className="mt-0.5 shrink-0 text-accent" size={18} />
                <span className="leading-6">{contact.address}</span>
              </p>
              {contact.phones.map((phone) => (
                <a
                  key={phone}
                  href={`tel:${phone.replace(/\s/g, '')}`}
                  className="flex items-center gap-3 transition-colors hover:text-white"
                >
                  <Phone className="shrink-0 text-accent" size={18} />
                  {phone}
                </a>
              ))}
              {contact.emails.map((email) => (
                <a
                  key={email}
                  href={`mailto:${email}`}
                  className="flex items-center gap-3 transition-colors hover:text-white"
                >
                  <Mail className="shrink-0 text-accent" size={18} />
                  {email}
                </a>
              ))}
            </div>

            <div className="mt-8 border-t border-white/15 pt-5">
              <p className="mb-3 font-display text-xs font-semibold uppercase tracking-[0.14em] text-accent">
                Presence
              </p>
              <p className="mb-2 text-sm leading-6 text-white/70">
                India: {contact.presence.india.join(' · ')}
              </p>
              <p className="text-sm leading-6 text-white/70">
                International: {contact.presence.international.join(' · ')}
              </p>
            </div>
          </aside>

          <form
            onSubmit={onSubmit}
            className="surface-card space-y-5 rounded-2xl p-6 sm:p-8"
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
                  autoComplete={
                    key === 'name'
                      ? 'name'
                      : key === 'email'
                        ? 'email'
                        : 'tel'
                  }
                  placeholder={
                    key === 'name'
                      ? 'Your name'
                      : key === 'email'
                        ? 'you@company.com'
                        : '+1 (555) 000-0000'
                  }
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
                placeholder="Tell us a little about what you need..."
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
