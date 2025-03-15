<!-- ABOUT -->

<style>
#__about-root {
  position: relative;
  font-family: var(--primtext);
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__about-root .wrapper {
    z-index: 2;
    width: 100%;
    margin: 5rem 0%;
    gap: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#__about-root .wrapper * {
  padding: 0;
  margin: 0;
}
#__about-root .wrapper .header {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}
#__about-root .wrapper .header .logo img {
    width: 3rem;
}
#__about-root .wrapper .header .title {
    font-size: 27px;
    color: #232323;
    font-weight: 600;
    line-height: 50px;
    letter-spacing: 0px;
    text-transform: capitalize;
    letter-spacing: 0.1rem;
    line-height: 1.7rem;
    text-transform: capitalize;
    font-weight: 600;
}
#__about-root .wrapper .description {
    color: #555;
    text-align: center;
    font-size: 15px;
    line-height: 30px;
    text-align: center;
    letter-spacing: 0.02rem;
    line-height: 1.8rem;
}

#__about-root .pattern-image {
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.1;
}

@media (min-width: 768px) {
    #__about-root .wrapper .description {
      width: 90%;
    }

  #__about-root .wrapper .header .logo img {
      width: 4rem;
  }

  #__about-root .wrapper .header .title {
      font-size: 35px;
      line-height: 45px;
  }

  #__about-root .wrapper .description {
      font-size: 16px;
      line-height: 29px;
  }

  #__about-root .wrapper { gap:2rem; }
}

@media (min-width: 1280px) {
  #__about-root .wrapper .header .title {
      font-size: 40px;
      line-height: 50px;
  }

  #__about-root .wrapper .header .logo img {
      width: 5rem;
  }

#__about-root .wrapper .description {
      font-size: 17px;
      line-height: 31px;
  }
  
}

</style>

<section id="__about-root">
  <div class="wrapper container-global">
    <div class="header">
      <div class="logo">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740725403-28-02-2025-dKDB1l53iam94FgJA8LZHEWzMtrO0PIY.webp" alt="logo" />
      </div>
      <h2 class="title"> <?= $data->web->site_name ?></h2>
    </div>
    <p class="description">
     <?= $data->web->site_desc ?>
    </p>
  </div>
  <img
    class="pattern-image"
    src="https://jwc.gotra-resources.my.id/web-upload/1740725456-28-02-2025-KtBq3x05WIf9pnNo62aulQsc1PZvb4Jw.webp"
    alt="pattern image"
  />
</section>
