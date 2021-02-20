import Head from 'next/head'
import Layout from '../components/layout'
import Nav from '../components/nav'
import Content from '../components/content'

export default function Home() {
  return (
    <Layout>
      <Head>
        <title>Juan D. Bolaños | Barba con Bigote</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Nav></Nav>
      
      <Content>
        <h1>
          Barba con Bigote Redesign
        </h1>

      </Content>
    </Layout>
  )
}
