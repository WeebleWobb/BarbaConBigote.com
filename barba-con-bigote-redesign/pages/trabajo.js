import Head from 'next/head'
import Layout from '../components/layout'
import Nav from '../components/nav'

export default function Home() {
  return (
    <Layout>
      <Head>
        <title>Barba con Bigote | Cerveza</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <Nav></Nav>
      
      <main >
        <h1 >
          Trabajo
        </h1>

      </main>
    </Layout>
  )
}
