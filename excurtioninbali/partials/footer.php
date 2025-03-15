<?= $func->load('home/home_contact') ?>

</div>

<style>


#chatbtn{
    background: #089dff;
    color: #fff;
    width: 50px;
    height: 50px;
    font-size: 20px;
    outline: none;
    border-radius: 50%;
    float: right;
    cursor: pointer;
    border: none;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    z-index: 9999;
}

    .sosmed .facebook i{background-color: #4267b2;}
    .sosmed .instagram i{background-color: #d10869;}
    .sosmed .whatsapp i{background-color: #25d366;}
    .sosmed .messenger i {background-color: #0084ff;}
    .sosmed .telegram i {background-color: #51bae7;}
    .sosmed .youtube i {background-color: red;}
    .sosmed .email i{background-color: #f17721}
    .fixed-bottom #sosmed a i{
        margin:5px auto;
        display: block;
        color: #FFF;
        padding: 12px;
        opacity: 0.8;
        text-align: center;
    }

    html .scroll-to-top{
    bottom: 25px;
    border-radius: 5px;
    right: 80px;
    }

    .icon-custom {
        font-size: 25px !important;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .title-foot-default {
        font-family: var(--primtext);
        text-transform: capitalize;
        letter-spacing: 0px;
        font-size: 23px !important;
        font-weight: 600 !important;
        margin-bottom: 30px;
        color: var(--colors) !important;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: #fff;
        letter-spacing: 0.5px;
        font-size: 14px;
        text-align: left;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: #fff;
        margin-bottom: 3px;
        font-size: 15px;
        letter-spacing: 0px;
        line-height: 28px;
    }

    .text-foot i { color: #fff; }

    .text-foot a {
        color: #fff !important;
  }

    a.scroll-to-top.hidden-mobile.visible { display: none; }

    .img-avail { height: 53px; margin-bottom: 5px; }


.logfot { position:relative; margin-bottom:4rem; }

.logfot p {
    font-size: 16px;
    width: 510px;
    margin: auto;
    margin-top: 10px;
    line-height: 30px;
}

.txt-add { width:320px; }

@media (min-width: 768px) {
      .logo-footer {
        height: 90px;
        margin-bottom: 10px;
        object-fit: cover;
        margin-top: 1rem;
    }
}

@media (max-width: 768px) {

    .whatsapp-text { display: none; }

    .text-sm-center { text-align:center; }

    .logo-footer {
        height: 70px;
        margin-bottom: 10px;
    }
    #footer.short {
        padding-top: 3rem;
    }

    .text-footer { text-align:center; }

    .logfot p { width: auto; font-size: 14px; }
}

.social-icons:not(.social-icons-clean) li a {
    background: var(--colors);
}

.social-icons li a { color: #fff !important; }

.social-icons li a i { line-height: 28px; color: #fff !important; }

.social-icons li { margin-right: 5px; }

ul.header-social-icons.social-icons {
    /* text-align: right; */
    margin-top: 20px;
}

html .scroll-to-top { display: none; }

#footer.short {
    padding: 0;
    padding-top: 5rem;
}

.foot-style {
    background-color: var(--colors) !important;
    border-color: var(--colors) !important;
    position: relative;

}

.foot-style-2 {
    border-top: 1px solid #ffffff30;
    position: relative;
    background: transparent;
}

.fixwa { left: auto; right: 20px; bottom: 20px }

.share-icons { width: 50px }

img.img-sosmed {
    height: 30px;
    margin-right: 10px;
}

.list-link p a i {
    color: #fff;
}
.list-link p {
    font-family: var(--subtext);
    color: #acacac;
    margin-bottom: 10px;
    font-size: 14px;
}

.list-link p a {
    color: #fff !important;
}

.list-link p a:hover {
    color: var(--color2) !important;
}
.background {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: black;
}
</style>

<footer id="footer" class="foot-style short mt-0">
    <div class="background"></div>

    <div class="container-global pb-4 wow fadeInUp" style="position: relative; z-index: 3;">


        <div class="row justify-content-center wow fadeIn" data-wow-duration="2s">

            <div class="col-md-4 mb-4 mb-md-0">
                <img loading="lazy" class="img-fluid logo-footer" style="object-fit: contain;" src="<?= $data->web->site_logo_alternative ?>" alt="Logo <?= $data->web->site_name ?>">
                <p class="text-foot txt-add mt-3 "><?= $data->company->company_address ?></p>
                <p class="text-foot"><i class="fab fa-whatsapp mr-3"></i><a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20<?= $data->web->site_domain; ?>.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F">+<?= $data->social->whatsapp ?></a></p>
                <p class="text-foot mb-4"><i class="fa-solid fa-envelope mr-3"></i><a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Our Pages</h3>
                <div class="list-link">
                  <?php foreach($data->menu->primary_menu as $key=>$menu): ?>
                    <?php $menu = json_decode(json_encode($menu), true); ?>
                    <?php if (array_key_exists('child', $menu)): ?>
                        <p><a data-toggle="collapse" href="#collapseFooter<?= $key ?>" role="button" aria-expanded="false" aria-controls="collapseFooter<?= $key ?>">
                         <i class="fa-solid fa-arrow-right mr-2"></i><?= $menu['label'] ?>
                        </a></p>

                        
                        <div class="collapse" id="collapseFooter<?= $key ?>">
                        <div class="card card-body"  style="background-color: transparent; border: none; padding: 8px; margin-left: 1rem;">
                            <?php foreach($menu['child'] as $child): ?>
                            <a href="<?= $child['link'] ?>"><?= $child['label'] ?></a>
                            <?php endforeach; ?>
                        </div>
                        </div>
                    <?php else: ?>
                        <p><a href="<?= $menu['link']; ?>"><i class="fa-solid fa-arrow-right mr-2"></i><?= $menu['label'] ?></a></p>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <!--<h3 class="title-foot-default">Opening Hours</h3>-->
                <h3 class="title-foot-default">Informations</h3>
                
                <!-- <p class="text-foot mb-3"><i class="fas fa-clock mr-2"></i>9.00 AM - 5 PM, Monday - Sunday</p> -->

                <p class="text-foot mb-3">Ready to make your Bali adventure unforgettable!</p>

                <div class="list-sosmed mt-3">
                    <a href="<?= $data->social->facebook_url ?>"><img class="img-sosmed" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1732441677-24-11-2024-0FtsPe5j3oblMECd1JpSr8UIXnmN6OgV.svg" alt="Facebook Logo"></a>

                    <a href="<?= $data->social->instagram_url ?>"><img class="img-sosmed" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1732441677-24-11-2024-duE56KrGgHl392UCvcWxsmfRo1FYzXkn.webp" alt="Instagram Logo"></a>
                </div>

            </div>

            <!--<div class="col-md-3 mb-4 mb-md-0">
                <h3 class="title-foot-default">Our Tripadvisor</h3>
                
                <div id="TA_selfserveprop77" class="TA_selfserveprop"><ul id="UG8BWDt7" class="TA_links HDi6wLteusRt"><li id="DWRgGPEvr" class="ownPeRC"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g1025508-d32970992-Reviews-Treenity_Experiences-Mengwi_Bali.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=77&amp;locationId=32970992&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                
            </div>-->

        </div>
    </div>

    <div class="py-4 py-md-4 mt-4 text-sm-center foot-style-2">

        <div class="row justify-content-center text-center">
            <div class="col-md-12 mb-md-0 mb-3">
                <p class="text-footer text-center">© Copyright <?= date('Y') ?> <?= $data->web->site_name ?>. All Rights Reserved. Powered By <a href="https://jasawebcreator.com/"><b style="color: #fff">Jasa Web Creator</b></a></p>
            </div>

        </div>

    </div>

</footer>

</div>

<div class="fixed-bottom fixwa" style="left: auto; right: 20px; bottom: 20px">
    <div class="share-icons" style="width: 50px">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20<?= $data->web->site_domain; ?>.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F" class="text-decoration-none"><i class="fab fa-whatsapp icon-custom"></i></a>
        </div>
    </div>
</div>


<!-- Vendor -->
<?= $func->script("vendor/popper/umd/popper.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<?= $func->script("vendor/magnific-popup/jquery.magnific-popup.min.js") ?>
<!-- <script src="<?= base_url('assets') ?>/front/vendor/owl.carousel/owl.carousel.min.js"></script> -->

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets') ?>/front/js/theme.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets') ?>/front/js/wow.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/common/common.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.init.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/ls.bgset.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/lazysizes.min.js"></script>
<!-- <script src="<?= base_url('assets') ?>/front/js/examples/examples.gallery.js"></script> -->

<script>
    new WOW().init();
</script>

<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WC9WTSF');</script> -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="fwhFN9Lu"></script>

<script>
$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")}),$(document).ready(function(){var n=$("#menu-button"),i=$("#menuWrapper"),l=$("#close");n.on("click",function(){i.addClass("show-box")}),l.on("click",function(){i.removeClass("show-box")})});var i,linkCollapse=document.getElementsByClassName("child-toggle");for(i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",function(){this.nextElementSibling.classList.toggle("show-child-menus")});$(document).on("click",".menu-prosing",function(){$(this).addClass("active").siblings().removeClass("active")});

function toggleMessage(id, expand) {
    const messageElement = document.getElementById(id);
    const readMoreButton = messageElement.nextElementSibling;
    const readLessButton = readMoreButton.nextElementSibling;

    if (expand) {
        // Expand to full message
        messageElement.textContent = messageElement.getAttribute('data-full-message');
        readMoreButton.classList.add('d-none');
        readLessButton.classList.remove('d-none');
    } else {
        // Collapse to short message
        messageElement.textContent = messageElement.getAttribute('data-short-message');
        readMoreButton.classList.remove('d-none');
        readLessButton.classList.add('d-none');
    }
}

</script>

<script>
   
$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    dots: false,
    fade: true,
    autoplaySpeed: 5000,
    speed: 1000,
    infinite: true,
  });
});

$(document).ready(function(){
  $('.rowdes2').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});

$(document).ready(function(){
  $('.product-slick').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
  ]
  });
});

$(document).ready(function(){
  $('.review-slide').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });

});


$(document).ready(function(){
  $('.slick-center').slick({
  centerMode: true,
  centerPadding: '0px',
  prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
  slidesToShow: 1,
  focusOnSelect: true,
  arrows: true,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 1000,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});


$(document).ready(function(){
  $('.carousel-wall').slick({
    autoplay: true,           // Aktifkan autoplay
    autoplaySpeed: 0,         // Tidak ada jeda antara slide
    speed: 10000,              // Kecepatan transisi slide
    cssEase: 'linear',        // Efek transisi linear seperti marquee
    slidesToShow: 4,          // Jumlah slide yang ditampilkan sekaligus
    slidesToScroll: 1,        // Jumlah slide yang bergeser setiap kali
    infinite: true,           // Looping tanpa batas
    arrows: false,            // Sembunyikan navigasi panah
    dots: false,              // Sembunyikan navigasi dots
    pauseOnHover: false,      // Autoplay tidak berhenti saat hover

   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]

  });
});

$(document).ready(function(){
  $('.slick-cent22').slick({
  centerMode: true,
  centerPadding: '0px',
  prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
  slidesToShow: 1,
  focusOnSelect: true,
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 1000,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});
 
</script>

 <script type="text/javascript"> function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: "id", autoDisplay: false }, "google_translate_element2"); } </script> <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> <script type="text/javascript"> eval(function(e,t,n,r,a,c){if(a=function(e){return(e<43?"":a(parseInt(e/43)))+((e%=43)>35?String.fromCharCode(e+29):e.toString(36))},!"".replace(/^/,String)){for(;n--;)c[a(n)]=r[n]||a(n);r=[function(e){return c[e]}],a=function(){return"\\w+"},n=1}for(;n--;)r[n]&&(e=e.replace(new RegExp("\\b"+a(n)+"\\b","g"),r[n]));return e}("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",0,43,"||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"),0,{})) </script>


    <?= $func->xview_footer() ?>

</body>

</html>