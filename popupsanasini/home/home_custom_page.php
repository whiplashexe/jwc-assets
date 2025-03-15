<style>
   .why-section {
        position: relative;
        font-family: var(--primtext);
   }

   .title-primary {
        position: relative;
        text-align: center;
        margin-bottom: 50px;
   }

   .title-primary span {
        color: var(--color2);
        font-family: var(--subtext);
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 16px;
        line-height: 30px;
        display: block;
        margin-bottom: 7px;
        text-transform: capitalize;
    }

    .title-primary h2 {
        font-family: var(--primtext);
        letter-spacing: 0px;
        color: white;
        font-style: normal;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 36px;
        line-height: 48px;
        margin-bottom: 0;
    }

    .why-section {
        position: relative;
        transition: all ease 500ms;
    }

     .why-section:hover i {
        background: var(--colors) !important;
        color: white !important;
    }

    .why-section i {
        background: var(--color2);
        padding: 20px 15px;
        font-size: 45px;
        border-radius: 15px;
        margin-bottom: 30px;
        color: #fff;
        transition: all ease 500ms;
    }

    .why-section h3 {
        font-family: var(--primtext);
        font-weight: 500;
        text-transform: capitalize;
        font-size: 22px;
        color: white;
        letter-spacing: 0px;
        margin-bottom: 15px;
    }

    .why-section p {
        color: #c7c7c7;
        font-size: 14px;
        font-family: var(--primtext);
    }

@media (max-width: 768px) {
    .why-section { text-align: center;}

    .title-primary { margin-bottom:30px; }

    .title-primary span {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .title-primary h2 { font-size: 30px; }

    .conti { padding: 0px 20px; }

    .why-section i {
        font-size: 40px;
    }

    .why-section h3 {
        font-size: 16px;
        margin-bottom: 6px;
    }

    .why-section p {
        font-size: 13px;
    }

    .col3636 { padding: 0 5px; }
}

</style>

<section class="py-5 mb-0 wow fadeIn" data-wow-duration="2s" style="background: var(--colors);">
    <div class="container conti">

        <div class="title-primary">
            <span><?= $data->web->site_name ?></span>
            <h2>Why Choose Gangga Vacation for ATV Bali Adventures</h2>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <h3>Commitment to Sustainability</h3>
                    <p>We prioritize environmentally conscious practices to protect the beautiful environment you’ll be exploring.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-certificate"></i>
                    <h3>Expert Guides</h3>
                    <p> Our knowledgeable guides ensure your safety and maximize your fun, tailoring the experience to your skill level.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-road"></i>
                    <h3>Challenging and Scenic Trails</h3>
                    <p>Our routes offer a perfect blend of technical challenges and breathtaking Balinese landscapes.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <h3>Flexible Packages</h3>
                    <p>Choose from single-rider adventures, tandem rides, or group packages for a shared experience.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========== Why 2 ========== -->

<style type="text/css">
    .justify-content-end {
        justify-content: flex-end;
    }
    
    .why2 {
        position: relative;
        padding-top: 10vh;
        padding-bottom: 8vh;
    }
    .why2 .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 75%;
        background: url(https://gotra.sgp1.digitaloceanspaces.com/web-upload/1722061398-27-07-2024-XBMvZ36J0xVNjmplQkrgw9oydqc782zh.webp) no-repeat center center/cover;
        filter: brightness(0.5);
    }

    .why2 h6 {
        font-size: 24px;
        line-height: 30px;
        font-family: var(--subtext);
        color: var(--color2);
        letter-spacing: 0.5px;
    }
    .why2 p {
        font-size: 14px;
        line-height: 26px;
        font-family: var(--primtext);
    }
    .why2 h2 {
        font-family: var(--subtext);
        color: white;
		    position: relative;
		    z-index: 10;
        font-size: 40px;
        margin-top: 15px;
        font-weight: 500;
        line-height: 48px;
        letter-spacing: .5px;
    }
    .why2 .btn {
        display: inline-block;
        padding: 0.7rem 1.8rem;
        margin: 10px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .4px;
        text-transform: uppercase;
        color: #fff;
        background-color:  var(--color2);
        text-decoration: none;
        transition: ease-in-out .3s;
        border-radius: 5px;
    }
    .why2 .btn:hover {
        background-color:  var(--colors);
    }
    .why2 .card {
        border-radius: 8px;
        box-shadow: 5px 5px 10px #00000015;
    }
    .why2 .card i {
        background-color:  var(--colors);
        width: 4rem;
        height: 4rem;
        display: flex;
        color: #fff;
        font-size: 1.7rem;
        margin: 1rem 0 2rem;
        align-items: center;
        border-radius: 8px;
        justify-content: center;
    }
    .why2 .card h5 {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: .5px;
        text-transform: capitalize;
    }
    .why2 .card p {
        font-size: 13px;
        line-height: 22px; 
    }
    .why2 .why-item2 {
        background-color: var(--colors);
        transform: translateY(2rem);
    }
    .why2 .why-item2 i {
        background-color: var(--color2);
    }
    .why2 .why-item2 h5 {
        color: #fff;
    }
    .why2 .why-item2 p {
        color: #f1f0f0;
    }
    @media screen and (max-width: 768px) {

    .why2 .background {
      height: 85%;
    }
      .why2 h6 {
        font-size: 18px;
        line-height: 24px;
      }
      .why2  h2 {
        font-size: 30px;
        line-height: 38px
      }
      .why2 .btn {
        font-size: 13px;
        padding: .5rem 1.5rem;
      }
      .why2 .title-why .col-sm-4 {
        justify-content: left !important;
      }
      .why2 .why-item2 {
        transform: translateY(0);
      }
    }
</style>

<section class="why2 lazyload mt-0" >
    <div class="background"></div>
      <div class="container">

        <div class="title-why mb-5 d-flex justify-content-center align-item-center">
            <h2 class="text-center">What to Expect on Your Bali Quad Bike Adventure</h2>
        </div>


        <div class="row">

          <div class="col-sm-3 pb-3">
            <div class="card h-100 why-item1">
              <div class="card-body p-3">
                <div class="icon d-flex justify-content-center">
                  <i class="fa-solid fa-shield"></i>
                </div>
                <h5 class="text-center">Safety Briefing and Training</h5>
                <p class="text-center">
                  Before you hit the trails, you'll receive a thorough safety briefing and practice session to get comfortable with your ATV.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 pb-3">
            <div class="card h-100 why-item2">
              <div class="card-body p-3">
                <div class="icon d-flex justify-content-center">
                  <i class="fa-solid fa-street-view"></i>
                </div>
                <h5 class="text-center">Exploring Ubud's Diverse Terrain</h5>
                <p class="text-center">
                  Conquer muddy tracks, splash through rivers, and wind your way through dense jungle – the diverse terrain of Ubud guarantees an exhilarating ride.
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-3 pb-3">
            <div class="card h-100 why-item1">
              <div class="card-body p-3">
                <div class="icon d-flex justify-content-center">
                  <i class="fa-solid fa-gopuram"></i>
                </div>
                <h5 class="text-center">Immersion in Balinese Culture</h5>
                <p class="text-center">
                  Get glimpses of authentic Balinese life as you pass through local villages and admire the iconic rice terraces.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 pb-3">
            <div class="card h-100 why-item2">
              <div class="card-body p-3">
                <div class="icon d-flex justify-content-center">
                  <i class="fa-solid fa-brain"></i>
                </div>
                <h5 class="text-center">Unforgettable Memories</h5>
                <p class="text-center">
                  The stunning scenery, adrenaline rush, and sense of accomplishment will make your Bali quad bike adventure a highlight of your trip.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
</section>

<!-- ========= btm =========== -->

<style>
  .btm-section-pg h4 {
    font-family: var(--primtext);
    font-size: 30px;
    line-height: 38px;
    letter-spacing: .5px;
  }
  .btm-section-pg p {
    max-width: 850px;
    font-size: 15px;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: .3px;
  }
  .btm-section-pg ul li {
    font-size: 15px;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: .5px;
  }
  .btm-section-pg ul li b {
    font-weight: 500;
    color: var(--colors);
  }
  @media screen and (max-width: 768px) {
  .btm-section-pg h4,
  .btm-section-pg p {
    text-align: left !important;
  }
  }
</style>


    <section class="btm-section-pg py-5">
      <div class="container">
        <h4 class="text-center">Additional Experiences with Gangga Vacation</h4>
        <p class="text-center mx-auto">
          We don’t just specialize in ATV tours! Let Gangga Vacation be your
          one-stop-shop for incredible Bali adventures. Consider combining your
          quad bike tour with:
        </p>
        <ul class="mx-auto" style="width: fit-content;">
          <li>
            <b> White Water Rafting: </b>
            Tackle the thrilling rapids of Bali’s rivers.
          </li>
          <li>
            <b>Cultural Excursions:</b>
            Explore ancient temples and vibrant markets.
          </li>
          <li>
            <b>Relaxing Spa Treatments:</b>
            Unwind after your adventure with a traditional Balinese massage.
          </li>
        </ul>
      </div>
    </section>
    <!-- ========= btm =========== -->