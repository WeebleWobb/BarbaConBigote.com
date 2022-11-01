import clsx from 'clsx';
import React from 'react'
import Link from 'next/link'
import { useRouter } from 'next/router'

export default ({ href, children}) => {
  const router = useRouter();
  
  const isActive = router.pathname === href
  const className = clsx('block rounded-md w-10', isActive && 'bg-orange');

  return(
    <Link 
      href={href} 
      className={className}
    >
      {React.cloneElement(children, {className})}
    </Link>
  );
}