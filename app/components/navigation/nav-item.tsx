import { ReactNode } from 'react'
import Link from 'next/link'

type NavItemProps = {
  pages: {
    link: string;
    icon: ReactNode;
    tooltip: string;
  }
}

const NavItem = ({ pages }: NavItemProps) => {
  return(
    <li className='block group rounded-lg my-1 mx-5 relative w-10 sm:mx-7 md:duration-200 md:ease-in md:transition-colors md:mt-0 md:mx-0 md:mb-6 md:hover:bg-orange'>
      <Link href={pages.link}>
        {pages.icon}
      </Link>
      <div 
        className='block bg-brown rounded-sm text-white font-sm py-0.5 px-1.5 transition md:absolute md:duration-600 md:ease-[cubic-bezier(0.16, 1, 0.3, 1)] md:opacity-0 md:rounded-r-lg md:rounded-l-full md:top-1.5 md:translate-x-4 md:group-hover:opacity-1 md:group-hover:translate-x-12'
        role="tooltip" 
      >
        {pages.tooltip}
      </div>
    </li>
  )
}

export default NavItem 