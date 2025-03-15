 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
?>

<style>

.margin-contact {
    background: white;
    position: relative;
    z-index: 10;
    margin-top: -180px;
    border-radius: 8px;
    box-shadow: 0px 0px 80px rgb(169 172 181 / 30%);
}

.why-style {
    padding: 20px 0px 20px 35px;
    position: relative;
}

.why-style h2 {
    margin-bottom: 5px;
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 29px;
}

.why-style p {
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 300;
    color: #7a7a7a;
    font-size: 17px;
    line-height: 27px;
    margin-bottom: 8px;
    letter-spacing: 0.1px;
}

.why-style2 {
    padding: 62px 30px;
    background: var(--colors);
    border-radius: 0px 8px 8px 42px;
    position: relative;
    text-align: center;
    cursor: pointer;
    transition: all ease 500ms;
}

.why-style2:hover {
    transition: all ease 500ms;
    background-color: #111;
    color: white;
}

.why-style2 p {
    margin-bottom: 0px;
    font-family: 'DINNextRoundedLTW01-Light';
    color: white;
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
}

@media (max-width: 768px) {
    .why-style {
        padding: 25px 25px;
        position: relative;
        text-align: center;
    }

    .why-style h2 {
        margin-bottom: 5px;
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 600;
        letter-spacing: 0px;
        font-size: 27px;
    }

    .why-style p {
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 300;
        color: #7a7a7a;
        font-size: 12px;
        line-height: 25px;
        margin-bottom: 8px;
        letter-spacing: 0.1px;
    }

    .why-style2 {
        padding: 20px 25px;
        background: var(--colors);
        border-radius: 0px 0px 8px 8px;
        position: relative;
        text-align: center;
        cursor: pointer;
        transition: all ease 500ms;
    }

    .why-style2 p {
        margin-bottom: 0px;
        font-family: 'DINNextRoundedLTW01-Light';
        color: white;
        font-size: 19px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: center;
    }

    .margin-contact { margin-top: -150px; }
}

</style>

<section class="py-5 container contact-baru">

    <div class="margin-contact">
        <div class="row">

            <div class="col-md-9">
                <div class="why-style">
                    <h2>Peduli Lingkungan Bersama Kami</h2>
                    <p>Melalui program-program dan kegiatan-kegiatan yang kami jalankan, YSBN berupaya untuk membantu masyarakat Indonesia dalam menghadapi tantangan-tantangan lingkungan yang semakin kompleks. </p>
                </div>
            </div>


            <div class="col-md-3">

            <a href="<?= $func->dm_whatsapp() ?>" style="text-decoration: none;">
                <div class="why-style2">
                    <p>Join Us Now!</p>
                </div>
            </a>

            </div>

        </div>
    </div>

</section>