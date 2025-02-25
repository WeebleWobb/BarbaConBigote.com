import { ReactNode } from 'react'
import Link from 'next/link'

type NavItemProps = {
  page: {
    id: number;
    link: string;
    icon: ReactNode;
    text: string;
  };
  isActive: boolean;
}

export default function NavItem({ page, isActive }: NavItemProps) {
  return (
    <li className={`px-4 py-1 rounded-lg md:block md:duration-150 md:ease-in md:transition-colors md:hover:bg-orange sm:pl-2 sm:pr-3 ${isActive ? 'bg-orange' : ''}`}>
      <Link 
        href={page.link}
        className='flex flex-col items-center sm:flex-row sm:space-x-1'
        aria-current={isActive ? 'page' : undefined}
        aria-label={page.text}
      >
        <span className='w-8 h-8'>
          {page.icon}
        </span>
        <span className='font-orelega text-xl text-brown text-center md:mt-0.5'>
          {page.text}
        </span>
      </Link>
    </li>
  )
} 