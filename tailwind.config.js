/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily:{
        custom:['Poppins', 'sans-serif']
      },
    },
  },
  variants:{
    extend:{
      display:['group-focus']
    },
  },
  plugins: [],
}