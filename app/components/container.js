import { useRouter } from 'next/router'

export default function Container({ children }) {

  const router = useRouter();
  let pageColor = 'red';

  if (router.pathname === '/trabajo') {
    pageColor = 'dribbble';
  } if (router .pathname === '/cerveza') {
    pageColor = 'cerveza';
  } if (router .pathname === '/musica') {
    pageColor = 'musica';
  }

  return (
    <>
      <main className={`bg-${pageColor} flex flex-row basis-full content-between pb-10 pt-8 px-16`}>
        {children}
      </main>
    </>
  )
}