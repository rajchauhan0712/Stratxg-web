import { site } from './site'

export const contact = {
  pageTitle: {
    title: 'Welcome to stratXG',
    subtitle: 'Now Think The Unthinkable With StratXG',
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
