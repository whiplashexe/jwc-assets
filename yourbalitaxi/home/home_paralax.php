<style type="text/css">
    
    /* ==================== Paralax =================== */
.paralax {
    height: 90vh;

    position: relative;

    font-family: var(--primtext);
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
    filter: brightness(.6);
    transform: scale(.95);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://jwc.gotra-resources.my.id/web-upload/1740973215-03-03-2025-FcPqtlJmnybSZvuAfr8CMVR9Y5oNUsED.webp);
}

/* .paralax .background:before {
    content: '';
    position: absolute;
    background: var(--colors);;  
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .7;
} */

.paralax .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: end;
    justify-content: center;
    flex-wrap: wrap;
    width:100%; 
    height: 100%;
}
.paralax p {
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 16px;
    line-height: 30px;
    color: #f1f1f1;
    font-family: var(--subtext);
    margin-bottom: 35px;
    width: 700px;
}

.paralax h2 {
    font-size: 45px;
    line-height: 55px;
    letter-spacing: 0px;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

.paralax .button {
    display: flex;
    align-items: center;
    justify-content: center;

}
.paralax .btn {
    color: #fff;
    background-color: var(--colors);
    padding: 10px 30px;
    font-weight: 600;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 100px;
    overflow: hidden;
    font-family: var(--subtext);
    transition: all ease 500ms;
}
.paralax .btn:hover {
    background-color: #1c1818;
    transition: .3s;
    color: #FFFFFF;
}


@media screen and (max-width: 576px) {

    .paralax {
        height: 40vh !important;
        margin-top: 0;
    }

    .paralax h2 {
        font-size: 20px;
        line-height: 30px;
    }

    .paralax p { display:none; }

    .paralax .btn {
        font-size: 10px;
    }

    .paralax .btn {
        padding: 8px 20px;
        font-weight: 600;
    }

    .paralax .background { background-position:center; }

    .paralax .container { padding:2vh 7% !important; }

    .paralax {
        padding-top: 7vh;
        padding-bottom: 10vh;
    }

}
/* ==================== Paralax =================== */
    
</style>



<section class="paralax wow fadeIn lazyload mb-5" data-wow-duration="2s">
    

    <div class="background"></div>
        <div class="container w-100" style="max-width: none; padding: 10vh 7%">
            <div class="text w-100">
                <h2 class=" text-light">
                    Skip the Airport <br>Queues & High-Priced SIM Cards
                </h2>

                <p>
                    Avoid the hassle of long lines and overpriced SIMs at Bali Airport. Get your <strong>Bali eSIM</strong> online and stay connected <strong>instantly with fast 4G/5G</strong> as soon as you land—<strong>no waiting, no extra fees, just seamless internet access.</strong>
                </p>
                <a href="<?= $func->dm_whatsapp() ?>" class="btn">Get Your eSIM Now!<i class="fas fa-arrow-right ml-3"></i></a>
                
            </div>
        </div>



</section>

<!-- </div> -->