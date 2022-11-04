export default function Layout({ children }) {
  return <div className='flex flex-col md:flex-row justify-between md:justify-start min-h-screen'>
    {children}
  </div>
}