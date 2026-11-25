import { site } from './site'

export const contact = {
  pageTitle: {
    title: 'Let’s talk about what’s next',
    subtitle: 'Tell us where you want to go. We’ll help you find a practical way forward.',
    background: '/images/bg/02.jpg',
  },
  company: site.legalName,
  tagline: 'You are one step away from transformational growth',
  heading: "Let's Get In Touch!",
  intro: 'Below are our touchpoints. please contact for any query',
  address: site.address,
  phones: site.phones,
  emails: [site.email, site.supportEmail],
  submitLabel: 'Send your message',
  presence: {
    india: [
      'Mumbai',
      'Pune',
      'Delhi',
      'Chandigarh',
      'Chennai',
      'Madurai',
      'Jaipur',
      'Kolkata',
      'Guwahati',
      'Ahemdabad',
      'Bengaluru',
    ],
    international: ['Singapore', 'UK', 'USA', 'Bangladesh'],
  },
}
