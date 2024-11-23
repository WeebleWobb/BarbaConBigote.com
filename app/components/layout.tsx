import type { Metadata } from 'next'
import { Signika_Negative } from 'next/font/google'
import '@/styles/globals.scss'
import Nav from '@/components/navigation/nav'

const signika = Signika_Negative({ 
  subsets: ['latin'],
  weight: ['400', '600', '700']
})

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body className={signika.className}>
        <div className='flex flex-col md:flex-row justify-between md:justify-start h-screen'>
          <Nav />
          {children}
        </div>
      </body>
    </html>
  )
} 