/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "404.php",
    "footer.php",
    "front-page.php",
    "header.php",
    "index.php",
    "page.php",
    "page-ml-macchine.php",
    "page-contatti.php",
    "archive-mele.php",
    "archive-uva.php",
    "single-mele.php",
    "single-uva.php",
    "template-parts/testimonianze.php",
    "template-parts/releated-post-uva.php",
    "template-parts/releated-post-mela.php",
    "template-parts/repeater-uva.php",
    "template-parts/repeater-mele.php",
  ],
  theme: {
    fontFamily: {
      'primary': ['Paralucent', 'system-ui'],
      'secondary': ['Anybody', 'system-ui']
    },
    extend: {
      screens: {
        '3xl': '1920px',
      },
    },
  },
  plugins: [],
}

