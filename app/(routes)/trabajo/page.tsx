import Content from '@/components/grid/container'
import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Trabajo',
  description: 'A collection of case studies, component specs, and projects that showcase my more than a decades worth of experience in the design industry.',
  openGraph: {
    title: 'Trabajo',
    description: 'A collection of case studies, component specs, and projects that showcase my more than a decades worth of experience in the design industry.'
  }
}

const trabajo = () => {
  return (
    <Content>
      <h1>
        Trabajo
      </h1>

    </Content>
  )
}

export default trabajo;