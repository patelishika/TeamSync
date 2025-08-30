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
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(60px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeUpScale: {
          '0%': { opacity: '0', transform: 'translateY(100px) scale(0.8)' },
          '100%': { opacity: '1', transform: 'translateY(0) scale(1)' },
        },
      },
      animation: {
        slideDown: 'slideDown 0.6s ease-out forwards',
        fadeInUp: 'fadeInUp 0.6s ease-out 0.6s forwards',
        fadeUpScale: 'fadeUpScale 0.8s ease-out 0.3s forwards',
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.hidden-before': {
          opacity: '0',
          transform: 'translateY(60px)',
        },
      });
    },
  ],
};
