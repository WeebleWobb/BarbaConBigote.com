import { useRouter } from 'next/router'
import clsx from 'clsx';

export default function Container({ children }) {

  const router = useRouter();
  let  pageColor;

  if (router.pathname === '/trabajo') {
    pageColor = 'bg-dribble-pink';
  } else if (router .pathname === '/cerveza') {
    pageColor = 'bg-cerveza-crema';
  } else if (router .pathname === '/musica') {
    pageColor = 'bg-spotify-black';
  } else {
    pageColor = 'bg-red';
  }

  return (
    <>
      <main className={clsx(
        `${pageColor}`,
        'flex flex-col basis-full content-between pb-10 pt-8 px-16'
      )}>
        {children}
      </main>
    </>
  )
}