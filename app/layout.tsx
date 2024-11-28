import { Signika_Negative } from 'next/font/google'
import './styles/globals.scss'
import Nav from '@/components/navigation/nav'
import { defaultMetadata } from '@/config/metadata'

const signika = Signika_Negative({ 
  subsets: ['latin'],
  weight: ['400', '600', '700'],
  display: 'swap'
})

export const metadata = defaultMetadata

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