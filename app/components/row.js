import styles from '../styles/components/row.module.scss'


export default function Row({ children }) {
  return (
    <>
      <div className = 'flex flex-row'>
        {children}
      </div>
    </>
  )
}