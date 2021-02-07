import Head from 'next/head'
import Link from 'next/link'
import Layout from '../components/layout'
import styles from '../styles/layout.module.css'

export default function Home() {
  return (
    <Layout>
      <Head>
        <title>Create Next App</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <nav>
        <ul>
          <li>
            <Link href="/">
              <a>Home</a>
            </Link>
          </li>
          <li>
            <Link href="/cerveza">
              <a>Cerveza</a>
            </Link>
          </li>
          <li>
            <Link href="/trabajo">
              <a>Trabajo</a>
            </Link>
          </li>
          <li>
            <Link href="/musica">
              <a>Musica</a>
            </Link>
          </li>
        </ul>
      </nav>
      
      <main className={styles.main}>
        <h1 className={styles.title}>
          Barba con Bigote Redesign
        </h1>

      </main>
    </Layout>
  )
}
