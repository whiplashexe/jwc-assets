<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid; ?>

<style>

    .bg-review { 
        padding: 70px 0px 20px;
    } 

    .wrap-review {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .wrap-review i {
        font-size: 17px;
        margin: 0px 2px;
        margin-bottom: 12px;
        color: #ffdc2e;
    }

    .wrap-review p {
        width: 900px;
        margin: auto;
        margin-bottom: 30px;
        font-family: 'Poppins';
        color: #161616;
        letter-spacing: 0.5px;
        font-size: 18px;
        line-height: 30px;
        font-weight: 300;
    }


    @media (max-width: 768px) {
        .wrap-review p {
            margin: auto;
            margin-bottom: 30px;
            font-family: 'Poppins';
            color: black;
            font-size: 17px;
            line-height: 30px;
            width: auto;
        }

        .title-foundation .review {
            font-size: 30px;
        }

        .fix-slide {
            position: relative;
            z-index: 1;
            overflow-y: scroll;
        }


    }

    .wrap-review img {
        height: 150px; 
        width: 150px !important; 
        object-fit: cover; 
        border-radius: 100px; 
        border: 1px solid #ccc; 
        margin: auto; 
        margin-bottom: 40px;
    }

    .wrap-review h6 {
        font-family: 'Poppins';
        color: black;
        letter-spacing: 0.5px;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .wrap-review span {
        font-family: 'Poppins';
        color: var(--colors);
        font-size: 16px;
    }

    .owl-theme .owl-nav.disabled+.owl-dots { margin-top: 40px; }
</style>

<section class="bg-review">
    <div class="container">
        <div class="text-center title-product wow fadeInUp">
            <h2><?= $title ?></h2>
            <p><?= $subtitle ?></p>
        </div>
        
        <div class="wrap-review">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 6000}">

            <?php foreach ($item->data as $items): ?>
                <div class="fix-slide">
                <img src="<?= $items->img_url ?>" class="img-fluid">
                    <p><?= $items->message ?></p>

                    <div class="star mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <h6><?= $items->guest ?></h6>
                    <span>Customers</span>
                </div>
            <?php endforeach ?>

            </div>
        </div>
    </div>
</section>