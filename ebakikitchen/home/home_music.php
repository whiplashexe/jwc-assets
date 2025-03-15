<!-- MUSIC -->
<style>
  #__music-root {
    font-family: var(--primtext), serif;
    background-color: var(--colors);
    padding-top: 4.5rem;
    padding-bottom: 4.5rem;
    overflow: hidden;
  }
  #__music-root .wrapper {
    width: 100%;
    display: grid;
    gap: 4rem;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(2, max-content);
  }
  #__music-root .description-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    gap: 1.5rem;
}
  #__music-root .desc-header {
    display: flex;
    gap: 1rem;
    width: 45%;
    justify-content: start;
    align-items: center;
  }
  #__music-root .highlight {
    font-size: 18px;
    font-weight: 500;
    color: white;
    white-space: nowrap;
}
  #__music-root .line {
    flex: 1;
    height: .2rem;
    border-radius: 999em;
    background-color: white;
  }
  #__music-root .title {
    text-transform: uppercase;
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
  }
  #__music-root .subtitle {
    color: #f1f1f1;
    font-size: 15px;
    line-height: 28px;
}
  #__music-root .actions-schedule {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
  }
  #__music-root .schedule {
    display: flex;
  }
  #__music-root .schedule .day, #__music-root .schedule .time {
    padding-top: .6rem !important;
    padding-bottom: .6rem !important;
    color: white;
  }
  #__music-root .schedule .day {
    border-left: 2px solid white;
    border-top: 2px solid white;
    border-bottom: 2px solid white;
    padding-left: 1rem !important;
    padding-right: .6rem !important;
    border-radius: 999em 0 0 999em;
  }
  #__music-root .schedule .time {
    border: 2px solid white;
    padding-right: 1rem !important;
    padding-left: .6rem !important;
    border-radius: 0 999em 999em 0;
  }
  #__music-root .actions-schedule .button {
    padding: .6rem 1rem !important;
    color: var(--colors);
    background-color: white;
    border-radius: 999em;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all ease 500ms;
  }

  #__music-root .actions-schedule .button:hover {
  	background-color: black;
  	color: white;
  }

  #__music-root .image-wrapper {
    position: relative;
    height: 500px;
  }
  #__music-root .image-wrapper > .image {
    position: absolute;
    width: 60%;
    height: 80%;
    object-fit: cover;
    border-radius: 2rem;
  }
  #__music-root .image-wrapper .image-1 {
    right: 0;
    top: 0;
    border: 5px solid white;
  }
  #__music-root .image-wrapper .image-2 {
    left: 0;
    bottom: 0;
    border: 5px solid white;
  }
  @media (min-width: 768px) {
    #__music-root .title {
        font-size: 35px;
        line-height: 45px;
        letter-spacing: 0px;
    }

    #__music-root .wrapper {
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }
  }
  @media (min-width: 1280px) {
    #__music-root .wrapper {
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }
    #__music-root {
      padding-top: 6rem;
      padding-bottom: 6rem;
    }
  }

@media (max-width: 768px) {
  #__music-root .image-wrapper {
      height: 300px;
  }

  #__music-root .highlight {
    font-size: 15px;
    font-weight: 500;
  }

  #__music-root .desc-header {
    gap: 1rem;
    width: 75%;
  }

  #__music-root .title {
      text-transform: uppercase;
      font-size: 1.5rem;
      line-height: 35px;
      letter-spacing: 0px;
  }

  #__music-root .subtitle { font-size:14px; }

  #__music-root .actions-schedule .button { width:100%; }
}
</style>
<section id="__music-root">
  <div class="wrapper container-global">
    <div class="image-wrapper">
      <img class="image image-2" src="https://jwc.gotra-resources.my.id/web-upload/1740421744-25-02-2025-uDl6MFnKjkb2cGeQVC7vrmWNaY5soqTf.webp" alt="cover">
      <img class="image image-1" src="https://jwc.gotra-resources.my.id/web-upload/1740217778-22-02-2025-4N5wfnWhmJcbkXEBRqjPDQTZ26O9yUF8.webp" alt="cover">
    </div>
    <div class="description-wrapper">
      <div class="desc-header">
        <p class="highlight p-0 m-0">Feel the Rhythm</p>
        <div class="line"></div>
      </div>
      <h3 class="title p-0 m-0">E-Baki Live Music<br>Every Friday Night</h3>
      <p class="subtitle p-0 m-0">Enjoy soulful live performances every Friday at E-Baki Kitchen & Music. Experience a night of great music, delicious food, and a cozy ambiance.</p>
      <div class="actions-schedule">
        <div class="schedule">
          <p class="day p-0 m-0">Every Friday</p>
          <p class="time p-0 m-0">7:00 PM - 10:00 PM</p>
        </div>
        <a class="button" href="<?= $func->dm_whatsapp() ?>">Reserve Your Spot <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
  </div>
</section>
<script>
  const _music_line = document.querySelector("#__music-root .line")
  const _music_image_1 = document.querySelector("#__music-root .image-wrapper .image-1")
  const _music_image_2 = document.querySelector("#__music-root .image-wrapper .image-2")
  inView(_music_line, (element) => {
    animate(element, {flex: [0, 1]}, {ease: "anticipate", duration: 2})
    return () => {
      animate(element, {flex: [1, 0]}, {ease: "anticipate", duration: 2})
    }
  })
  inView(_music_image_1, (element) => {
    const animation = animate(
      _music_image_1,
      { transform: ["translateY(-200px)", "translateY(200px)"] },
      { ease: "linear" }
    )
    scroll(animation)
  })
  inView(_music_image_2, (element) => {
    const animation = animate(
      _music_image_2,
      { transform: ["translateY(-100px)", "translateY(30px)"] },
      { ease: "linear" }
    )
    scroll(animation)
  })
</script>