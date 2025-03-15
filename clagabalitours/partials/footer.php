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
  .social-icons:not(.social-icons-clean) li a {
    background: #fff!important;
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
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 18px !important;
        font-weight: 700 !important;
        margin-bottom: 30px;
        color: #fff !important;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: #ddd;
        letter-spacing: 0.5px;
        text-align: left;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: #ddd;
        margin-bottom: 3px;
        font-size: 15px;
        line-height: 30px;
    }

    .text-foot i { color:#fff; }

    .text-foot a {
        color: #ddd !important;
  }

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

.foot-style {
    background-color: var(--colors) !important; border-color: var(--colors) !important;
}

.foot-style-2 {
    border-top:1px solid #ddd; position: relative; background: var(--colors); margin-left: 7%; margin-right: 7%;
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

/* ==================== Footer =================== */

</style>

<div class="smooth-slide" id="contact"></div>


<footer id="footer" class="foot-style short mt-0">
    <div class="container-global pb-4 wow fadeInUp">

        <div class="text-md-center text-left logfot">
          <img loading="lazy" class="img-fluid logo-footer" src="https://jwc.gotra-resources.my.id/web-upload/1740825922-01-03-2025-qmz7xM1FaWlDTnJerp5SLQCUR8IAcktK.webp" alt="Logo <?= $data->web->site_name ?>">
          <p class="text-foot"></p>
        </div>

        <div class="row justify-content-center wow fadeIn" data-wow-duration="2s">

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Address</h3>
                <p class="text-foot txt-add"><?= $data->company->company_address ?></p>

                <ul class="header-social-icons social-icons">
                   <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>

            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Contact</h3>
                <p class="text-foot"><i class="fa-solid fa-square-phone mr-3"></i>Phone :<a href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></p>
                <p class="text-foot mb-4"><i class="fa-solid fa-envelope mr-3"></i>Email :<a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>

            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Our Tripadvisor</h3>
                <div id="TA_selfserveprop319" class="TA_selfserveprop"><ul id="9Ur9Wz9T" class="TA_links IUqm1l"><li id="eHhkHiDEg2LK" class="Wd5c3U5l8M"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g23984724-d32993870-Reviews-Claga_Bali_Tours-Tegallalang_Gianyar_Regency_Bali.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=319&amp;locationId=32993870&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
                
            </div>

        </div>
    </div>

    <div class="py-3 py-md-4 mt-4 text-sm-center foot-style-2">

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

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="fwhFN9Lu"></script>

<script>
$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")}),$(document).ready(function(){var n=$("#menu-button"),i=$("#menuWrapper"),l=$("#close");n.on("click",function(){i.addClass("show-box")}),l.on("click",function(){i.removeClass("show-box")})});var i,linkCollapse=document.getElementsByClassName("child-toggle");for(i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",function(){this.nextElementSibling.classList.toggle("show-child-menus")});$(document).on("click",".menu-prosing",function(){$(this).addClass("active").siblings().removeClass("active")});
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
    infinite: true,
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
  $('.review-slide').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: true,
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
  $('.product-home').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    centerMode: true,
    centerPadding: '20px',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 4,
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
 
</script>


    <?= $func->xview_footer() ?>

</body>

</html>