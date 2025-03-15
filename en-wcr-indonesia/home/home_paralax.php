<style type="text/css">

.bg-paralax {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
}

.bg-paralax:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: black;
    opacity: .6;
}

.paralax {
    padding: 5rem 0px;
}

.wrap-paralax h2 {
    margin-bottom: 22px;
    font-family: forum;
    font-weight: 700;
    color: white;
    letter-spacing: 0.5px;
    font-size: 45px;
}

.wrap-paralax p {
    margin-bottom: 30px;
    font-family: poppins;
    font-size: 14px;
    font-weight: 300;
    color: #f1f1f1;
    padding: 0px 220px;
}

.btn-paralax1 {
    padding: 10px 30px;
    border: 1px solid white;
    border-radius: 2px;
    color: white;
    font-family: 'Poppins';
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-right: 10px;
    transition: all ease 500ms;
}

.btn-paralax2 {
    padding: 10px 30px;
    background-color: var(--colors);
    border-radius: 2px;
    color: white;
    font-family: 'Poppins';
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-right: 10px;
    transition: all ease 500ms;
}

.btn-paralax1:hover {
    background-color: white;
    color: #111;
    transition: all ease 500ms;
}

.btn-paralax2:hover {
    background-color: transparent;
    color: white;
    transition: all ease 500ms;
    border: 1px solid white;
}

@media (max-width: 768px) {
    .wrap-paralax h2 {
        margin-bottom: 20px;
        font-family: Forum;
        font-weight: 700;
        color: white;
        letter-spacing: 0.1px;
        font-size: 30px;
    }

    .wrap-paralax p {
        margin-bottom: 30px;
        font-family: Poppins;
        font-weight: 300;
        font-size: 12px;
        color: #f1f1f1;
        padding: 0px;
        line-height: 22px;
    }

    .btn-paralax1 {
        padding: 10px 20px;
        border: 1px solid white;
        border-radius: 2px;
        color: white;
        font-family: 'Poppins';
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-right: 10px;
        transition: all ease 500ms;
    }

    .btn-paralax2 {
        padding: 10px 20px;
        background-color: var(--colors);
        border-radius: 2px;
        color: white;
        font-family: 'Poppins';
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-right: 10px;
        font-size: 12px;
        transition: all ease 500ms;
    }

    .bg-paralax { background-attachment: unset; }
}

</style>

<section class="paralax bg-paralax lazyload" data-bgset="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1648535742-29-03-2022-m3zoZhxQvpiVtHeC2j46Ts0drwnMWNEI.jpg">
    <div class="container position-relative wrap-paralax text-center" style="z-index: 1;">
        <h2>Special Offer and Save More</h2>
        <p>Ideally situated on Sunset Road Boulevard in the trendy Seminyak area in Bali. Sense Sunset Hotel Seminyak is the perfect choice for leisure travelers, business travelers and coorporate meetings. </p>

        <a class="btn btn-paralax1" href="https://sensesunsetseminyak.com/category/our-rooms">See All Rooms!</a>
        <a class="btn btn-paralax2" href="https://app-apac.thebookingbutton.com/properties/sensesunsetseminyakhotdirect?check_in_date=18-05-2022&check_out_date=19-05-2022&number_adults=2">Direct Booking!</a>
    </div>
</section>