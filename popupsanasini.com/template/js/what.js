const whatTitle = document.querySelector("#_what-root ._what-title")
const whatTitleImage = document.querySelector("#_what-root ._what-title-image")

inView(whatTitle, (element) => {
  animate(element, { y: ["100%", 0] }, { ease: "anticipate", duration: 1.5 })
})

// inView(whatTitleImage, (element) => {
//   animate(element, { y: ["100%", 0] }, { ease: "anticipate", duration: 1.5 })
// })