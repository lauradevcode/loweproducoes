import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import flowbite from 'flowbite/plugin';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wire-elements/modal/resources/views/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],
    safelist: [
        'text-red-700',
        'border-red-700',
        'text-green-700',
        'border-green-700',
        'bg-yellow-200',
        'bg-cerise-red-500',
        'bg-celery-500',
        'bg-affair-500',
        'bg-shakespeare-500',
        'z-[100]',
        'p-2',
        'sm:max-w-sm',
        'sm:max-w-md',
        'sm:max-w-md md:max-w-lg',
        'sm:max-w-md md:max-w-xl',
        'sm:max-w-md md:max-w-xl lg:max-w-2xl',
        'sm:max-w-md md:max-w-xl lg:max-w-3xl',
        'sm:max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-4xl',
        'sm:max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-5xl',
        'sm:max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-5xl 2xl:max-w-6xl',
        'sm:max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-5xl 2xl:max-w-7xl',
    ],
    theme: {
        extend: {
            gridTemplateRows: {
                // Simple 8 row grid
                '8': 'repeat(8, minmax(0, 1fr))',

                // Complex site-specific row configuration
                'layout': '5rem minmax(0, 1fr)',
                'hall': '80px minmax(0, 1fr)',
                'chat-message-full': '76px calc(100% - 76px)',
                'chat': 'minmax(0, 1fr) 42px',
                'chat-mobile': '42px 200px',
                'course': '73px calc(100% - 125px) 52px',
                'checkin-full': '160px calc(100vh - 184px)',
                'present-full': '160px calc(100vh - 184px)',
            },
            gridTemplateColumns: {
                'checkin-title': 'auto calc(100% - 48rem) auto',
                'chat-message': 'minmax(0,1fr) 120px'
            },
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
            },
            rotate: {
                '-1': '-1deg',
                '-2': '-2deg',
                '-3': '-3deg',
                '1': '1',
                '2': '2deg',
                '3': '3deg',
            },
            borderRadius: {
                'xl': '0.8rem',
                'xxl': '1rem',
            },
            height: {
                '1/2': '0.125rem',
                '2/3': '0.1875rem',
            },
            maxHeight: {
                '16': '16rem',
                '20': '20rem',
                '24': '24rem',
                '32': '32rem',
            },
            inset: {
                '1/2': '50%',
            },
            width: {
                '96': '24rem',
                '104': '26rem',
                '128': '32rem',
            },
            transitionDelay: {
                '450': '450ms',
            },
            colors: {
                'primary': {
                    DEFAULT: 'var(--color-primary-50, #FFAB00)',
                    50: 'var(--color-primary-50, #FFAB00)',
                    100: 'var(--color-primary-100, #FFE7B8)',
                    200: 'var(--color-primary-200, #FFE1A3)',
                    300: 'var(--color-primary-300, #FFD37A)',
                    400: 'var(--color-primary-400, #FFC652)',
                    500: 'var(--color-primary-500, #FFB829)',
                    600: 'var(--color-primary-600, #FFAB00)',
                    700: 'var(--color-primary-700, #C78500)',
                    800: 'var(--color-primary-800, #8F6000)',
                    900: 'var(--color-primary-900, #573A00)',
                },
                'wave': {
                    DEFAULT: '#0069FF',
                    50: '#F2F8FF',
                    100: '#E6F0FF',
                    200: '#BFDAFF',
                    300: '#99C3FF',
                    400: '#4D96FF',
                    500: '#0069FF',
                    600: '#005FE6',
                    700: '#003F99',
                    800: '#002F73',
                    900: '#00204D',
                },
                'web-orange': {
                    DEFAULT: '#FFAB00',
                    '50': '#FFE7B8',
                    '100': '#FFE1A3',
                    '200': '#FFD37A',
                    '300': '#FFC652',
                    '400': '#FFB829',
                    '500': '#FFAB00',
                    '600': '#C78500',
                    '700': '#8F6000',
                    '800': '#573A00',
                    '900': '#1F1500'
                },
                'portage': {
                    DEFAULT: '#889CE7',
                    50: '#FFFFFF',
                    100: '#FFFFFF',
                    200: '#EEF1FC',
                    300: '#CCD4F5',
                    400: '#AAB8EE',
                    500: '#889CE7',
                    600: '#5975DE',
                    700: '#2B4ED4',
                    800: '#213DA5',
                    900: '#182C77',
                    950: '#13235F'
                },
            }
        }
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        flowbite,
        aspectRatio,
        forms,
        typography
    ],
};
