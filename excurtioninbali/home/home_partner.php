<style>
	.partner img {
        object-fit: cover;
        height: 110px;
    }

@media (max-width: 768px) {
    .partner img {
        object-fit: cover;
        height: 70px;
        margin-bottom: 15px;
    }

    .partner .col-md-3 { padding:0px 7px; }
}
</style>

<section class="py-5" style="background: #f8f8f8;">
    <div class="container wow fadeIn" data-wow-duration="2s">
        <div class="text-center title-product">
            <span><?= $data->web->site_name ?></span>
            <h2>Our Partner</h2>
            <p>Ubud Sunrise Hiking is not just limited to our website. You can find and book our exceptional sunrise tours on multiple platforms, including renowned names like </p>
        </div>

        <div class="row partner">
            <div class="col-md-3 col-6">
                <a href="https://www.booking.com/attractions/id/prjuegtw7kml-mount-batur-guided-sunrise-hike.html"><img class="img-fluid w-100" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1698133999-24-10-2023-db69whMDx1vAat4sSz30mZkNcB5KIJyV.webp" alt="Booking.com"></a>
            </div>

            <div class="col-md-3 col-6">
                <a href="https://www.viator.com/tours/Ubud/Ubud-Sunrise-Hiking-and-Breakfast/d5467-74109P1"><img class="img-fluid w-100" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1698133999-24-10-2023-h0FGWsXROajJV5gfEc41bed93AlY7pUn.webp" alt="Viator"></a>
            </div>

            <div class="col-md-3 col-6">
                <a href="https://www.civitatis.com/en/bali/mount-agung-sunrise-hiking-tour/#description"><img class="img-fluid w-100" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1698134644-24-10-2023-7j2xLC3cYrItpDhH1y0kBzW6GPJNq5uR.webp" alt="Civitatis"></a>
            </div>

            <div class="col-md-3 col-6">
                <a href="https://www.seeksophie.com/operators/ubud-sunrise-hiking"><img class="img-fluid w-100" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1698134644-24-10-2023-yWTKZSatwkMEAn2v0qXbeos8LgQP3R1p.webp" alt="Seek Sophie"></a>
            </div>
        </div>

    </div>
</section>