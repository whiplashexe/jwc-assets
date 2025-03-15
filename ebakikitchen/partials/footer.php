<!-- <?= $func->load('home/home_contact_baru') ?> -->

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
        position: relative;
        letter-spacing: 1px;
        font-size: 20px !important;
        font-weight: 700 !important;
        margin-bottom: 30px;
        color: var(--colors) !important;
    }
    .title-foot-default:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        border-radius: 5px;
        width: 10%;
        height: 2px;
        background: var(--color2);
        transform: translateY(12px);
    }
    .title-foot-default:before {
        content: "";
        position: absolute;
        left: 13%;
        bottom: 0;
        border-radius: 5px;
        width: 25%;
        height: 2px;
        background: var(--colors);
        transform: translateY(12px);
    }
    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: #444;
        letter-spacing: 0.5px;
        text-align: left;
    }
    

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: #616161;
        margin-bottom: 3px;
        font-size: 15px;
        line-height: 30px;
    }
    .text-foot span {
        color:var(--colors);
        font-weight: 600;
    }
    .text-foot i { color: var(--colors); }

    .text-foot a {
        color: #616161 !important;
    }

    .text-foot a:hover { color:var(--colors) !important; }

    a.scroll-to-top.hidden-mobile.visible { display: none; }

    .img-avail { height: 53px; margin-bottom: 5px; }


.logfot { position:relative; margin-bottom:4rem; }

.logfot p {
    font-size: 15px;
    width: 510px;
    margin: auto;
    margin-top: 10px;
    line-height: 30px;
}



@media (min-width: 768px) {
      .logo-footer {
        width: 100%;
        margin-bottom: 10px;
        object-fit: contain;
        object-position: top;
    }
}

@media (max-width: 768px) {

    .text-sm-center { text-align:center; }

    .logo-footer {
        width: 70%;
        margin-bottom: 10px;
    }

    .text-footer { text-align:center; }

    .logfot p { width: auto; font-size: 14px; }
}

.social-icons:not(.social-icons-clean) li a {
    background: white;
}

.social-icons li a { color: #111827 !important; }

.social-icons li a i { line-height: 28px; }

.social-icons li { margin-right: 5px; }

ul.header-social-icons.social-icons {
    /* text-align: right; */
    margin-top: 20px;
}

html .scroll-to-top { display: none; }

#footer.short {
    padding: 0;
    padding-top: 50px;
}

.text-foot-p {font-size:14px;}

.foot-style {
    background-color: #fff !important; border-color: var(--color3) !important;
}

.foot-style-2 {
    border-top:1px solid #cbcbcb; position: relative; background: var(--colors); 
}

.fixwa { left: auto; right: 20px; bottom: 20px }

.share-icons { width: 50px }

footer input.form-control {
    margin-top: 15px;
    background: transparent;
    border: 1px solid #fff;
    border-radius: 0;
    width: 85%;
    margin-bottom: 25px;
    padding: 10px 25px;
    font-family: var(--primtext);
}

.btn-subs {
    font-family: var(--primtext);
    background: white;
    color: black !important;
    text-transform: uppercase;
    border-radius: 0;
    border: 1px solid;
    padding: 8px 20px;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 2px;
    transition: all ease 500ms;
}

.btn-subs:hover {
  background: black;
  color: white !important;
}

.foot-style .contact-box{
    background: var(--colors);
    border-radius: 5px;
}
.foot-style .contact-box .text-foot {
    color: #fff;
    font-size: 14px;
    line-height: 28px;
}
.foot-style .contact-box .ctc-icon i {
    background: #fff;
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    color: var(--colors);
}
.foot-style .contact-box .ct-title {font-weight: 600; font-size: 16px;}
.social-icons li {
    border: .3px solid #00000030;
    border-radius: 0;
}
.social-icons:not(.social-icons-clean) li {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.social-icons li a {
    border-radius: 0;
    height: 32px;
    line-height: 32px;
    width: 32px;
}
.social-icons:not(.social-icons-clean) li:hover a {
    color: #fff !important;
}
@media (max-width: 768px) {
    .foot-style .contact-box .text-foot {text-align: center;}
    .foot-style .contact-box .ctc-icon i {margin: 10px auto}
    .ctc-box { margin:0; }

    .foot-style .contact-box { margin-bottom:55px !important; }
}
/* ==================== Footer =================== */

</style>

<div class="smooth-slide" id="contact"></div>


<footer id="footer" class="foot-style short mt-0">
    <div class="container-global pb-4 wow fadeInUp">

        <div class="contact-box mb-md-5 mb-4 px-4 py-3">
            <div class="row" style="justify-content: space-around;">
                <div class="col-md-4 d-flex align-items-center">
                    <div class="ctc-box row w-100  align-items-center">
                        <div class="ctc-icon col-md-2">
                            <i class="fa-solid fa-location-crosshairs"></i>
                        </div>
                        <div class="ctc-txt pl-3 col-md-10">
                            <p class="text-foot ct-title">Address</p>
                            <p class="text-foot txt-add"><?= $data->company->company_address ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div class="ctc-box row w-100 align-items-center">
                        <div class="ctc-icon col-md-3">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="ctc-txt pl-3 col-md-9">
                            <p class="text-foot ct-title">Send Email</p>
                            <a href="<?= $func->dm_email() ?>">
                                <p class="text-foot txt-add">
                                    <?= $data->company->company_email ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div class="ctc-box row w-100 align-items-center">
                        <div class="ctc-icon col-md-3">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="ctc-txt pl-3 col-md-9">
                            <p class="text-foot ct-title">Call Emergency</p>
                            <a href="<?= $func->dm_telphone() ?>">
                                <p class="text-foot txt-add">
                                    <?= $data->company->company_telp ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center wow fadeIn" data-wow-duration="2s">

            <div class="col-md-3 mb-4 mb-md-0">
                <img loading="lazy" class="img-fluid logo-footer" src="<?= $data->web->site_logo_alternative ?>" alt="Logo <?= $data->web->site_name ?>">
                <p class="text-foot text-foot-p">Enjoy a tropical dining experience at E-Baki Kitchen & Music, Tegallalang. Stunning rice field views, delicious food, and live music await you!</p>
                

                <ul class="header-social-icons social-icons">
                   <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>

            </div>

            <div class="col-md-2 mb-3 mb-md-0">
                <h3 class="title-foot-default">Quick Links</h3>
                
                <p class="text-foot text-foot-linkk"><i class="fa-solid fa-angles-right mr-3"></i><a href="<?= base_url() ?>about-us">About Us</a></p>
                <p class="text-foot text-foot-linkk"><i class="fa-solid fa-angles-right mr-3"></i><a href="<?= base_url() ?>">Full Menu</a></p>
                <p class="text-foot text-foot-linkk"><i class="fa-solid fa-angles-right mr-3"></i><a href="<?= base_url() ?>">Live Music & Events</a></p>
                <p class="text-foot text-foot-linkk"><i class="fa-solid fa-angles-right mr-3"></i><a href="<?= base_url() ?>">Our Blogs</a></p>
                <p class="text-foot text-foot-linkk"><i class="fa-solid fa-angles-right mr-3"></i><a href="<?= base_url() ?>">Contact Us</a></p>

            </div>

            <div class="col-md-3 mb-4 mb-md-0">
                <h3 class="title-foot-default">Opening Hours</h3>
                <p class="text-foot mb-3">We're open daily. come enjoy delicious food, live music, and scenic views!</p>
                <p class="text-foot mb-3">Open Daily : <span>11 am – 10 pm</span></p>
                <div id="TA_excellent896" class="TA_excellent"><ul id="zWPEqJR94gJB" class="TA_links or18pRank"><li id="fHUzBqjtN7mn" class="Yigy6Gz"><a target="_blank" href="https://www.tripadvisor.com/Restaurant_Review-g608497-d27775200-Reviews-E_baki_Kitchen_Music-Tegalalang_Gianyar_Regency_Bali.html"><img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=896&amp;locationId=27775200&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>

            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Our Location</h3>
                <iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>

    <div class="py-3 py-md-4 mt-4 text-sm-center foot-style-2">

        <div class="row justify-content-center text-center">
            <div class="col-md-12 mb-md-0 mb-3">
                <p class="text-footer text-light text-center">© Copyright <?= date('Y') ?> <b><?= $data->web->site_name ?></b>. All Rights Reserved. Powered By <a href="https://www.jasawebcreator.com/"><b style="color: #fff">Jasa Web Creator</b></a></p>
            </div>

        </div>

    </div>

</footer>

</div>

<div class="fixed-bottom fixwa" style="left: auto; right: 20px; bottom: 20px">
    <div class="share-icons" style="width: 50px">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="<?= $func->dm_whatsapp() ?>" class="text-decoration-none"><i class="fab fa-whatsapp icon-custom"></i></a>
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

<script src="https://unpkg.com/lenis@1.2.0/dist/lenis.min.js"></script>

<script>
  
const lenis = new Lenis({
  autoRaf: true,
});

lenis.on("scroll", (e) => {});

</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="fwhFN9Lu"></script>

<script>
$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")}),$(document).ready(function(){var n=$("#menu-button"),i=$("#menuWrapper"),l=$("#close");n.on("click",function(){i.addClass("show-box")}),l.on("click",function(){i.removeClass("show-box")})});var i,linkCollapse=document.getElementsByClassName("child-toggle");for(i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",function(){this.nextElementSibling.classList.toggle("show-child-menus")});$(document).on("click",".menu-prosing",function(){$(this).addClass("active").siblings().removeClass("active")});
</script>

<script>
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
  $('.slider-imggg').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
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
  $('.slick-center').slick({
  centerMode: true,
  centerPadding: '0px',
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


$(document).ready(function(){
  $('.carousel-wall').slick({
    autoplay: true,           // Aktifkan autoplay
    autoplaySpeed: 0,         // Tidak ada jeda antara slide
    speed: 15000,              // Kecepatan transisi slide
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
        slidesToShow: 3,
        slidesToScroll: 3,
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
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
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
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
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
  $('.rowdesi').slick({
    autoplay: true,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 2000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
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
  $('.product-slick').slick({
    autoplay: true,
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
 
</script>

 <script type="text/javascript"> function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: "id", autoDisplay: false }, "google_translate_element2"); } </script> <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> <script type="text/javascript"> eval(function(e,t,n,r,a,c){if(a=function(e){return(e<43?"":a(parseInt(e/43)))+((e%=43)>35?String.fromCharCode(e+29):e.toString(36))},!"".replace(/^/,String)){for(;n--;)c[a(n)]=r[n]||a(n);r=[function(e){return c[e]}],a=function(){return"\\w+"},n=1}for(;n--;)r[n]&&(e=e.replace(new RegExp("\\b"+a(n)+"\\b","g"),r[n]));return e}("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",0,43,"||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"),0,{})) </script>


    <?= $func->xview_footer() ?>

</body>

</html>