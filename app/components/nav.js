import Link from '../components/link'
import Image from 'next/image'
import Home from './icons/home'
import Trabajo from './icons/trabajo'
import Cerveza from './icons/cerveza'
import Musica from './icons/musica'

export default function Nav() {

  const navLinks = [
    {
      id: 1,
      icon: <Home />,
      link: '/',
      tooltip: 'Casa'
    },
    {
      id: 2,
      icon: <Trabajo />,
      link: '/trabajo',
      tooltip: 'Trabajo'
    },
    {
      id: 3,
      icon: <Cerveza />,
      link: '/cerveza',
      tooltip: 'Cerveza',
    },
    {
      id: 4,
      icon: <Musica />,
      link: '/musica',
      tooltip: 'Musica',
    },
  ]

  const socialLinks = [
    {
      id: 1,
      icon: <Image src="/svgs/instagram.svg" width={18} height={18} alt="Instagram"/>,
      link: 'https://www.instagram.com/weeblewobb/',
    },
    {
      id: 2,
      icon: <Image src="/svgs/medium.svg" width={18} height={18} alt="Medium"/>,
      link: 'https://medium.com/@bolanosjd',
    },
    {
      id: 3,
      icon: <Image src="/svgs/linkedin.svg" width={18} height={18} alt="LinkedIn"/>,
      link: 'https://www.linkedin.com/in/bolanosjd/',
    },
    {
      id: 4,
      icon: <Image src="/svgs/github.svg" width={18} height={18} alt="Github"/>,
      link: 'https://github.com/WeebleWobb',
    },
    {
      id: 5,
      icon: <Image src="/svgs/behance.svg" width={18} height={18} alt="Behance"/>,
      link: 'https://www.behance.net/BarbaConBigote'
    },
    {
      id: 6,
      icon: <Image src="/svgs/dribbble.svg" width={18} height={18} alt="Dribbble"/>,
      link: 'https://dribbble.com/WeebleWobb'
    }
  ]

  return (
    <>
      <nav className='bg-grey border-brown border-solid border-t-4 flex flex-row justify-center order-1 md:border-t-0 md:border-r-4 md:flex-col md:justify-between md:order-none md:px-4 md:pt-12 md:pb-1 md:max-w-7xl'>
        <ul className='flex list-none m-0 p-0 md:flex-col'>
          {navLinks.map(pages => {
            return(
              <li className='block group rounded-lg my-1 mx-5 relative w-10 sm:mx-7 md:duration-200 md:ease-in md:transition-colors md:mt-0 md:mx-0 md:mb-6 md:hover:bg-orange'>
                <Link href={pages.link}>
                  <a>
                    {pages.icon}
                  </a>
                </Link>
                <div role="tooltip" className='block bg-brown rounded-sm text-white font-sm py-0.5 px-1.5 transition md:absolute md:duration-600 md:ease-[cubic-bezier(0.16, 1, 0.3, 1)] md:opacity-0 md:rounded-r-lg md:rounded-l-full md:top-1.5 md:translate-x-4 md:group-hover:opacity-1 md:group-hover:translate-x-12'>{pages.tooltip}</div>
              </li>
            )
          })}
        </ul>
        <ul className="hidden items-center list-none m-0 p-0 md:flex md:flex-col">
          {socialLinks.map(social => {
            return(
              <li className='mb-1.5'>
                <a href={social.link}>
                  {social.icon}
                </a>
              </li>
            )
          })}
        </ul>
      </nav>
    </>
  )
}