 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
?>

<style>

.wrap-cntact {
    position: relative;
    text-align: left;
    background: var(--colors);
    padding: 5rem 0;
    overflow: hidden;
    z-index: 1;
}

.wrap-cntact h2 {
    font-family: var(--primtext);
    color: white;
    font-weight: 500;
    margin-bottom: 12px;
    font-size: 30px;
    letter-spacing: 0.3px;
}

.wrap-cntact p {
    font-family: var(--subtext);
    color: #f1f1f1;
    margin-bottom: 0px;
    line-height: 25px;
    font-size: 15px;
}

.wrap-cntact a {
    background: var(--color2);
    color: white;
    font-family: var(--subtext);
    font-size: 17px;
    border-radius: 0;
    padding: 12px 30px;
    transition: all ease 500ms;
    position: relative;
    z-index: 1;
}

.wrap-cntact a:hover {
    color: white;
    background: var(--colors);
    border: 1px solid;
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
     .wrap-cntact {
        padding: 50px 30px;
    }

   .wrap-cntact h2 {
        font-size: 27px;
    }

    .wrap-cntact p { font-size:14px; margin-bottom:40px; }

    .wavy-atas, .wavy-bawah { display: none; }

    .wrap-cntact a { font-size:14px; padding:15px; }

    .img-asbw, .img-asat { display:none; }
}

</style>

<section>
    <div class="wrap-cntact">
        <div class="container-global">
            <div class="row">
                <div class="col-md-9 text-md-left text-center">
                    <h2>Bali’s Calling - Step Into Paradise Today</h2>
                    <p>Embark on an unforgettable adventure through Bali’s stunning landscapes, rich culture, and thrilling activities, guided by experts dedicated to your perfect getaway.</p>
                </div>

                <div class="col-md-3 text-md-right text-center" style="align-self: center;">
                    <a href="<?= $func->dm_whatsapp() ?>">Booking Now</a>
                </div>
            </div>
        </div>

        <img class="img-fluid img-asbw" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1724573808-25-08-2024-Id7kBpcOxazTAsS5Zv60yrN1qVfWH8uG.png" alt="assets bawah">
        <img class="img-fluid img-asat" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1724573807-25-08-2024-OyBs4bNqGCSVfvu10nTU3mRz5MIXoW7K.png" alt="assets atas">

    </div>
</section>