
const heroOverlay1 = document.querySelector('#_hero ._hero-image-overlay-animate-1')
const heroOverlay2 = document.querySelector('#_hero ._hero-image-overlay-animate-2')
const heroImage1 = document.querySelector('#_hero ._hero-image-1 img')
const heroImage2 = document.querySelector('#_hero ._hero-image-2 img')
const heroTitle = document.querySelector('#_hero ._hero-title')
const heroSubtitle = document.querySelector('#_hero ._hero-subtitle')

animate(heroOverlay1, { height: ["100%", 0]}, { duration: 2, ease: "anticipate", delay: 0.2 })
animate(heroOverlay2, { height: ["100%", 0]}, { duration: 2, ease: "anticipate", delay: 0.2 })
animate(heroTitle, { y: ["100%", 0]}, { duration: 2, delay: 1, ease: "anticipate" })
animate(heroSubtitle, { y: ["100%", 0]}, { duration: 2, delay: 1, ease: "anticipate" })
