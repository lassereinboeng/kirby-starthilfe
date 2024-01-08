/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{js,ts,css}', './site/**/*/*.php'],
  theme: {},
  plugins: [require('@tailwindcss/typography')],
}
