import Head from 'next/head'
import Layout from '../components/layout'
import Nav from '../components/navigation/nav'
import Content from '../components/grid/container'

export default function Home() {
  return (
    <Layout>
      <Head>
        <title>Barba con Bigote | Cerveza</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Nav></Nav>
      
      <Content>
        <h1>
          Cerveza
        </h1>

      </Content>
    </Layout>
  )
}
