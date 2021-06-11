let tailwindcss = require('tailwindcss');
module.exports = {
    purge: [
        './src/**/*.html',
        './src/**/*.js',
        './src/**/*.vue',
        './src/**/*.jsx',
    ],
    plugins: [
        tailwindcss('./tailwind.config.js')
    ],
}