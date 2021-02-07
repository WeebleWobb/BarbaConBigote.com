import Link from 'next/link'

export default function cerveza() {
  return (
    <>
      <h1>Cerveza</h1>
      <Link href="/">
        <a>Back home</a>
      </Link>
    </>
  )
}