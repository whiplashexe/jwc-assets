<style type="text/css">
    
    /* ==================== Paralax =================== */
.paralax {
    height: 80vh;
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
    overflow: hidden;
    filter: brightness(.7);

    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741847252-13-03-2025-n956XKrvGfpsHYbRaSCMq8UwitJzPd2j.webp);
}

.paralax .background:before {
    content: '';
    position: absolute;
    background: var(--color2);
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .3;
}
.paralax .background .element-top{
    background: repeating-linear-gradient(
        to left, 
        var(--color2), 
        var(--color2) 10px,
        transparent 10px,
        transparent 20px
    ); 
    content: '';
    left: 0px;
    position: absolute;
    top: 0%;
    width: 20%;
    height: 20%;
}
.paralax .background .element-bottom{
    background: repeating-linear-gradient(
        to right, 
        var(--color2), 
        var(--color2) 10px,
        transparent 10px,
        transparent 20px
    ); 
    content: '';
    right: 0px;
    position: absolute;
    bottom: 0%;
    width: 30%;
    height: 25%;
}

.paralax .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: center;
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
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 20px;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

.paralax .button {
    display: flex;
    align-items: center;
    justify-content: center;

}
.paralax .btn-par {
    background: var(--color2);
    color: #333;
    font-family: var(--subtext);
    padding: 10px 25px;
    font-size: 15px;
    border-radius: 25px;
    letter-spacing: 1px;
    text-transform: capitalize;
    transition: all ease 500ms;
}
.paralax .btn-par:hover {
    background: #fff;
    color: #000;
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
        padding: 10px 25px;
        font-size: 15px;
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



<section class="paralax wow fadeIn lazyload" data-wow-duration="2s">
    

    <div class="background">
        <div class="element-top"></div>
        <div class="element-bottom"></div>
    </div>
        <div class="container w-100" style="max-width: none; padding: 10vh 7%">
            <div class="text w-100">
                <h2 class=" text-light">
                    Hire a Bali Driver <br>And Discover the Island Hassle-Free!
                </h2>
                <p>
                    experience the best of Bali with a private driver and tailor-made tour packages. Book now for a seamless, comfortable, and unforgettable trip!
                </p>

                <div class="mt-4 efect-up">
                    <a href="#" class="btn btn-par">
                        Booking Now!
                    </a>
                </div>
            </div>
        </div>



</section>

<!-- </div> -->