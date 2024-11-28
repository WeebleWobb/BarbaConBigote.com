import Content from '@/components/grid/container'
import { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Cerveza',
  description: 'A small personal project that tracks the uniqe and enjoyable beers I have tasted, utilizing Untappd API.',
  openGraph: {
    title: 'Cerveza',
    description: 'A small personal project that tracks the uniqe and enjoyable beers I have tasted, utilizing Untappd API.'
  }
}

const cerveza = () => {
  return (
        <Content>
          <h1>
            Cerveza
          </h1>
        </Content>
  )
}

export default cerveza;