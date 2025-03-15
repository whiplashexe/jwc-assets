<style>
    .popupnih {
        opacity: 0;
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        height: 100%;
        padding-top: 100px;
        overflow: auto;
        background: #42414150;
        backdrop-filter: blur(10px);
        align-items: center;
        justify-content: center;
        transition: opacity 0.8s ease;
        font-family: var(--primarytext);
    }

    .popupnih.active {
        opacity: 1;
    }

    .popupnih-content {
        background-color: #fff;
        width: 95%;
        max-width: 55rem;
        overflow: hidden;
        border-radius: 2px;
        margin: auto;
        position: relative;
        border-radius: 5px;
        text-align: center;
    }

    @keyframes animateout {
      from {
        opacity: 1;
      }
      to {
        opacity: 0;
      }
    }

    .close-popup {
        color: white;
        font-size: 25px;
        line-height: 31px;
        font-weight: bold;
        padding: 0;
        width: 30px;
        height: 30px;
        border-radius: 100px;
        background: #ce1f03;
        transition: 0.4s ease-out;
        position: absolute;
        cursor: pointer;
        right: 30px;
        top: 20px;
    }

    .close-popup:hover,
    .close-popup:focus,{
      color: #111;
      text-decoration: none;
      cursor: pointer;
    }

    .wrap-popup-first {
        position: relative;
        text-align: left;
        padding: 30px 40px;
    }

   .wrap-popup-first h3 {
        text-transform: capitalize;
        font-weight: 500;
        letter-spacing: 0.1px;
        line-height: 45px;
        font-size: 35px;
        margin-bottom: 15px;
        font-family: var(--primtext);
    }

    .wrap-popup-first p {
        font-family: var(--subtext);
        font-size: 14px;
        line-height: 28px;
    }

    .wrap-popup-first span {
        color: var(--colors);
        font-size: 15px;
        display: block;
        margin-bottom: 10px;
        font-family: var(--subtext);
    }

    .popupnih img {
        height: 500px;
        object-fit: cover;
        width: 100%;
    }

    .wrap-popup-first a {
        background: var(--colors);
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 10px 25px;
        border-radius: 100px;
        margin-top: 15px;
        transition: all ease 500ms;
    }

    .wrap-popup-first a:hover {
        background: black;
        color: white;
    }

@media (max-width: 768px) {
    .wrap-popup-first {
        padding: 25px;
    }

    .popupnih { padding-top: 15px; }

    .popupnih-content { width:90%; }

    .popupnih img {
        height: 100%;
    }

    .wrap-popup-first span {
        font-size: 13px;
        margin-bottom: 5px;
    }

    .wrap-popup-first h3 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 15px;
    }

    .wrap-popup-first p {
        font-size: 13px;
    }

    .wrap-popup-first a {
        padding: 5px 20px;
        font-size: 11px;
        margin-top: 10px;
    }
}


 </style>

<div class="popupnih" id="popupnih">
    <div class="popupnih-content">

        <div class="row">
            <div class="col-md-6 order-2 order-lg-1" style="align-self: center;">
                <div class="wrap-popup-first">
                    <span>Special Offers</span>
                    <h3>Celebrate the New Year at Water Blow Huts</h3>
                    <p>End the year in paradise at Water Blow Huts! Enjoy stunning ocean views, serene beaches, and memorable moments. Book now to make your New Year celebration truly unforgettable.</p>

                    <a class="btn" href="https://waterblowhuts.com/category/rooms-suites"><i class="fa-regular fa-calendar mr-2"></i>Reserve Now</a>

                </div>
            </div>

            <div class="col-md-6 order-1 order-lg-2">
                <img class="img-fluid" loading="lazy" alt="Promo & Offers" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733560730-07-12-2024-n1vpzHAo84grUjaFWxqwCf2mdNhYkQXs.jpg">

                <span class="close-popup" id="closeBtn">&times;</span>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const popupnih = document.getElementById("popupnih");
        const closeBtn = document.getElementById("closeBtn");

        // Tampilkan popupnih secara otomatis setelah website dimuat
        setTimeout(function() {
            popupnih.classList.add("active");
        }, 1500);

        // Tutup popupnih ketika tombol "Close" diklik
        closeBtn.addEventListener("click", function() {
            popupnih.style.animationName = "animateout";
            popupnih.style.animationDuration = "0.8s";            
            popupnih.addEventListener("animationend", function handler() {
              popupnih.style.display = "none";
              popupnih.style.animationName = ""; // Reset animation name
              popupnih.removeEventListener("animationend", handler);
            });
        });
    });
</script>

