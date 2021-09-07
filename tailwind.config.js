const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            boxShadow: {
                "xs": '0 6px 12px rgba(0,0,0,.030);',
                "2xs": '0 6px 12px rgba(0,0,0,.055);',
            },
            // borderColor: theme => ({
            //     DEFAULT: theme('colors.gray.100', 'currentColor'),
            // }),
            fontSize: {
                '2xs': ['.65rem', '0.75rem'],
            },
            backgroundOpacity: {
                '4': '0.04',
                '3': '0.03',
                '2': '0.02',
                '1': '0.01',
                '05': '0.005',
            },
            colors: {
                gray: colors.gray,
            }
        }
    },
    variants: {
        extend: {
            ringWidth: ['hover'],
            ringOpacity: ['hover'],
            ringColor: ['hover'],
            animation: ['hover'],
        },
    },
    plugins: [],
}
