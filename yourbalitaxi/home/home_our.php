<style>

.how-work .card {
    overflow: hidden;
    position: relative;
    border: 2px solid transparent;
    border-radius: 0px;
    background: #f6f6f6;
}

.how-work .card h3 {
    font-family: var(--primtext);
    font-size: 21px;
    font-weight: 600;
    color: var(--color2);
    line-height: 30px;
    text-transform: capitalize;
    text-align: left;
    transition: all ease-in-out .6s;
    letter-spacing: -0.3px;
    margin-bottom: 10px;
}

.how-work .card p {
    margin-bottom: 0px;
    font-family: var(--subtext);
    font-size: 14px;
    line-height: 24px;
    font-weight: 300;
    text-align: left;
    letter-spacing: .5px;
    color: #333;
    transition: all ease-in-out .6s;
}

.how-work .card-body {
    padding: 2.5rem 2rem;
    position: relative;
    z-index: 2;
}

.how-work .icon i {
    font-size: 35px;
    text-align: left;
    color: var(--colors);
    margin-bottom: 2rem;
    transition: all ease-in-out .6s;
}


.how-work .icon {
  text-align: ;
  padding-left: 0 !important;
  margin-left: 0;
}

.how-work .card .shadow {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 5rem;
    height: 5rem;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    opacity: 1;
    background-color: var(--colors);
    /* filter: blur(20px); */
    transform: scale(.0) translate(50%, 50%);
    transition: all ease-in-out .35s;
}

/*.how-work .card:hover .shadow {
    transform: scale(11) ;
}*/

.how-work .card.on-cr {border: 2px solid var(--colors);}

.how-work .card:hover {
    border: 2px solid var(--colors);
}

/* .how-work .card:hover  h3,
.how-work .card:hover  p {
  color: white;
}

.how-work .card:hover .icon i {
  color: #fff;
}*/

@media (max-width: 768px) {
    .how-work .text-part {
        padding: 3rem 5%;
    }

    .how-work .card-body {
        padding: 20px;
    }

    .how-work .icon i {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .how-work .card h3 {
        font-size: 15px;
        line-height: 25px;
    }

    .how-work .card p {
        margin-bottom: 0px;
        font-size: 12px;
        line-height: 20px;
    }

}
</style>
      
<section class="how-work pad6rem">

  <?php 
    $_works = json_decode(json_encode([
        'span' => 'How It Works',
        'title' => 'Book Your Taxi in <span>4 Easy Steps</span>',
        'items' => [
            [
                'title' => 'Select Your Vehicle',
                'description' => 'Choose from our diverse fleet of vehicles that best fits your travel needs, whether it\'s a solo trip or a family journey.',
                'icon' => 'fa-car'
            ],
            [
                'title' => 'Book Your Ride',
                'description' => 'Fill out the easy online booking form with your trip details, secure your reservation, and receive instant confirmation.',
                'icon' => 'fa-calendar-check'
            ],
            [
                'title' => 'Meet Your Driver',
                'description' => 'On the day of your ride, your friendly driver will be waiting at the pickup location to assist you. Simply introduce yourself and enjoy a warm welcome!',
                'icon' => 'fa-users'
            ],
            [
                'title' => 'Enjoy the Journey',
                'description' => 'Relax and take in the sights of Bali as your driver safely transports you to your destination. Don’t forget to share your experience!',
                'icon' => 'fa-road'
            ],
        ]
    ]))
  ?>
  <div class="container-global">
    
    <div class="title-product text-center">
            <span class="tag-atas"><?= $_works->span ?></span>
            <h2><?= $_works->title ?></h2>
    </div>
    
    <div class="row mx-0 w-100 px-0">

      <?php foreach($_works->items as $item): ?>
      <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
          <div class="card h-100 carw">
              <div class="shadow"></div>
              <div class="card-body">
                  <div class="icon">
                      <i class="fa-solid <?= $item->icon ?>"></i>
                  </div>
                  <h3 class="card-title"><?= $item->title ?></h3>
                  <p class="text-card"><?= $item->description ?></p>
              </div>
          </div>
      </div>
      <?php endforeach; ?>
  </div>

  </div>
</section>
