/** @type {import('tailwindcss').Config} */
export default {
  content: ['./app/**/*.{html,js,php}'],
  theme: {
    extend: {
      keyframes: {
        slideDown: {
          '0%': { opacity: '0', transform: 'translateY(-100px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
      animation: {
        slideDown: 'slideDown 0.6s ease-out forwards',
      },
    },
  },
  plugins: [],
};
