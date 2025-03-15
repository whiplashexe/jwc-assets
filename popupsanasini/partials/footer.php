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
        letter-spacing: 1px;
        font-size: 24px !important;
        font-weight: 600 !important;
        margin-bottom: 25px;
        color: #fff !important;
        text-transform: capitalize;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: #f1f1f1;
        letter-spacing: 0.5px;
        text-align: left;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: #f1f1f1;
        margin-bottom: 3px;
        font-size: 14px;
        line-height: 28px;
    }

    .text-foot i { color:#fff; }

    .text-foot a {
        color: #f1f1f1 !important;
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
    color: #111827 !important;
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
    background-color: #252525 !important; border-color: #252525 !important;
}

.foot-style-2 {
    position: relative; background: #1a1a1a;
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


        <div class="row justify-content-center wow fadeIn" data-wow-duration="2s">

            <div class="col-md-4 mb-4 mb-md-0">
                <img loading="lazy" class="img-fluid logo-footer" src="<?= $data->web->site_logo_alternative ?>" alt="Logo <?= $data->web->site_name ?>">
                <p class="text-foot">We helps Indonesian brands and SMEs break into international markets with affordable, strategic, and impactful pop-up activations.</p>

            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Contact Information</h3>
                <p class="text-foot"><i class="fa-solid fa-square-phone mr-3"></i>Phone :<a href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></p>
                <p class="text-foot mb-4"><i class="fa-solid fa-envelope mr-3"></i>Email :<a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>

                <ul class="header-social-icons social-icons">
                   <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>

            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Useful Links</h3>
                
                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="https://popupsanasini.com/what-we-offers">What We Offers</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="https://popupsanasini.com/how-it-works">How It Works</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="https://popupsanasini.com/article-category/blog-news">Blog & News</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="https://www.instagram.com/popupsanasini/">Success Stories</a></p>

            </div>

        </div>
    </div>

    <div class="py-3 py-md-4 mt-4 text-sm-center foot-style-2">

        <div class="row justify-content-center text-center">
            <div class="col-md-12 mb-md-0 mb-3">
                <p class="text-footer text-center">© Copyright <?= date('Y') ?> <b><?= $data->web->site_name ?></b>. All Rights Reserved. Part of <b style="color: #fff"><a href="https://skylensproduction.com/">Skylens Production</a></b></p>
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

<script src="https://unpkg.com/lenis@1.2.0/dist/lenis.min.js"></script>

<script>
    new WOW().init();
</script>

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