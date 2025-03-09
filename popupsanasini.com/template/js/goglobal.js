document.addEventListener("DOMContentLoaded", function () {
  const articles = document.querySelectorAll("#_goglobal-root ._goglobal-card-desktop");
  articles.forEach(article => {
    article.addEventListener("click", function () {
      articles.forEach(a => a.classList.remove("_goglobal-card-desktop-active"));
      this.classList.add("_goglobal-card-desktop-active");
    });
    article.addEventListener("mouseenter", function () {
      articles.forEach(a => a.classList.remove("_goglobal-card-desktop-active"));
      this.classList.add("_goglobal-card-desktop-active");
    });
  });
})