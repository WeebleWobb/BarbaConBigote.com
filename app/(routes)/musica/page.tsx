import Content from '@/components/grid/container'
import { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Musica',
  description: 'The music I listen to when I work, relax, and unplug.',
  openGraph: {
    title: 'Musica',
    description: 'The music I listen to when I work, relax, and unplug.'
  }
}

const musica = () => {
  return (
    <Content>
      <h1>
        Musica
      </h1>

    </Content>
  )
}

export default musica;