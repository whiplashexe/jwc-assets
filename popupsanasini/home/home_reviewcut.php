<!-- REVIEW -->
<style type="text/css">
#__review-root {
  font-family: var(--primtext);
  padding-top: 4rem;
  padding-bottom: 4rem;
  background-color: white;
}

#__review-root .wrapper h2 { margin-top:10px; }

@media (min-width: 768px) {
  #__review-root {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }
}
@media (min-width: 1280px) {
  #__review-root {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}
#__review-root .wrapper {
  width: 100%;
  display: grid;
  gap: 2rem;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(2, auto);
}
@media (min-width: 1280px) {
  #__review-root .wrapper {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto;
  }
}
#__review-root .wrapper * {
  padding: 0;
  margin: 0;
}
#__review-root .wrapper .description {
  display: flex;
  justify-content: center;
  align-items: stretch;
  flex-direction: column;
  gap: 0.8rem;
}
#__review-root .wrapper .description .title {
  color: var(--colors);
  font-weight: bold;
  font-size: 1.4rem;
}
@media (min-width: 768px) {
  #__review-root .wrapper .description .title {
    font-size: 1.6rem;
  }
}
@media (min-width: 1280px) {
  #__review-root .wrapper .description .title {
    font-size: 2rem;
  }
}
#__review-root .wrapper .description .subtitle {
  	color: #555;
    font-size: 15px;
    padding-right: 20px;
    line-height: 30px;
}
#__review-root .wrapper .description .users-rating-avg {
  display: flex;
  margin-top: 1rem;
  justify-content: start;
  align-items: center;
  gap: 1rem;
}
#__review-root .wrapper .description .users-rating-avg .users {
  position: relative;
  width: 120px;
  height: 60px;
}
#__review-root .wrapper .description .users-rating-avg .users > .user {
  overflow: hidden;
  position: absolute;
  width: 50%;
  aspect-ratio: 1/1;
  border-radius: 999em;
  top: 0;
  bottom: 0;
  border: solid 6px white;
}
#__review-root .wrapper .description .users-rating-avg .users > .user img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
#__review-root .wrapper .description .users-rating-avg .users .user-1 {
  left: 0;
  z-index: 3;
}
#__review-root .wrapper .description .users-rating-avg .users .user-2 {
  left: 25%;
  right: 25%;
  z-index: 2;
}
#__review-root .wrapper .description .users-rating-avg .users .user-3 {
  right: 0;
  z-index: 1;
}
#__review-root .wrapper .description .users-rating-avg .text {
  font-weight: bold;
  color: var(--colors);
}
#__review-root .wrapper .description .cta {
  text-decoration: none;
  color: white;
  padding: 1rem 1.3rem;
  background-color: var(--colors);
  margin-right: auto;
  border-radius: 999em;
  margin-top: 1rem;
  font-weight: 600;
  transition: all ease 500ms;
}

#__review-root .wrapper .description .cta:hover {
	background-color: black;
}
@media (min-width: 768px) {
  #__review-root .wrapper .description .cta {
    font-size: 0.8rem;
    margin: auto;
    padding: 10px 20px;
  }

  #__review-root .wrapper .description { align-items:center; }

  #__review-root .wrapper .tag-atas { margin:auto; }

  #__review-root .wrapper h2 { margin-top:0px; }
}
@media (min-width: 1280px) {
  #__review-root .wrapper .description .cta {
        font-size: calc(var(--text-desktop-size) / 2 - 7px);
    	padding: 12px 30px;
  }

  #__review-root .wrapper .description { align-items:stretch; }

   #__review-root .wrapper .description .cta { margin: 0; width:fit-content; margin-top:10px; }

   #__review-root .wrapper .tag-atas { margin:unset; }

   #__review-root .wrapper h2 { margin-top:10px; }

}
#__review-root .wrapper .review-content {
  display: grid;
  gap: 0.6rem;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(2, auto);
}
@media (min-width: 480px) {
  #__review-root .wrapper .review-content {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto;
  }
}
#__review-root .wrapper .review-content .review {
  margin-top: 0.6rem;
  padding: 1.2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: stretch;
  gap: 1rem;
  border-radius: 1rem;
  background-color: var(--colors);
}
#__review-root .wrapper .review-content .review .review-description {
  color: #f1f1f1;
}
#__review-root .wrapper .review-content .review .read-more-btn {
    color: white;
    font-weight: 500;
    border-bottom: 1px solid;
    margin-left: auto;
}
#__review-root .wrapper .review-content .review .review-user {
  gap: 10px;
  display: flex;
  justify-content: start;
  align-items: center;
}
#__review-root .wrapper .review-content .review .review-user .avatar {
  width: 40px;
  aspect-ratio: 1/1;
  border-radius: 999em;
  background-color: white;
  border: 2px solid white;
}
#__review-root .wrapper .review-content .review .review-user .name-rating {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
}
#__review-root .wrapper .review-content .review .review-user .name-rating .name {
    font-weight: 500;
    font-size: 16px;
    color: white;
    line-height: 25px;
}
#__review-root .wrapper .review-content .review .review-user .name-rating .rating {
    color: #ffe900;
    font-size: 12px;
}
</style>
<section id="__review-root" style="background: #fffbf8;">
  <div class="wrapper container-global">
    <div class="description">
      <div class="title-product review-title text-left">
        <span class="tag-atas"><i class="fa-solid fa-bell-concierge mr-2"></i> Review <i class="fa-solid fa-bell-concierge ml-2"></i></span>
        <h2 style="text-align: start">What they say <span>about us?</span></h2>
      </div>
      <!--<h3 class="title">What they say about us?</h3>-->
      <p class="subtitle">Trusted by thousands! See what our customers have to say about their experience with us.</p>
      <div class="users-rating-avg">
        <div class="users">
          <div class="user-1 user">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1740712480-28-02-2025-ne3q1Mlsa9RjBKf7xrgCUGb5L8FVuwm6.png" alt="Reviews Ebaki Kitchen">
          </div>
          <div class="user-2 user">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1740712695-28-02-2025-njwPTx2Asurmf1NIDaSkivVY89LQB0he.png" alt="Reviews Ebaki Kitchen">
          </div>
          <div class="user-3 user">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1740712755-28-02-2025-gFcKLWuvto2aRCfTY7U3ZNz9GPXbn6IS.png" alt="Reviews Ebaki Kitchen">
          </div>
        </div>
        <p class="text">Rated 4/5 by over <span class="user-count">0</span> users</p>
      </div>
      <a class="cta" href="https://maps.app.goo.gl/sCbgeLAwi1ukGtsY6">See more on Maps  <i class="fa-solid fa-arrow-right ml-2" style="color: white; font-size: 1.2rem"></i></a>
    </div>
    <div class="review-content">
      <div class="review-left">
        <div class="review review-1">
          <p class="review-description">Waited 2 weeks on my trip only to find here the best fried calamari. It is not common to find such a crispy, balanced crust. My partner asked for the pad thai, which was also delicious. We both had a dragon fruit juice, was refreshing and tasted quite authentic. Fair prices, super tasty food and very nice staff. We only regret not having found this place any earlier.</p>
          <span class="read-more-btn">Read More</span>
          <div class="review-user">
            <div class="avatar">
            	<img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1740712480-28-02-2025-ne3q1Mlsa9RjBKf7xrgCUGb5L8FVuwm6.png" alt="Reviews Ebaki Kitchen">
            </div>
            <div class="name-rating">
              <p class="name">Ana Barros</p>
              <p class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="review review-2">
          <p class="review-description">I am so glad I found this hidden restaurant in the middle of the ricedileds. The way here is gorgase. The concept is open kitchen, with Thai- Indonesian fusion food. Served in a simple way, like your mom is serving you, but the flavors are Michelin.</p>
          <span class="read-more-btn">Read More</span>
          <div class="review-user">
          	<div class="avatar">
            	<img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1740712695-28-02-2025-njwPTx2Asurmf1NIDaSkivVY89LQB0he.png" alt="Reviews Ebaki Kitchen">
            </div>
            <div class="name-rating">
              <p class="name">Shaul Rappaport</p>
              <p class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="review-right">
        <div class="review review-3">
          <p class="review-description">Food was amazing! The people here are so nice. Everything was on point. We order delicious dessert such as Fried banana with cheddar cheese! Highly recommended this place!</p>
          <span class="read-more-btn">Read More</span>
          <div class="review-user">
            <div class="avatar">
            	<img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1740712755-28-02-2025-gFcKLWuvto2aRCfTY7U3ZNz9GPXbn6IS.png" alt="Reviews Ebaki Kitchen">
            </div>
            <div class="name-rating">
              <p class="name">Karolina Stokłosa</p>
              <p class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="review review-4">
          <p class="review-description">Highly recommend trying E Baki if you are in the area. We had dinner over there during our stay at a nearby Villa .. Extremely delicious food but my regards to the excellent hosts. They even customized the menu for our request for something vegetarian on our last day. Also the musice and vibes are great to help you enjoy your meals. Kudos to them ! Loved it!</p>
          <span class="read-more-btn">Read More</span>
          <div class="review-user">
            <div class="avatar">
            	<img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1740537783-26-02-2025-vIfadQPB4r2SmNiT9lW7qeKLuzncpt5F.webp" alt="Reviews Ebaki Kitchen">
            </div>
            <div class="name-rating">
              <p class="name">Namitha R</p>

              <p class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  const _review_user_count = document.querySelector("#__review-root .user-count")
  const _review_title = document.querySelector("#__review-root .review-title")
  const _review_subtitle = document.querySelector("#__review-root .subtitle")
  const _review_items = document.querySelectorAll("#__review-root .review")

  inView(_review_title, (element) => {
    const animation = animate(element, {opacity: [0, 1]}, {duration: 1, delay: 1})
    animate(animation)
    return () => {
      animation.stop()
    }
  })
  inView(_review_subtitle, (element) => {
    const animation = animate(element, {opacity: [0, 1]}, {duration: 1, delay: 1.2})
    animate(animation)
    return () => {
      animation.stop()
    }
  })
  inView(_review_user_count, (element) => {
    animate(0, 150, {
      duration: 0.5,
      ease: "anticipate",
      onUpdate: (latest) => (element.innerHTML = Math.round(latest)),
    })
    return () => {
    }
  })

  inView(_review_items, (element) => {
    const animation = animate(element, {
      transform: ["translateY(100px)", "translateY(0)"],
      opacity: [0, 1]
    }, {duration: 1, ease: "anticipate", delay: stagger(0.5)})
    animate(animation)
    return () => {
      animation.stop()
    }
  })
  
  document.addEventListener("DOMContentLoaded", function() {
    const longText = 100
    const reviews = document.querySelectorAll("#__review-root .review-description");
    reviews.forEach((review) => {
      const fullText = review.textContent;
      const shortText = fullText.length > longText ? fullText.substring(0, longText) + "..." : fullText;
      if (fullText.length > longText) {
        review.textContent = shortText;
        const btn = review.nextElementSibling;
        btn.style.display = "inline";
        let isShortened = true;
        btn.addEventListener("click", function() {
          if (isShortened) {
            review.textContent = fullText;
            btn.textContent = "Read Less";
          } else {
            review.textContent = shortText;
            btn.textContent = "Read More";
          }
          isShortened = !isShortened;
        });
      } else {
        review.nextElementSibling.style.display = "none";
      }
    });
  });

</script>