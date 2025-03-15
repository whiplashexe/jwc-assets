<style>
  html .scroll-to-top {
    display: none;
  }

  #__footer-root {
    background-color: var(--colors);
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: var(--primtext);
    text-align: center;
    flex-direction: column;
  }

  #__footer-root #__footer-wrapper {
    width: 100%;
    padding: 2rem;
    max-width: 85%;
    display: flex;
    gap: 2px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  #__footer-root #__footer-wrapper #__social-media-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin: 10px 0;
  }
  #__footer-root #__footer-wrapper #__brand-logo {
    margin: 20px 0;
    width: 120px;
  }
  #__footer-root #__footer-wrapper #__social-media-wrapper a img {
    width: 35px;
    aspect-ratio: 1/1; 
  }

  #__footer-root #__footer-wrapper p#__highlight {
    display: none;
    text-align: center;
    color: white;
  }

  #__footer-root #__footer-wrapper p {
    padding: 0;
    margin: 0;
    color: white;
  }

  #__footer-root #__footer-wrapper #__address-wrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 2px;
    align-items: center;
  }

  #__footer-root #__footer-bottom {
    border-top: 1px solid white;
    width: 100%;
    padding: 2rem;
    color: white;
  }

  @media screen and (min-width: 40rem) {
    #__footer-root #__footer-wrapper p#__highlight {
      display: inline
    }
    #__footer-root #__footer-wrapper #__address-wrapper {
      flex-direction: column-reverse;
    }
  }
</style>

<footer id="__footer-root">
  <div id="__footer-wrapper">
    <p id="__highlight">here we are from Bali for the world's Traveler. prioritize in quality service, knowledgeable, and transparent price</p>
    <div id="__address-wrapper">
      <p class="__address-2">PT. Favotrip Bali Tour . <a href="<?= $func->dm_whatsapp() ?> ">+62 81246918754</a></p>
      <p class="__address-1"><i class="fa-solid fa-location-pin"></i> <?= $data->company->company_address ?></p>
    </div>
    <div id="__social-media-wrapper">
      <a href="<?= $data->social->instagram_url ?>" title="instagram">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1739507579-14-02-2025-34misrY2thEqz5nkWI9oBZgJlXQR6CpK.webp" alt="instagram">
      </a>
      <a href="<?= $data->social->facebook_url ?>" title="facebook">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1739508437-14-02-2025-0sEi2Qk3InRhUGqHd8A4Nry7wmtDX16a.webp" alt="facebook">
      </a>
      <a href="https://www.tripadvisor.com/Attraction_Review-g1953908-d32968671-Reviews-Favotrip_Bali_Tour-Klungkung_Bali.html" title="facebook">
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740194322-22-02-2025-rl3QzAway8U6XcdTRtmuP1B4HLsE2GjM.webp" alt="TripAdvisor">
      </a>
    </div>

    <!--<div id="TA_rated857" class="TA_rated mt-3"><ul id="88I0PYbA" class="TA_links kAcl7SUY"><li id="kvNGOy" class="jftUDSZtzH"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g1953908-d32968671-Reviews-Favotrip_Bali_Tour-Klungkung_Bali.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=857&amp;locationId=32968671&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>-->

    <img id="__brand-logo" src="<?= $data->web->site_logo_alternative ?>" alt="brand-logo">
  </div>
  <div id="__footer-bottom">©️ Copyright 2025 Favotrip Bali Tour. All Rights Reseved.</div>
</footer>
</div>

<div class="fixed-bottom fixwa" style="left: auto; right: 0; bottom: 0">
    <div class="share-icons">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="<?= $func->dm_whatsapp() ?>" class="text-decoration-none">
              <img style="width: 60px; aspect-ratio: 1/1; margin: 20px" src="https://jwc.gotra-resources.my.id/web-upload/1739508801-14-02-2025-g4d2RGs8ZNLUiOW6CQnFqcMkwfaS3mBh.webp" alt="whatsapp">
            </a>
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
  $('.product-slick').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1100,
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
  $('.product-slick-single-item-mobile').slick({
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
          slidesToShow: 1,
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
  $('.slider-sing').slick({
    autoplay: false,
    draggable: true,
    arrows: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    fade: true,
    speed: 300,
    infinite: true,
  });
});

</script>

 <script type="text/javascript"> function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: "en", autoDisplay: false }, "google_translate_element2"); } </script> <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> <script type="text/javascript"> eval(function(e,t,n,r,a,c){if(a=function(e){return(e<43?"":a(parseInt(e/43)))+((e%=43)>35?String.fromCharCode(e+29):e.toString(36))},!"".replace(/^/,String)){for(;n--;)c[a(n)]=r[n]||a(n);r=[function(e){return c[e]}],a=function(){return"\\w+"},n=1}for(;n--;)r[n]&&(e=e.replace(new RegExp("\\b"+a(n)+"\\b","g"),r[n]));return e}("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",0,43,"||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"),0,{})) </script>


    <?= $func->xview_footer() ?>

</body>

</html>