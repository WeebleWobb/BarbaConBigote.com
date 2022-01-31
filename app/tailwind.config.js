module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx}",    
    "./components/**/*.{js,ts,jsx,tsx}"
  ],
  theme: {
    colors: {
      'brown': '#3F2016',
      'grey': '#EFEFEF',
      'orange': '#F79425',
      'red': '#D54935',
      'white': '#ffffff'
    },
    fontFamily: {
      sans: ['Signika Negative', 'Helvetica Neue', 'sans-serif']
    },
    extend: {
      fontSize: {
        '3xl': '2rem'
      },
    },
  },
  plugins: [],
}
