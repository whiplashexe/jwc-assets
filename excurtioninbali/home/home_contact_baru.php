<style>

/* Contact */

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
    font-weight: 400;
	letter-spacing: 1px;
    margin-bottom: 20px;
}

.wrap-cntact p {
    font-weight: 300;
    font-family: var(--subtext);
    color: #f1f1f1;
	letter-spacing: .5px;
    margin-bottom: 0px;
    font-size: 15px;
}

.wrap-cntact a {
    background: var(--colors);
    color: white;
    font-family: var(--subtext);
	border: 1px solid #fff;
    font-size: 15px;
    letter-spacing: 2px;
	text-transform: uppercase;
    border-radius: 0;
    padding: .8rem 2rem;
    transition: all ease 500ms;
    position: relative;
    z-index: 1;
}

.wrap-cntact a:hover {
    color: white;
    background: var(--color2);
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

    .wrap-cntact p { font-size:14px;}

    .wavy-atas, .wavy-bawah { display: none; }

    .wrap-cntact a { 
        font-size:14px; 
        padding:15px; 
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    
    .cntc2 p {margin-bottom: 25px!important}
    .cntc2 .col-xl-9 {margin-bottom: 1.2rem!important}
    .img-asbw, .img-asat { display:none; }
}


</style>

<section>
    <div class="wrap-cntact">
        <div class="container-global">
            <div class="row">
                <div class="col-xl-9 text-md-left text-center mb-5 mb-xl-0">
                    <h2>Looking for More Than Just a Stay?</h2>
                    <p>Experience the ultimate blend of culture, comfort, and nature in the heart of Ubud.</p>
                </div>

                <div class="col-xl-3 text-md-left text-center text-xl-right" style="align-self: center;">
                    <a href="<?= $func->dm_whatsapp() ?>">Book Now!</a>
                </div>
            </div>
        </div>

       
    </div>
</section>