<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>

<style>
    .review-slide .prev-arrow {
        left: -1% !important;
    }

    .review-slide .next-arrow {
        right: -1% !important;
    }

.revieww .img-eventt {
    position: absolute;
    height: 100px; 
    z-index: 4;
}
.revieww .img-eventt.re-left {left: 9%;}

.revieww .img-eventt.re-right {
    right: 9%;
    height: 130px; 
}

@media screen and (max-width: 768px) {
.revieww .img-eventt.re-left {
    transform: translateY(6.5rem);
}
.revieww .img-eventt {
    height: 75px;
}
.revieww .img-eventt.re-right {display: none;}

}


.rev-card .card {
    border: 1px solid #fff;
    position: relative;
    border: none;
    background-color: #00000030;
    border-radius: 0px;
    min-height: 300px;
    margin: 10px;
}

.rev-card h3 {
    font-family: var(--subtext);
    color: #fff;
    font-size: 18px;
    line-height: 25px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: capitalize
}
.rev-card .from {
    font-family: var(--subtext);
    color: #fff;
    font-size: 13px;
    line-height: 25px;
    font-weight: 400;
    letter-spacing: 0.5px;
}
.rev-card p {
    font-family: var(--subtext);
    color: #fff;
    font-size: 15px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.1px;
}

.rev-card img {
    height: 80px;
    width: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: .4px solid #00000050;
    margin-right: 25px;
}

@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
  }

      .btn-full {
        padding: 10px 13px;
        font-size: 13px;
    }

  .pad-cus { background-size:contain !important; }

  .wrap-review { padding:2rem; }

  .tirev h2 {
    font-size: 28px;
    line-height: 40px;
}

}


.revieww h2 span {
    color: var(--colors);
}

.read-more, .read-less {
    color: #9f9e9e;
    border-bottom: 1px solid;
}

.tittreview h2 span {
    color: white !important;
}


</style>

<section class="pad6rem revieww" style="background: #ddffdd; background: var(--colors);">
    <!--<img loading="lazy" class="img-eventt re-left" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737795544-25-01-2025-m0I1XUzwtaxvbB5s3Ogk8QR9rAlTVhNG.webp" alt="Imlek Ornament">
    <img loading="lazy" class="img-eventt re-right" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737795542-25-01-2025-Wa8Q4HuMUe5CjTF26dxrcYEJKzXRNLbZ.webp" alt="Imlek Ornament">-->
    <div class="container-global wow fadeIn" wow-data-duration="2s">

        <div class="title-product text-center tittreview">
            <span class="tag-atas" style="color: white;"><?= $subtitle ?></span>
            <h2 style="color: white !important;"><?= $title ?></h2>
        </div>

        <div class="review-slide revrev ss-arrow mt-5" >
        <?php sort($item->data); foreach ($item->data as $items): ?>

            <div class="rev-card">
                <div class="card p-4">
                    <div class="profile mb-4 d-flex align-items-center">

                    <?php if (!empty($items->img)): ?>
                        <img src="<?= $items->img ?>" alt="<?= $items->guest ?>" class="" />
                    <?php else: ?>
                        <img src="<?= $data->web->site_logo ?>" alt="<?= $items->guest ?>" class="" />
                    <?php endif ?>

                        <div class="txt-rev">
                            <h3 class="name mb-1"><?= $items->guest ?></h3>
                            <span class="from">Our Customers</span>
                        </div>
                    </div>
                    <div class="caption">
                        <p class="review-message" id="message-<?= $items->id ?>" data-full-message="<?= htmlspecialchars($items->message) ?>" data-short-message="<?= htmlspecialchars(strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message) ?>">
                            <?= strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message ?>
                        </p>
                        <?php if (strlen($items->message) > 300): ?>
                            <a class="read-more" onclick="toggleMessage('message-<?= $items->id ?>', true)">Read More</a>
                            <a class="read-less d-none" onclick="toggleMessage('message-<?= $items->id ?>', false)">Read Less</a>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
        <?php endforeach ?>
        </div>


        <!-- <div class="text-center mt-4">
            <a class="btn btn-book-atas" target="_blank" href="#">View More Reviews</a>
        </div> -->

    </div>
</section>
