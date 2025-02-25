"use client"

import { ReactNode } from 'react'
import { usePathname } from 'next/navigation'
import { twMerge } from 'tailwind-merge'
import clsx from 'clsx'

type ContainerProps = {
  className?: string;
  children: ReactNode;
}

const Container = ({ className = '', children }: ContainerProps) => {
  const pathname = usePathname()
  
  const getPageColor = () => {
    switch(pathname) {
      case '/trabajo':
        return 'bg-dribble-pink'
      case '/cerveza':
        return 'bg-cerveza-crema'
      case '/musica':
        return 'bg-spotify-black'
      default:
        return 'bg-red'
    }
  }

  const classes = twMerge(
    clsx(
      getPageColor(),
      'basis-full flex items-start overflow-hidden lg:items-center',
    ),
    className
  )

  return (
    <main className={classes}>
      <div className='pb-10 pt-8 px-16 sm:flex-auto'>
        {children}
      </div>
    </main>
  )
}

export default Container 