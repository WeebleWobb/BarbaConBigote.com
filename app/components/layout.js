export default function Layout({ children }) {
  return <div className='flex flex-col md:flex-row justify-between md:justify-start h-screen'>
    {children}
  </div>
}