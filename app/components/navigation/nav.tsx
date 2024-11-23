"use client"

import Link from 'next/link'
import Image from 'next/image'
import { usePathname } from 'next/navigation'
import Home from '../icons/home'
import Trabajo from '../icons/trabajo'
import Cerveza from '../icons/cerveza'
import Musica from '../icons/musica'

export default function Nav() {
  const pathname = usePathname()

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
      id: 5,
      icon: <Image src="/svgs/instagram.svg" width={18} height={18} alt="Instagram"/>,
      link: 'https://www.instagram.com/weeblewobb/',
    },
    // ... other social links
  ]

  return (
    <nav className='bg-grey border-brown border-solid border-t-4 flex flex-row justify-center order-1 md:border-t-0 md:border-r-4 md:flex-col md:justify-between md:order-none md:px-4 md:pt-10 md:pb-3 md:max-w-7xl'>
      <ul className='flex list-none m-0 p-0 md:flex-col'>
        {navLinks.map(page => (
          <li key={page.id} className='flex flex-col group items-center my-1 mx-5 relative rounded-md w-full sm:mx-7 md:block md:duration-200 md:ease-in md:transition-colors md:mt-0 md:mx-0 md:mb-6 md:hover:bg-orange'>
            <Link 
              href={page.link}
              className={`block rounded-md w-10 ${pathname === page.link ? 'bg-orange' : ''}`}
            >
              {page.icon}
            </Link>
            <div 
              className='block font-semibold font-sm py-0.5 px-1.5 rounded-md text-brown transition md:absolute md:bg-brown md:duration-400 md:ease-[cubic-bezier(0.16, 1, 0.3, 1)] md:font-normal md:opacity-0 md:rounded-r-lg md:rounded-l-full md:text-white md:top-1.5 md:translate-x-4 md:group-hover:opacity-100 md:group-hover:translate-x-12'
              role="tooltip" 
            >
              {page.tooltip}
            </div>
          </li>
        ))}
      </ul>
      {/* ... social links section */}
    </nav>
  )
} 