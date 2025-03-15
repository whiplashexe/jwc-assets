<style>
   .why-section {
        position: relative;
        font-family: var(--primtext);
   }

   .title-primary {
        position: relative;
        text-align: center;
        margin-bottom: 50px;
   }

   .title-primary span {
        color: #fff;
        font-family: var(--primtext);
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 14px;
        line-height: 25px;
        display: block;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .title-primary h2 {
        font-family: var(--primtext);
        letter-spacing: 0px;
        color: white;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 35px;
        line-height: 55px;
        margin-bottom: 50px;
    }

    .why-section {
        position: relative;
        transition: all ease 500ms;
    }

     .why-section:hover i {
        background: var(--color2) !important;
        color: #fff !important;
    }

    .why-section i {
        background: var(--colors);
        font-size: 45px;
        width: 80px;
        height: 80px;
        text-align: center;
        line-height: 80px;
        border-radius: 15px;
        margin-bottom: 30px;
        color: #fff;
        transition: all ease 500ms;
    }

    .why-section h3 {
        font-family: var(--primtext);
        font-weight: 700;
        text-transform: capitalize;
        font-size: 22px;
        color: #fff;
        letter-spacing: 0px;
        margin-bottom: 15px;
    }

    .why-section p {
        color: #eee;
        font-size: 15px;
        font-family: var(--primtext);
    }
    .why .title-global .tag-atas {
        border: solid 1px #fff ;
        background: var(--colors);
        color: #fff;

    }
@media (max-width: 768px) {
    .why-section { text-align: center;}

    .title-primary { margin-bottom:30px; }

    .title-primary span {
        font-size: 11px;
        margin-bottom: 4px;
    }

    .title-primary h2 {
        font-size: 26px;
        line-height: 40px;
    }

    .container { padding: 0px 20px; }

    .why-section i {
        font-size: 40px;
    }

    .why-section h3 {
        font-size: 16px;
        margin-bottom: 6px;
    }

    .why-section p {
        font-size: 13px;
    }

    .col3636 { padding: 0 5px; }
}

</style>

<section class="pad6rem why wow fadeIn" data-wow-duration="2s" style="background: var(--colors);">
    <div class="container-global">

        <div class="title-global text-center">
            <span class="tag-atas" ><?= $data->web->site_name ?></span>
            <h2 style="color: #fff"><b>Why <?= $data->web->site_name ?> Stands Out</b></h2>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-user-tie"></i>
                    <h3>Expert Guided </h3>
                    <p>Explore Bali with professional local guides and customized tour packages.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-tags"></i>
                    <h3>Best Price Guarantee</h3>
                    <p>Affordable Bali tour packages with transparent pricing and no hidden fees.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-globe"></i>
                    <h3>Complete Travel Services</h3>
                    <p>From adventure tours, Nusa Penida trips, car rentals, to airport transfers.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-headset"></i>
                    <h3>24/7 Customer Support</h3>
                    <p>Hassle-free reservations with instant WhatsApp assistance.</p>
                </div>
            </div>
        </div>



    </div>
</section>