module.exports = {
  mode: 'jit',   
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#ec4899',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}