 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
?>

<style>

.wrap-cntact {
    position: relative;
    text-align: left;
    background: var(--color2);
    overflow: hidden;
    z-index: 1;
    padding: 40px 0px;
}

.wrap-cntact h2 {
    font-family: var(--primtext);
    color: white;
    font-weight: 800;
    margin-bottom: 11px;
    font-size: 30px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.wrap-cntact p {
    font-family: var(--subtext);
    color: #f1f1f1;
    letter-spacing: .3px;
    margin-bottom: 0px;
    line-height: 29px;
    font-size: 16px;
}

.wrap-cntact a {
    color: white;
    background-color: var(--colors);
    padding: 10px 30px;
    font-weight: 600;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 3px;
    overflow: hidden;
    font-family: var(--subtext);
    transition: all ease 500ms;
}

.wrap-cntact a:hover {
    color: white;
    background: var(--color2);
    border: 1px solid #fff;
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
    <div class="wrap-cntact pad6rem">
        <div class="container-global">
            <div class="row">
                <div class="col-md-9 text-md-left text-center">
                    <h2>Don’t Miss Bali’s Best Dirt Bike Experience</h2>
                    <p>Conquer rugged terrains, lush jungles, and scenic beaches with DirtX Bali. Reserve your spot now!</p>
                </div>

                <div class="col-md-3 text-md-right text-center" style="align-self: center;">
                    <a href="<?= $func->dm_whatsapp() ?>">Booking Now</a>
                </div>
            </div>
        </div>

    </div>
</section>