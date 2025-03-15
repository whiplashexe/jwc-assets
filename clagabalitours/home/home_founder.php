<!-- FOUNDER -->

<style>
#__founder-root {
  position: relative;
  font-family: var(--primtext);
  width: 100%;
  background-color: var(--colors);
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__founder-root .wrapper {
  z-index: 2;
  width: 100%;
  margin: 6rem 7%;
  gap: 1.5rem;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-areas: "title" "image" "description";
  grid-template-rows: repeat(3, auto);
  gap: 4rem;
}
@media (min-width: 48rem) {
  #__founder-root .wrapper {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto 1fr;
    grid-template-areas: "image title" "image description";
  }
}
#__founder-root .wrapper * {
  padding: 0;
  margin: 0;
}
#__founder-root .wrapper .image-wrapper {
  grid-area: image;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__founder-root .wrapper .image-wrapper .image {
  width: 80%;
}
@media (min-width: 48rem) {
  #__founder-root .wrapper .image-wrapper .image {
    width: 320px;
  }
}
#__founder-root .wrapper .title-wrapper {
  grid-area: title;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
@media (min-width: 48rem) {
  #__founder-root .wrapper .title-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: center;
  }
}
#__founder-root .wrapper .title-wrapper .title {
    font-size: 30px;
    letter-spacing: 0.1rem;
    line-height: 40px;
    text-transform: capitalize;
    font-weight: 600;
    color: white;
}
#__founder-root .wrapper .description-wrapper {
  grid-area: description;
}
#__founder-root .wrapper .description-wrapper .description {
    font-size: 17px;
    letter-spacing: 0px;
    color: oklch(44.6% 0.03 256.802deg);
    line-height: 31px;
    color: white;
}
#__founder-root .pattern-image {
  z-index: 1;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.06;
}

@media (max-width: 768px) {
  #__founder-root .wrapper .description-wrapper .description {
    font-size: 15px;
    line-height: 29px;
  }

  #__founder-root .wrapper .title-wrapper .title { font-size:27px; }

  #__founder-root .pattern-image {
      height: 30%;
      opacity: 0.06;
      bottom: unset;
      top: 0;
  }
}
</style>

<section id="__founder-root">
  <div class="wrapper">
    <div class="image-wrapper">
      <img
        class="image"
        src="https://jwc.gotra-resources.my.id/web-upload/1741940958-14-03-2025-rlsAy0KwuPpxdRS3mXgGoatckfCE8QZL.webp"
        alt="owner-image"
      />
    </div>
    <div class="title-wrapper">
      <h2 class="title">FOUNDER</h2>
    </div>
    <div class="description-wrapper">
      <p class="description">
        Experience the magic of Bali with Claga Bali Tours. We are a
        dedicated tour management company based in the heart of Bali,
        passionate about curating unforgettable travel experiences for
        discerning travelers. Whether you seek adventure, relaxation,
        cultural immersion, or a blend of all three, our expert team will
        tailor a bespoke itinerary to your individual preferences. From
        exploring ancient temples and pristine beaches to indulging in local
        cuisine and experiencing authentic Balinese traditions, we ensure
        every moment of your journey is truly extraordinary.
      </p>
    </div>
  </div>
  <img
    class="pattern-image"
    src="https://jwc.gotra-resources.my.id/web-upload/1740725827-28-02-2025-9gRYmMuZTN4PvSXC28nHJl7wkEyiVL3t.webp"
    alt="pattern image"
  />
</section>

<!-- BUTTON -->
<style>
#__button-root {
  font-family: var(--primtext);
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__button-root .wrapper {
  width: 100%;
  margin: 4rem 7%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__button-root .wrapper .button {
    padding: 2rem;
    background-color: var(--colors);
    color: white;
    font-weight: 600;
    border-radius: 1rem;
    font-size: 25px;
    transition: all ease 500ms;
}

#__button-root .wrapper .button:hover {
  background-color: black;
  color: white;
}

#__button-root .wrapper a {
  text-decoration: none;
}
</style>

<section id="__button-root">
  <div class="wrapper">
    <a class="button" href="">Personal Planer</a>
  </div>
</section>