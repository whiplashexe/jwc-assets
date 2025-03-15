<style>

.wrap-cntact {
    position: relative;
    text-align: left;
    background: var(--colors);
    overflow: hidden;
    z-index: 1;
    padding: 40px 0px;
}

.wrap-cntact h2 {
    font-family: var(--primtext);
    color: white;
    font-weight: 700;
    margin-bottom: 11px;
    font-size: 30px;
    letter-spacing: 0.3px;
    text-transform: capitalize;
}

.wrap-cntact p {
    font-family: var(--subtext);
    letter-spacing: .3px;
    margin-bottom: 0px;
    line-height: 29px;
    font-size: 16px;
    color: #f1f1f1;
}

.wrap-cntact a {
    color: white;
    background-color: var(--color2);
    padding: 12px 30px;
    font-weight: 500;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 0px;
    overflow: hidden;
    font-family: var(--primtext);
    transition: all ease 300ms;
}

.wrap-cntact a:hover {
    color: #000;
    background: #fff;
}

.img-asbw {
    position: absolute;
    bottom: 0;
    opacity: 0.2;
    height: 200%;
    z-index: 0;
}

.img-asat {
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0.2;
    height: 200%;
    z-index: 0;
}


@media (max-width: 768px) {
     

   .wrap-cntact h2 {
        font-size: 23px;
        line-height: 34px;
    }

    .wrap-cntact p {
        font-size: 14px;
        line-height: 27px;
        margin-bottom: 30px;
    }

    .wavy-atas, .wavy-bawah { display: none; }

    .wrap-cntact a {
        font-size: 13px;
        padding: 15px;
    }

    .img-asbw, .img-asat { display:none; }
}

</style>

<section>

  <?php
    $_cta = json_decode(json_encode([
        'title' => 'Ready to Explore Bali?',
        'description' => 'Book your vehicle now and enjoy a comfortable and safe journey with us. Contact us for the best experience in Bali!',
        'actions' => [
            'button' => [
                'text' => 'Booking Now',
                'link' => ''
            ]
        ]
    ]))
  ?>
    <div class="wrap-cntact pad6rem">
        <div class="container-global">
            <div class="row">
                <div class="col-md-9 text-md-left text-center">
                    <h2><?= $_cta->title; ?></h2>
                    <p><?= $_cta->description; ?></p>
                </div>

                <div class="col-md-3 text-md-right text-center" style="align-self: center;">
                    <a href=""><?= $_cta->actions->button->text; ?></a>
                </div>
            </div>
        </div>

    </div>
</section>