/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js}', './index.html'],
  darkMode: 'class',
  theme: {
    screens: {
      sm: '360px',
      // => @media (min-width: 640px) { ... }

      md: '640px',
      // => @media (min-width: 768px) { ... }

      lg: '1024px',
      // => @media (min-width: 1024px) { ... }

      xl: '1440px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1920px',

      // => @media (min-width: 1536px) { ... }
    },
    container: {
      // center: true,
      padding: {
        sm: '16px',
        md: '20px',
        lg: '40px',
        // xl: '200px',
        '2xl': '0px',
      },
    },

    extend: {
      colors: {
        brand: {
          default: '#E4C045',
          600: '#B78E00',
          900: '#785D00',
          400: '#EEF082',
        },
        grey: {
          default: '#7a7a7a',
          100: '#fcfcfc',
          200: '#f1f1f1',
          300: '#dadada',
          400: '#c1c1c1',
          500: '#7a7a7a',
          700: '#484848',
          800: '#2d2d2d',
          900: '#0e0e0e',
        },
        secondary: {
          default: '#d93726',
          100: '#f4c9c5',
          800: '#eb4d3d',
        },
        cta: {
          default: '#d93726',
          800: '#eb4d3d',
          400: '#C84A3D',
        },
      },
      textColor: (theme) => ({
        primary: theme('colors.grey.900'),
        secondary: theme('colors.grey.700'),
        invert: theme('colors.grey.100'),
        brand: theme('colors.brand.600'),
        'invert-secondary': theme('colors.grey.300'),
        'brand-invert': theme('colors.brand.default'),
        tertiary: theme('colors.grey.500'),
        'primary-dark': theme('colors.grey.100'),
        'secondary-dark': theme('colors.grey.300'),
        'invert-dark': theme('colors.grey.900'),
        'brand-dark': theme('colors.brand.default'),
        'invert-secondary-dark': theme('colors.grey.700'),
        'brand-invert-dark': theme('colors.brand.600'),
        'tertiary-dark': theme('colors.grey.500'),
      }),

      backgroundColor: (theme) => ({
        'surface-primary': theme('colors.grey.100'),
        'surface-secondary': theme('colors.grey.200'),
        'surface-brand': theme('colors.brand.default'),
        'surface-invert': theme('colors.grey.900'),
        'surface-invert-secondary': theme('colors.grey.800'),
        'surface-brand-secondary': '#1b2945',
        'surface-brand-inverted': theme('colors.brand.600'),
        'surface-brand-bg': theme('colors.brand.00'),
        'surface-tertiary': theme('colors.grey.300'),
        'surface-primary-dark': theme('colors.grey.900'),
        'surface-secondary-dark': theme('colors.grey.800'),
        'surface-brand-dark': theme('colors.brand.600'),
        'surface-invert-dark': theme('colors.grey.100'),
        'surface-invert-secondary-dark': theme('colors.grey.200'),
        'surface-brand-secondary-dark': '#1b2945',
        'surface-brand-inverted-dark': theme('colors.brand.default'),
        'surface-brand-bg-dark': theme('colors.brand.900'),
        'surface-tertiary-dark': theme('colors.grey.700'),
        'cta-default': theme('colors.secondary.default'),
        'cta-pressed': theme('colors.secondary.800'),
        'cta-default-dark': theme('colors.secondary.800'),
        'cta-pressed-dark': theme('colors.secondary.def'),
      }),
      stroke: (theme) => ({
        'stroke-1': theme('colors.grey.200'),
        'stroke-inverted': theme('colors.grey.800'),
        'stroke-2': theme('colors.grey.300'),
        'stroke-2-inverted': theme('colors.grey.700'),
      }),
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      fontSize: {
        title: ['48px'],
        heading1: ['36px'],
        heading2: ['36px'],
        mobileHeading2: ['24px'],
        heading3: ['20px'],
        heading3_mobile: ['18px'],
        subtitle: ['20px'],
        subtitle_mobile: ['16px'],
        subheading: ['18px'],
        subheading_mobile: ['14px'],
        button: ['14px'],
        normal: ['16px'],
        semibold: ['16px'],
        largeRegular: ['18px'],
        captionBig: ['14px'],
        captionSmall: ['12px'],
      },
      fontWeight: {
        title: 700,
        heading1: 600,
        heading2: 600,
        mobileHeading2: 700,
        heading3: 600,
        subtitle: 400,
        subtitle_mobile: 400,
        subheading: 400,
        subheading_mobile: 400,
        button: 600,
        normal: 400,
        semibold: 600,
        captionBig: 500,
        captionSmall: 400,
      },
      backgroundImage: {
        heroSectionGradient:
          'linear-gradient(to right, rgba(238, 238, 187, 0.5), rgba(212, 211, 220, 0.5))',
        otherSectionGradient:
          'linear-gradient(to right, rgba(238, 238, 187, 0.2), rgba(212, 211, 220, 0.2))',
      },
    },
  },
  variants: {
    extend: {
      textColor: ['dark'],
      backgroundColor: ['dark'],
    },
  },
  plugins: [],
};
