<style type="text/css">
    
    /* ==================== Paralax =================== */
.paralax {
    height: 50vh;
    position: relative;
    font-family: var(--subtext);
    /* background: var(--colors); */
    padding-top: 10vh;
    padding-bottom: 10vh;
}
.paralax .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* opacity: .7; */
    /* filter: brightness(.6); */
    position: absolute;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-image: url("https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737785145-25-01-2025-udwC0fZn5WTxrL2ahPtQ3SvsE4lpeDAq.webp");
}

.paralax .background:before {
    content: '';
    position: absolute;
    background: #000000;;  
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .4;
}

.paralax .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    height: 100%;
}

.paralax p {
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 17px;
    line-height: 30px;
    color: #f1f1f1;
    font-family: var(--subtext);
    margin-bottom: 35px;
    padding: 0px 120px;
}

.paralax h2 {
    font-family: var(--primtext);
    font-size: 40px;
    line-height: 50px;
    letter-spacing: 0px;
    text-transform: capitalize;
    font-weight: 500;
    margin-bottom: 15px;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

.spn-paralax {
    text-align: center;
    display: block;
    margin-bottom: 15px;
    font-size: 17px;
    color: #f1f1f1 !important;
    font-weight: 300;
    letter-spacing: 2.5px;
    text-shadow: 0px 5px 10px rgba(0,0,0,0.3);
}

@media screen and (max-width: 576px) {
    .paralax h2 {
        font-size: 28px;
        line-height: 40px;
    }

    .paralax { height: 50vh; }

    .paralax p { font-size: 14px; text-align:center; padding:0px; }

    .spn-paralax { font-size: 15px; }

    .paralax .btn {
        font-size: 13px;
    }
}

.btn-box-box .btn {
    background-color: var(--colors);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .4px;
    padding: .5rem 1.5rem;
    border-radius: 20px;
    transition: .3s;
}
.btn-box-box:hover .btn {
    background-color: var(--color2);
    border: 1px solid var(--color2);
    color: var(--color3);
    transition: .3s;
}
/* ==================== Paralax =================== */
    
</style>


<!-- <div class="container text-center" style="position: relative; z-index: 1; max-width: 1240px;"> -->

<section class="paralax wow fadeIn lazyload " data-wow-duration="2s">
    

    <div class="background"></div>
        <div class="container">
            <div class="text text-center">
                <h2 class="text-center text-light">
                    Discover Bali’s Hidden Treasures
                </h2>

                <p>
                    Get off the beaten path and explore Bali’s hidden gems with personalized tours designed to give you an authentic experience.
                </p>
                <!-- <div class="btn-box-box text-center">
                    <a href="<?= $func->dm_whatsapp() ?>" class="btn">Contact Us Now!</a>
                </div>-->
            </div>
        </div>



</section>

<!-- </div> -->