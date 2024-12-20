"use client"

import Link from 'next/link'
import Image from 'next/image'
import { usePathname } from 'next/navigation'
import Home from '../icons/home'
import Trabajo from '../icons/trabajo'
import Cerveza from '../icons/cerveza'
import Musica from '../icons/musica'
import NavItem from './nav-item'

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
          <NavItem 
            key={page.id}
            page={page}
            isActive={pathname === page.link}
          />
        ))}
      </ul>
      {/* ... social links section */}
    </nav>
  )
} 