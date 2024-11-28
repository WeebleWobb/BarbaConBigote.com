import { Metadata } from 'next'

export const defaultMetadata: Metadata = {
  title: {
    default: 'Juan D. Bolaños | Barba con Bigote',
    template: '%s | Barba con Bigote'
  },
  description: 'Sr. UI Designer and Engineer specializing in Product Design.',
  keywords: ['UI Design', 'UI Engineering', 'Portfolio', 'Product Design', 'UX Design', 'Designer'],
  authors: [{ name: 'Juan D. Bolaños' }],
  creator: 'Juan D. Bolaños',
  metadataBase: new URL('https://barbaconbigote.com'),
  openGraph: {
    type: 'website',
    locale: 'en_US',
    siteName: 'Barba con Bigote'
  }
} 