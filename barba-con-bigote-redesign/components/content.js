import styles from '../styles/content.module.scss'
import { useRouter } from 'next/router'

export default function Content({ children }) {

  const router = useRouter();
  let className = children.props.className || ''

  if (router.pathname === '/trabajo') {
    className = styles['main-content--dribbble']
  }

  return (
    <>
      <main className = {styles['main-content'] + ' ' + className}>
        {children}
      </main>
    </>
  )
}