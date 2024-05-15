import { useRouter } from 'next/router'
import PropTypes from 'prop-types';
import clsx from 'clsx';
import { twMerge } from 'tailwind-merge'

const Container = ({ className, children }) => {

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

  const classes = twMerge(
    clsx(
      `${pageColor}`,
      'flex flex-col basis-full overflow-hidden',
    ),
    className
  );

  return (
    <>
      <main className={classes}>
        <div className='pb-10 pt-8 px-16'>
          {children}
        </div>
      </main>
    </>
  )
}

Container.propTypes = {
  /**
     * Additional CSS classes that can be passed via consumer.
     * Any Tailwind classes will be merged with and override the default classes.
     */
   className: PropTypes.string,
}
export default Container;