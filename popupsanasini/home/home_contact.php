<style type="text/css">
    
/* ==================== CTA =================== */
.cta-sect {
    height: 50vh;
    position: relative;
    font-family: var(--subtext);
    padding-top: 5vh;
    padding-bottom: 5vh;
}
.cta-sect .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* opacity: .7; */
    filter: brightness(.8);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url("https://jwc.gotra-resources.my.id/web-upload/1741415577-08-03-2025-OxpNYeMCqhLEyAtzdScXknBgrFTbVv4u.webp");
}

.cta-sect .background:before {
    content: '';
    position: absolute;
    background: #0176BA;  
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .5;
}

.cta-sect .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    height: 100%;
}

.cta-sect p {
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 17px;
    line-height: 30px;
    color: #f1f1f1;
    font-family: var(--subtext);
    margin-bottom: 35px;
    padding: 0px 120px;
}

.cta-sect h2 {
    font-family: var(--primtext);
    font-size: 40px;
    line-height: 50px;
    letter-spacing: 0px;
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 15px;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

.spn-cta-sect {
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
    .cta-sect h2 {
        font-size: 28px;
        line-height: 40px;
    }

    .cta-sect { height: 50vh; }

    .cta-sect p { font-size: 14px; text-align:center; padding:0px; }

    .spn-cta-sect { font-size: 15px; }

    .cta-sect .btn {
        font-size: 13px;
    }
}

.btn-box-cta .btn {
    background-color: var(--color4);
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    letter-spacing: .4px;
    padding: .5rem 1.5rem;
    border-radius: 5px;
    transition: .3s;
}
.btn-box-cta:hover .btn {
    background-color: var(--color2);
    border: 1px solid var(--color2);
    color: var(--color3);
    transition: .3s;
}
/* ==================== cta-sect =================== */
    
</style>


<!-- <div class="container text-center" style="position: relative; z-index: 1; max-width: 1240px;"> -->

<section class="cta-sect wow fadeIn lazyload " data-wow-duration="2s">
    

    <div class="background"></div>
        <div class="container">
            <div class="text text-center">
                <h2 class="text-center text-light">
                    Let’s Make it Happen!
                </h2>

                <p>
                    Ready to take your brand to the world stage? Let’s collaborate and create something extraordinary
                </p>
                <div class="btn-box-cta text-center">
                    <a href="<?= $func->dm_whatsapp() ?>" class="btn">Let’s Get Started</a>
                </div>
            </div>
        </div>



</section>

<!-- </div> -->