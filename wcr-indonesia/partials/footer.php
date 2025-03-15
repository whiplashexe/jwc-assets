
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
        font-family: 'DINNextRoundedLTW01-Light';
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 17px !important;
        font-weight: 700 !important;
        margin-bottom: 20px;
        color: #fff !important;
    }

    .contact-default {
        padding: 0px;
        list-style: none;
    }

    .contact-default li {
        padding-left: 0px;
        position: relative;
        margin-bottom: 15px;
    }

    ul.contact-default li i {
        position: absolute;
        left: 0px;
        top: 5px;
        font-size: 17px;
        color: #01b3a7;
    }

    .contact-default a, .foot-text {
        font-family: 'Montserrat';
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #eee;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: 'DINNextRoundedLTW01-Light';
        color: #fff;
        letter-spacing: 0.5px;
        text-align: center;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: 'DINNextRoundedLTW01-Light';
        color: #eee;
        margin-bottom: 3px;
        font-size: 15px;
    }

    .text-foot a {
        color: #fff !important;
    }

    a.scroll-to-top.hidden-mobile.visible { display: none; }

    .img-avail { height: 53px; margin-bottom: 5px; }

    
@media (min-width: 768px) {
    .logo-footer {
        height: 200px;
        margin-bottom: 10px;
    }
}

@media (max-width: 768px) {
    .logo-footer {
        margin-bottom: 10px;
        height: 120px;
    }

}


</style>

<footer id="footer" class=" short mt-0" style="background-color: var(--colors); border-color: var(--colors); margin-top: -22px !important;">
    <div class="container pb-3 wow fadeInUp" style="max-width: 1340px;">
        <div class="row">

            <div class="col-md-3">
                <img class="img-fluid logo-footer" alt="logo wcr indonesia" src="<?= $data->web->site_logo ?>">
                <p class="text-foot mb-3">Bergabunglah dengan kami dalam mewujudkan visi ketahanan yang kuat untuk perempuan dan anak-anak.</p>

            </div>

            <div class="col-md-3">
                <h4 class="title-foot-default">Contact Us</h4>
                <p class="text-foot"><b>Address : </b><?= $data->company->company_address ?></p>
                <p class="text-foot"><b>Email : </b><a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>

                <ul class="header-social-icons social-icons my-3">
                    <?php if (!empty($data->social->facebook_url)): ?>
                        <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->twitter_url)): ?>
                        <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->instagram_url)): ?>
                        <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->youtube_url)): ?>
                        <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->googleplus_url)): ?>
                        <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>" title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
                    <?php endif ?>

                </ul>

                <!-- <h4 class="title-foot-default">Available on :</h4>
                <img class="img-fluid img-avail" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1647419804-16-03-2022-gvZluiKRj2YQ7rshNaqLyzAeHEG3nfOC.jpg">
                <img class="img-fluid img-avail" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1647419804-16-03-2022-KRT58Aad0xf7O39ov6CsIMPZWtY2jLQh.webp">
                <img class="img-fluid img-avail" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1647419804-16-03-2022-RmB0HscwW3K7FoMA8u91reUYdDLIiGQX.png">
                <img class="img-fluid img-avail" src="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1647419804-16-03-2022-Bhjfb3vnRdJum5OGSI8wWMCKpL7sZcPU.jpg"> -->

            </div>

            <div class="col-md-3">
                <h4 class="title-foot-default">Location Map</h4>
                <iframe src="<?= $data->google_maps ?>" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-3">
                <h4 class="title-foot-default">Our Instagram</h4>

                <div style="position: relative; height: 400px; overflow-y: scroll;">
                    
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C268cADxpjX/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C268cADxpjX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" > <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C268cADxpjX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" >Sebuah kiriman dibagikan oleh Women &amp; Children Resilience (WCR) (@wcr.indonesia)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

                </div>

            </div>

        </div>
    </div>
    <div class="container-fluid py-4" style="border-top:1px solid #3b0f53; position: relative; background: #3b0f53;">
        <div class="container">
            <p class="text-footer">© Copyright <?= date('Y') ?> <?= $data->web->site_name ?>. All Rights Reserved. Powered By Jasawebcreator.com</p>
        </div>
    </div>
</footer>
</div>


<div class="fixed-bottom" style="left: auto; right: 20px; bottom: 20px">
    <div class="share-icons" style="width: 50px">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="<?= $func->dm_whatsapp() ?>" class="text-decoration-none"><i class="fab fa-whatsapp icon-custom"></i></a>
        </div>
    </div>
</div>

 
</script>
<!-- Vendor -->
<?= $func->script("vendor/popper/umd/popper.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<?= $func->script("vendor/magnific-popup/jquery.magnific-popup.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/owl.carousel/owl.carousel.min.js"></script>


<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets') ?>/front/js/theme.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets') ?>/front/js/wow.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/common/common.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.init.js"></script>
<script src="<?= base_url('assets') ?>/front/js/ls.bgset.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/lazysizes.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/examples/examples.gallery.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")}),$(document).ready(function(){var n=$("#menu-button"),i=$("#menuWrapper"),l=$("#close");n.on("click",function(){i.addClass("show-box")}),l.on("click",function(){i.removeClass("show-box")})});var i,linkCollapse=document.getElementsByClassName("child-toggle");for(i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",function(){this.nextElementSibling.classList.toggle("show-child-menus")});$(document).on("click",".menu-prosing",function(){$(this).addClass("active").siblings().removeClass("active")});
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 <script type="text/javascript"> function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: "is", autoDisplay: false }, "google_translate_element2"); } </script> <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> <script type="text/javascript"> eval(function(e,t,n,r,a,c){if(a=function(e){return(e<43?"":a(parseInt(e/43)))+((e%=43)>35?String.fromCharCode(e+29):e.toString(36))},!"".replace(/^/,String)){for(;n--;)c[a(n)]=r[n]||a(n);r=[function(e){return c[e]}],a=function(){return"\\w+"},n=1}for(;n--;)r[n]&&(e=e.replace(new RegExp("\\b"+a(n)+"\\b","g"),r[n]));return e}("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",0,43,"||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"),0,{})) </script>

    <?= $func->xview_footer() ?>
    <script>
    const swiper = new Swiper(".swiper", {
       
       navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
   
      });
  
    </script>
<script>

$(document).ready(function(){
  $('.carousel-wall').slick({
    autoplay: true,           // Aktifkan autoplay
    autoplaySpeed: 0,         // Tidak ada jeda antara slide
    speed: 9000,              // Kecepatan transisi slide
    cssEase: 'linear',        // Efek transisi linear seperti marquee
    slidesToShow: 6,          // Jumlah slide yang ditampilkan sekaligus
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
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]

  });
});


$(document).ready(function(){
  $('.carousel-wall1').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 9000,
    cssEase: 'linear',
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,

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
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
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