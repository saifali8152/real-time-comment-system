const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
     './storage/framework/views/*.php',
     './resources/views/**/*.blade.php',
  ],
  darkMode: false,
  theme: {
    extend: {
      lineClamp: {
        3: '3',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}

