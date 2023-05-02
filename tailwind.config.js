const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'black-primary': '#171717',
                'black-secondary': '#1e1e1e',
                'custom-blue': '#8bc3eb',
                'custom-purple': '#949be2',
                'custom-gray': '#767676',
                'custom-white': '#fefdfb',
                'blue-neuuni': '#0047BB',
                'blue-business-neuuni': '#0c2b5e',
                'green-neuuni': '#3AE9D6',
                'red-neuuni': '#FF4A5C',
                'orange-neuuni': '#FFB229',
                'purple-neuuni': '#7748AF',
                'yellow-neuuni': '#FFE700',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
