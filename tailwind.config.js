import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                'parts-sm': 'minmax(9em, 30%) 1fr',
                'parts-md': '2em 2em 10fr 2fr 2fr 2fr 2fr 5em 5em',
                'parts-lg': 'repeat(auto-fit, minmax(var(--column-width-min), 1fr))',
},
        },
    },

    plugins: [forms],
};
