module.exports = {
    purge: [
        './src/**/*.html',
        './src/**/*.js',
        './src/**/*.vue',
        './src/**/*.jsx',
    ],
    plugins: [
        require('tailwindcss'),
    ],
}