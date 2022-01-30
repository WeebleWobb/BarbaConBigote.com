import Head from 'next/head'
import Layout from '../components/layout'
import Nav from '../components/nav'
import Container from '../components/container'

export default function Home() {
  return (
    <Layout>
      <Head>
        <title>Juan D. Bolaños | Barba con Bigote</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Nav></Nav>
      
      <Container>
        <h1 className='text-3xl'>
          Barba con Bigote Redesign
        </h1>

      </Container>
    </Layout>
  )
}
