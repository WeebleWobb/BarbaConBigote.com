/** @type {import('next').NextConfig} */
const nextConfig = {
  images: {
    domains: ['via.placeholder.com'],
  },
  sassOptions: {
    includePaths: ['./src/app/styles'],
  }
}

module.exports = nextConfig 