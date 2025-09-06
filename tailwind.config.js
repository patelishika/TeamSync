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
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        'fade-up': {
          '0%': { opacity: '0', transform: 'translateY(50px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(50px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideLeft: {
          '0%': { opacity: '0', transform: 'translateX(-50px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        slideRight: {
          '0%': { opacity: '0', transform: 'translateX(50px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        faqslidedown: {
          '0%': { opacity: '0', transform: 'translateY(-10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
      animation: {
        slideDown: 'slideDown 0.6s ease-out forwards',
        fadeInUp: 'fadeInUp 0.6s ease-out 0.6s forwards',
        fadeUpScale: 'fadeUpScale 0.8s ease-out 0.3s forwards',
        marquee: 'marquee 40s linear infinite',
        fadeUp: 'fadeUp 0.6s ease-out forwards',
        slideLeft: 'slideLeft 0.6s ease-out forwards',
        slideRight: 'slideRight 0.6s ease-out forwards',
        faqslidedown: 'faqslidedown 0.3s ease-out forwards',
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
