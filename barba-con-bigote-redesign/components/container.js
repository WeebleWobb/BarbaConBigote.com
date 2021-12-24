import styles from '../styles/container.module.scss'
import { useRouter } from 'next/router'

export default function Container({ children }) {

  const router = useRouter();
  let className = children.props.className || ''

  if (router.pathname === '/trabajo') {
    className = styles['main-container--dribbble']
  }

  return (
    <>
      <main className = {styles['main-container'] + ' ' + className}>
        {children}
      </main>
    </>
  )
}