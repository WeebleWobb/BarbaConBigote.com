import { ReactNode } from 'react'
import Link from 'next/link'

type NavItemProps = {
  page: {
    id: number;
    link: string;
    icon: ReactNode;
    tooltip: string;
  };
  isActive: boolean;
}

export default function NavItem({ page, isActive }: NavItemProps) {
  return (
    <li className='flex flex-col group items-center my-1 mx-5 relative rounded-md w-full sm:mx-7 md:block md:duration-200 md:ease-in md:transition-colors md:mt-0 md:mx-0 md:mb-6 md:hover:bg-orange'>
      <Link 
        href={page.link}
        className={`block rounded-md w-10 ${isActive ? 'bg-orange' : ''}`}
        aria-current={isActive ? 'page' : undefined}
        aria-label={page.tooltip}
      >
        {page.icon}
      </Link>
      <span 
        className='block font-semibold font-sm py-0.5 px-1.5 rounded-md text-brown transition md:absolute md:bg-brown md:duration-400 md:ease-[cubic-bezier(0.16, 1, 0.3, 1)] md:font-normal md:opacity-0 md:rounded-r-lg md:rounded-l-full md:text-white md:top-1.5 md:translate-x-4 md:group-hover:opacity-100 md:group-hover:translate-x-12'
        role="tooltip" 
        id={`tooltip-${page.id}`}
      >
        {page.tooltip}
      </span>
    </li>
  )
} 