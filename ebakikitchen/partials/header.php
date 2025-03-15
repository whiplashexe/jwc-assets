<?php 
$types = array('default','boxed','side_header');
$side = 'left';
$logo = 'true';
/*style header*/
$selected = 'default'; ?>

<!DOCTYPE html>
<html lang="en" class="
<?php if($types[1] == $selected){
	echo 'boxed';
	}elseif($types[2] == $selected){
		if($side == 'right'){
			echo 'side-header side-header-right';

			}else{
				echo 'side-header';
			}
			}else{

			}
			?>
			">
			<head>

				<!-- Basic -->
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
				<?= $func->redirectToHTTPS() ?>  

				<?= $func->favicon() ?>

				<title><?= $func->title_bar() ?></title>

				<?php if ($data->site_position == 'home'): ?>
                  <meta name="description" content="<?= $data->web->site_desc ?>">
                  <meta name="keywords" content="<?= $data->web->site_keyword ?>">
                  <meta name="title" content="<?= $data->web->site_name ?>">

                <?php elseif ($data->site_position == 'product_category' || $data->site_position == 'blog_category'): ?>

                  <meta name="description" content="<?= $data->cat_data->seo_desc ?>">
                  <meta name="keywords" content="<?= $data->cat_data->seo_keywords ?>">
                  <meta name="title" content="<?= $data->cat_data->seo_title ?>">

                <?php else: ?>

                  <meta name="description" content="<?= $data->web->site_desc ?>">
                  <meta name="keywords" content="<?= $data->web->site_keyword ?>">
                  <meta name="title" content="<?= $data->web->site_name ?>">

                <?php endif ?>

				<?= $func->meta_tag() ?>

				<!-- Mobile Metas -->
				<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

				<!-- Web Fonts  -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

				<!-- Vendor CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="<?= base_url('assets') ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
                <!-- <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.carousel.min.css" type="text/css" rel="stylesheet">
                <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.theme.default.min.css" type="text/css" rel="stylesheet"> -->

				 <?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
				<!-- Theme CSS -->
				<link href="<?= base_url('assets') ?>/front/css/theme.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/theme-elements.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/style-tour.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/colors.css" type="text/css" rel="stylesheet">

                <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

				<!-- Current Page CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/navigation.css" type="text/css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
                <script>const { animate, scroll, stagger, inView } = Motion</script>

				
<style>
:root{
	/*default*/	
	--boxed: #5f758d;
	--body: #e8f5e9;
	--colors: #a97947;
	--color2: #0a2127;
    --color3: #f2e2bc;

    --primtext: "Sora";
    --subtext: "Sora";
    --titletext: "Sora";
}

i.fas.fa-chevron-down {
    display: none;
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        border-radius: 5px !important;
        color: white !important;
    }
}

html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body { position:relative !important; }

.header-body {
    background-color: transparent !important;
    border: unset !important;
    transition: all ease 500ms;
}

html:not(.sticky-header-active) .header-body { margin-top: 10px !important; transition: all ease 1000ms !important; }

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #000;
}

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a.dropdown-toggle:after {
    border-color: #fff transparent transparent transparent;
}

#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li a { font-family: var(--subtext); }

@media (max-width: 768px) {
    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
    }
}

#header .header-nav.header-nav-stripe nav>ul>li>a {
    color: #000;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0px;
    font-family: var(--subtext);
    text-transform: capitalize;
    padding: 0 5px;
}

html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: #fff !important;
    backdrop-filter: saturate(180%) blur(20px);
    border: unset !important;
    border-bottom: 5px solid var(--colors) !important;
    transition: all ease 500ms !important;
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a {
        padding: 0 10px!important;
        min-height: 50px;

        height: 50px;
    }

    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        background-color: var(--colors);
    }

    <?php if ($data->site_position != 'home'): ?>
        #header.header-no-min-height .header-body {
            margin-top: 0 !important;
        }

        html.sticky-header-active #header .header-body { background:white !important; }
    <?php endif ?>
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a.dropdown-toggle:after {
        border-color: #000 transparent transparent transparent !important;
    }
}

@media (max-width: 768px) {
    #menu-button {
        border-color: #111;
        color: #111;
        margin-left: 10px;
      border: unset !important;
    }
  
    .menu-tour a { font-family: var(--primtext); }

    #menuWrapper.show-box {
        opacity: 1;
        visibility: visible;
    }
    #menuWrapper {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        z-index: 99999;
        opacity: 0;
        visibility: hidden;
        transition: all ease .5s;
    }

    #menuWrapper #close {
        color: var(--colors);
        position: absolute;
        top: 15px;
        right: 20px;
        width: 42px;
        height: 35px;
        font-size: 20px;
        background: 0 0;
        z-index: 1;
        border: none;
    }

    #menuWrapper .container {
        height: 100%;
    }

    .menu-tour ul {
        position: relative;
        padding: 0;
        top: 2%;
        left: 0;
        right: 0;
        text-align: left;
        list-style: none;
    }

    .menu-tour li {
        padding: 10px;
        border-bottom: 1px solid #eee;
        margin: unset;
    }

    .menu-tour a {
        color: #12265a;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
    }

}


@media (max-width: 768px) {
    .logo-menu {
        align-items: flex-start !important;
    }

    .menu-andro {
        justify-content: center !important;
    }

    .menu-andro {
        justify-content: flex-end !important;
        margin-right: 10px;
    }

    .header-logo {
        margin-left: 10px !important;
    }

    #menuWrapper {
        overflow: scroll;
    }
}


/* Section All Page */

.section-allpage {
    position: relative;
    height: 380px;
    margin-top: -90px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.section-allpage:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: .6;
}

.section-allpage:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 180px;
    transform: rotate(180deg);
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: .6;
} 

.section-allpage .text p {
    color: #f1f1f1;
    letter-spacing: 0.5px;
    font-size: 17px;
    margin-bottom: 0;
}
.section-allpage .text h1 {
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: 600;
    color: white;
    text-shadow: 2px 2px 10px #00000030;
    font-size: 45px;
    line-height: 50px;
    margin-bottom: 15px;
}
.section-allpage .text {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 0;
    bottom: 0;
    z-index: 10;
    display: flex;
    padding-top: 80px;
    align-items: center;
    font-family: var(--primtext);
}

@media (max-width: 768px) {
    .section-allpage {
        height: 280px;
    }

    .section-allpage .text {padding-top: 50px;}
    .section-allpage .text h1 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 5px;
    }

    .section-allpage .text p {
        color: #f1f1f1;
        letter-spacing: 0.5px;
        font-size: 13px;
        margin-bottom: 0;
    }
}

/* Blog */

.wrap-blog img {
    height: 250px;
    object-fit: cover;
    margin-bottom: 20px;
}

.wrap-blog {
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}

.wrap-blog2 {
    position: relative;
}

span.catcat {
    position: absolute;
    bottom: 13%;
    z-index: 1;
    left: 4%;
    background: var(--color2);
    font-family: var(--primtext);
    color: white;
    font-weight: 600;
    border-radius: 100px;
    padding: 3px 20px;
    font-size: 13px;
    text-transform: uppercase;
}

.wrap-blog2 span {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color2);
    font-family: var(--primtext);
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

.wrap-blog2 h3 {
    text-transform: unset;
    font-family: var(--primtext);
    font-weight: 700;
    letter-spacing: 0px;
    line-height: 30px;
    color: #333;
    font-size: 21px;
    margin-bottom: 10px;
}

.wrap-blog2 p {
    font-weight: 400;
    font-size: 15px;
    line-height: 28px;
    font-family: var(--primtext);
    color: #777;
}

.wrap-blog2 a {
    border-radius: 5px;
    font-family: var(--primtext);
    color: var(--colors);
    padding: 0;
    font-size: 15px;
    font-weight: 600;
    transition: all ease 500ms;
}

.wrap-blog2 a:hover {
    color: #000;
}

@media (max-width: 768px) {
    .wrap-blog2 span {
        font-size: 10px;
        margin-bottom: 5px;
    }

    .wrap-blog2 h3 {
        line-height: 30px;
        font-size: 20px;
    }

    .wrap-blog2 p {
        font-size: 14px;
        line-height: 27px;
    }
}
/* Blog */
@media (max-width: 768px ) {

	.col-6.col-md-3.mb-3 {
	    padding: 0px 5px;
	}

    .display-pc-share {
        display: none;
    }

    .header-logo img {
      height: 35px !important;
    }
}

@media ( min-width: 768px ) {
    .display-pc-share {
        display: flex;
    }
}

@media (min-width: 768px) {
    .container { max-width: 1140px; }
}

@media (min-width: 1340px) {
    .container { max-width: 1240px; }
}

@media ( max-width: 768px ) {
    .display-pc-share {
        display: none;
   }
}

span.text-wid {
    font-family: var(--primtext);
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0px;
}

.social-icons:not(.social-icons-clean) li a {
    color: var(--colors) !important;
}

.btn-book-atas {
    font-family: var(--primtext);
    background: var(--colors);
    color: #fff;
    border: 1px solid #fff;
    text-transform: capitalize;
    border-radius: 100px;
    margin-left: 1rem;
    padding: 8px 20px;
    font-weight: 500;
    font-size: 14px;
    margin-top: 5px;
}

.btn-book-atas:hover {
    background: #fff;
    border: 1px solid var(--colors);
    color: var(--colors);
}

a { text-decoration:unset !important; }



/*=============== Product ===============*/

.product {
    font-family: var(--primtext);
}
.product .card {
    overflow: hidden;
    position: relative;
    border-radius: 0;
    border: none;
    box-shadow: 5px 5px 10px #00000010, -2px -2px 10px #00000010;
}
.product .card .price span {
    font-size: 15px;
    font-style: normal;
    font-weight: 700;
}
.product .card img {
    height: 200px;
    object-fit: cover;
    object-position: center;
}
.product .card .price {
    position: absolute;
    top: 1.8rem;
    right: 0;
    color: #000;
    background-color: #FAB01A;
    padding: 8px 15px;
    font-style: italic;
    font-size: 12px;
}
.product .card-body {
    position: relative;
    padding-bottom: 50px !important;
}
.product .card .rating {
    font-size: 13px;
    margin-bottom: 12px;
    color: #878787;
}
.product .card .rating i {
    font-size: 15px;
    margin-right: 4px;
    color: #ffa127;
}
.product .card .info-tag {
    position: absolute;
    width: 90%;
    top: -1rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--colors);
    padding: 8px 13px;
    color: #fff;
}
.product .card .info-tag i {
    margin-right: 5px;
}
.product .card .info-tag span {
    padding: 0 8px;
    display: block;
    text-align: center;
    width: 33.33%;
    font-size: 14px;
}
.product .card .info-tag .people {
    border-left: 0.5px solid;
    border-right: 0.5px solid;
}
.product .card .card-title {
    font-size: 15px;
    letter-spacing: 0.5px;
    font-weight: 700;
    line-height: 28px;
}
.product .card p {
    margin-bottom: 8px;
    font-size: 14px;
    color: #323232;
    letter-spacing: .3px;
}
.product .card .btn-wraper {
    border-top: 0.5px solid #1c1c1c40;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
}
.product .card .btn {
    width: 50%;
    margin: 0;
    font-size: 13px;
    padding: 0.8rem 1.2rem;
    font-weight: 500;
    color: #1c1c1c;
    letter-spacing: .3px;
    border-radius: 0;
}
.product .card .btn.btn-book {
    border-right: 0.5px solid #1c1c1c40;
}

@media screen and (max-width: 576px) {
    .product .row.justify-content-center {justify-content: start !important;}
    .product .card .txt{
        padding: 14px !important;
        padding-bottom: ;
    }
    .product .card .card-body {
        padding-bottom: 40px !important;
    }
    .product .card .card-title {
        margin:0;
        font-size: 11px;
        line-height: 20px;
    }
    .product .card .rating {
        font-size: 8px;
        margin-bottom: 5px;
        line-height: 2;
    }
    .product .card .rating i {
        font-size: 10px;
        margin-right: 2px;
    }
    .product .card .price {
        top: 1rem;
        padding: 6px 9px;
        font-size: 8px;
        line-height: 1;
    }
    .product .card .price span {font-size: 13px;}
    .product .card img {
        height: 130px;
    }
    .product .card .btn {
        width: 100%;
        font-size: 11px;
        padding: 0.6rem 1rem;
    }
}

/*=============== Product ===============*/
/* Mobil */

.wrap-mobil-b {
    background: #fff;
    border-radius: 5px;
    position: relative;
    font-family: var(--primtext);
    margin-bottom: 15px;
}

.wrap-mobil-b img {
    height: 200px;
    object-fit: contain;
    width: 100%;
    padding: 10px;
}


.wrap-mobil-b2 {
    padding: 10px 30px 30px;
}

.wraphar {
    background: #f8f8f8;
    padding: 15px 30px 20px;
}


.wraphar h3 {
    font-size: 23px;
    text-transform: capitalize;
    font-weight: 600;
    letter-spacing: 0px;
    line-height: 35px;
    margin-bottom: 0px;
}

.wraphar span {
    display: block;
    font-size: 14px;
    margin-bottom: 0px;
}

.wrap-mobil-b hr {
    margin-top: 15px;
    margin-bottom: 15px;
}

.wrap-mobil-b2 p {
    border-bottom: 1px solid #bbb;
    padding-bottom: 10px;
    padding-top: 10px;
    font-size: 13px;
    color: #555;
    margin-bottom: 0px;
}

.btn-sewabil {
    background: var(--colors);
    font-size: 12px;
    font-weight: 600;
    color: white;
    padding: 7px 13px;
    transition: all ease 500ms;
}

.btn-sewabil:hover {
    background: #fff;
    color: #111;
}

.coll5 {
    padding: 0;
    align-self: flex-end;
    text-align: center;
}

.wrap-mobil-bpt2 { border:1px solid #eee }

.wraphar2 {
    background: var(--colors);
}

.wraphar2 span {
    color: #f1f1f1;
}

.wraphar2 h3 {
    color: #fff;
}

.btn-momo {
    background: var(--color2);
    margin-top: 20px;
    color: white;
    width: 100%;
    padding: 10px 25px;
    border-radius: 2px;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.1px;
    transition: all ease 500ms;
}

.btn-momo:hover {
    background: black;
    color: white;
}


span.label-name {
    position: absolute;
    top: 3%;
    left: 0;
    z-index: 3;
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    letter-spacing: .4px;
    text-transform: uppercase;
    padding: 6px 20px 6px 15px;
    font-weight: 600;
    font-size: 12px;
    border-radius: 0px 100px 100px 0px;
}



.ss-arrow button {
    margin: 0;
    padding: 0;
    background: white;
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1);
    color: var(--colors);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
    
.ss-arrow .slide-arrow{
  position: absolute;
  top: 44% !important;
  margin-top: -15px;
}
.ss-arrow .prev-arrow{
  left: -1%;
  z-index: 1;
}
.ss-arrow .next-arrow{
  right: -1%;
  z-index: 1;
}

.review-slide .slick-dots {
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 3rem 0 0;
    list-style-type: none;
}
    
.review-slide  .slick-dots button {
    display: block;
    width: 0.6rem !important;
    height: 0.6rem !important;
    padding: 0;
    border: none !important;
    border-radius: 100%;
    transform: scale(1.0) !important;
    background-color: var(--color2) !important;
    text-indent: -9999px;
}

.review-slide  .slick-dots li {
    margin: 0 0.25rem;
}

.review-slide  .slick-dots li.slick-active button {
    background-color: var(--colors) !important;
}

@media (max-width: 768px) {

  .ss-arrow button { transform: scale(1.2); }

  .ss-arrow .slide-arrow { top: 45%; }

  .ss-arrow .prev-arrow{
      left: -1%;
      z-index: 1;
    }
}
/* @media (max-width: 768px) {

  .ss-arrow button { transform: scale(0.8); }

  .ss-arrow .slide-arrow { top: 45%; }

  .ss-arrow .prev-arrow{
      left: 6%;
      z-index: 1;
    }

    .ss-arrow .next-arrow{
      right: 6%;
      z-index: 1;
    }
} */

/* Cate */

* { scroll-behavior:smooth; }

.headatas { height: 85px; padding-top:20px; padding-bottom:20px; }

.smooth-slide {
    position: relative;
    bottom: 100px;
}

.head-sty {
    height: 74px;
    padding-top: 12px;
    padding-bottom: 14px;
    background: white;
    border-radius: 10px;
    margin: 0 7%;
    margin-top: 15px;
    padding-left: 30px !important;
    padding-right: 30px !important;
    box-shadow: 0px 2px 10px 4px #0000000d;
}

@media (max-width: 768px) {

  .head-sty { height: 50px; padding-top: 0px; padding-bottom: 0px; padding-left:2% !important; padding-right:2% !important; }
}

.pad6rem { padding:5rem 0; }

@media (max-width: 768px) {
    .pad6rem { padding:3rem 0; }

    .headatas { height: 60px; padding: 0px 0px; }

    .col-tour {
        position: relative;
        overflow-y: scroll;
        z-index: 1;
    }
}


@media (min-width: 768px) {
    .container-global { padding-left: 7%; padding-right: 7%; }
}

@media ( max-width: 768px ) {
   .container-global { padding-left: 5%; padding-right: 5% }
}

/* ========= title general ========*/
.title-product .tag-atas {
    font-size: 11px;
    margin-bottom: 10px;
    text-align: center;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 24px;
    color: var(--colors);
    letter-spacing: 1px;
    border-radius: 50px;
    padding: 2px 15px ;
    font-family: var(--subtext);
    display: block;
    width: max-content;
    margin: auto;
}

.title-product h2 span {
    color: var(--colors);
    font-weight: 700;
    font-size: unset;
    text-transform: unset;
    display: unset;
    letter-spacing: unset;
}

.title-product h2 {
    font-size: 27px;
    line-height: 40px;
    text-align: center;
    color: #000;
    font-weight: 400;
    margin: auto;
    letter-spacing: .3px;
    text-transform: unset;
    margin-bottom: 15px;
    font-family: var(--primtext);
}
.title-product p {
    margin-bottom: 15px; 
    text-align: center;
    font-size: 13px;
    text-align: left;
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 400;
    color: #5b5b5b;
}

@media (min-width: 768px) {

    .title-product .tag-atas {
        font-size: 12px;
        line-height: 24px;
        margin: auto;
        margin-bottom: 5px;
    }

    .title-product h2 {
        font-size: 32px;
        line-height: 50px;
    }
    .title-product p {
        font-size: 15px;
    }

}

@media (min-width: 1280px) {

    .title-product .tag-atas {
        font-size: 13px;
        line-height: 24px;
        margin: auto;
        margin-bottom: 8px;
    }

    .title-product h2 {
        font-size: 40px;
        line-height: 50px;
    }
    .title-product p {
        font-size: 15px;
    }

}

/* ========= title general ========*/

/* Unique */

#__unique-root {
    font-family: var(--primtext), serif;
  }
  #__unique-root .wrapper {
    padding-top: 5rem;
    padding-bottom: 5rem;
    border: 1px solid #eaeaea;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 2rem;
    justify-content: start;
  }
  #__unique-root .items-wrapper.items-wrapper-tablet {
    display: none;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile {
    display: block;
  }

  #__unique-root .items-wrapper.items-wrapper-mobile .item {
    height: 500px;
    position: relative;
    border-radius: 2rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: stretch;
    padding: 1.2rem;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper {
    z-index: 1;
    background-color: white;
    padding: 1.5rem;
    border-radius: 1rem;
    display: flex;
    gap: .4rem;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }

    #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper i { display:none; }

  #__unique-root .items-wrapper.items-wrapper-mobile .logo {
    font-size: 2rem;
    color: var(--colors);
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .title {
    font-weight: bold;
    color: var(--colors);
    display: flex;
    font-size: .9rem;
    justify-content: start;
    align-items: center;
    gap: 1rem;
    line-height: 1.6rem;
    letter-spacing: 0px;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .desc {
    line-height: 20px;
    font-size: .8rem;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper * {
    padding: 0;
    margin: 0;
  }
  /*TABLET*/
  @media (min-width: 768px) {
    #__unique-root .title {
      font-size: 1.5rem;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet {
      display: flex;
      justify-content: center;
      gap: 1rem;
      align-items: center;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item {
      height: 484px;
      width: 15%;
      position: relative;
      border-radius: 2rem;
      overflow: hidden;
      padding: 1rem;
      display: flex;
      justify-content: center;
      align-items: end;
      transition: all ease-in-out .5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-desc-wrapper {
        width: 100%;
        background-color: white;
        display: grid;
        grid-template-areas: "logo title" "logo description";
        grid-template-columns: auto 1fr;
        grid-template-rows: repeat(2, auto);
        column-gap: .8rem;
        padding: 25px 30px;
        z-index: 1;
        border-radius: 1rem;
        opacity: 1;
        transform: scale(1);
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-desc-wrapper {
      opacity: 0;
      transition: all ease-in-out 1.5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .title {
      font-size: 1.1rem;
      font-weight: bold;
      color: var(--colors);
      line-height: 30px;
      margin-bottom: 2px;
      letter-spacing: 0;
      grid-area: title;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
  }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .desc {
      color: #555;
      font-size: 0.9rem;
      margin-bottom: 0;
      grid-area: description;
      overflow: hidden;
      line-height: 1.6rem;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-img {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      filter: grayscale(1);
      transition: all ease-in-out .5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper {
      font-size: 1.4rem;
      display: flex;
      justify-content: center;
      align-items: start;
      color: white;
      grid-area: logo;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper .logo {
      background-color: var(--colors);
      color: white;
      padding: 0.8rem;
      border-radius: 999em;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet .item.active {
      width: 40%;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-img {
      filter: grayscale(0);
    }
    #__unique-root .items-wrapper.items-wrapper-mobile {
      display: none;
    }
  }

  /*DESKTOP*/
  @media (min-width: 1280px) {
    #__unique-root .title {
      font-size: 2rem;
    }
  }

@media (min-width: 768px) {
    .start-menu {
        width: 15%;
    }

    .mid-menu {
        width: 70%;
        align-self: center !important;
        height: 45px;
    }

    .end-menu {
        width: 15%;
        align-items: flex-end;
        align-self: center !important;
    }

    .menu-andro { align-self:center !important; }
}

@media (max-width: 768px) {

    .end-menu {
        display: none !important;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
        display: contents;
    }
}


</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <?= $func->fb_sdk() ?> -->
    
    <div class="body">
        <header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
                <div class="header-body wow fadeIn" data-wow-duration="2s">

                    <!-- <div class="header-container container-fluid hilang-head d-none d-md-flex" style="padding: 0px 30px; height: 50px; border-bottom: 1px solid #e1e1e1; background-color: var(--colors);">
                        <div class="header-row container" style="padding: 0;">

                            <div class="header-column justify-content-start display-pc" style="align-self: center;">
                <ul class="header-social-icons social-icons display-pc" style="margin-left: 0;">
                    <?php if (!empty($data->social->facebook_url)): ?>
                        <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->twitter_url)): ?>
                        <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>"  title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->instagram_url)): ?>
                        <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>"  title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->youtube_url)): ?>
                        <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>"  title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->googleplus_url)): ?>
                        <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>"  title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
                    <?php endif ?>
                </ul>
                            </div>

                            <div class="header-column justify-content-end sosmed-i" style="display: inline-block; align-self: center;">
                                <span class="text-wid" style="padding-left: 10px;"><i class="fas fa-phone phone"></i><?= $data->company->company_telp; ?></span>
                                <span class="text-wid"><i class="far fa-envelope mail"></i><?= $data->company->company_email; ?></span>
                            </div>

                        </div>
                    </div> -->

                    <div class="header-container container-global head-sty">
                        <div class="header-row">

                            <div class="header-column justify-content-start logo-menu start-menu" style="align-self: center; align-items: baseline;">
                                <div class="header-logo">
                                    <a href="<?= base_url() ?>">
                                        <img style="object-fit: cover; height: auto;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="header-column justify-content-start mid-menu">
                <div class="header-row menu-andro">
                  <div class="header-nav header-nav-stripe">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                      <nav class="collapse">
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="nav-item"><a title="Home" class="nav-link" href="<?= base_url() ?>">Home </a></li>
                          <?php foreach ($data->menu->primary_menu as $menu) : ?>
                                                        <?php $arrayi = json_decode(json_encode($menu), true); ?>
                            <?php if (array_key_exists('child', $arrayi)) : ?>
                              <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>

                                <ul class="dropdown-menu">
                                  <?php foreach ($menu->child as $menis) : ?>
                                                                        <?php $arrayis = json_decode(json_encode($menis), true); ?>
                                    <?php if (array_key_exists('child', $arrayis)) : ?>
                                      <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="javascript:void(0);" title="<?= $menis->label ?>"><?= $menis->label ?></a>
                                        <ul class="dropdown-menu">
                                          <?php foreach ($menis->child as $key => $menis) : ?>
                                            <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
                                          <?php endforeach ?>
                                        </ul>
                                      </li>
                                      <?php else : ?>
                                        <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
                                      <?php endif ?>
                                    <?php endforeach ?>                                                            
                                  </ul>

                                </li>
                                <?php else : ?>
                                  <li><a class="nav-link" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
                                <?php endif ?>
                                
                                
                              <?php endforeach ?> 

                            </ul>
                          </nav>
                        </div>

                        <style type="text/css">                  
                            .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 {
                              width: 25px;
                              height: 2.5px;
                              margin: 6px 0;
                              transition: 0.4s;
                            }

                            .b-p-bg-color .bar1 { background-color:#000 }
                            .b-p-bg-color .bar2 { background-color:#000 }
                            .b-p-bg-color .bar3 { background-color:#000 }

                            html.sticky-header-active .b-p-bg-color .bar1 { background-color:#000 }
                            html.sticky-header-active .b-p-bg-color .bar2 { background-color:#000 }
                            html.sticky-header-active .b-p-bg-color .bar3 { background-color:#000 }

                            .b-p-bg-color .bar2 { width: 20px; margin:0 0 0 auto; }

                        </style>

                        <button class="menu b-p-bg-color d-block d-md-none" id="menu-button">
                           <div class="bar1"></div>
                           <div class="bar2"></div>
                           <div class="bar3"></div>                                    
                        </button>
                        <div class="menu-box" id="menuWrapper">
                            <button id="close" class="p-color"><i style="font-size:24px" class="fa">&#xf00d;</i></button>
                            <div class="container menu-tour">
                                <ul>

                                    <a href="<?= base_url() ?>">
                                        <img style="height: 60px;" alt="logo 2" class="img-fluid mb-2" loading="lazy" src="<?= $data->web->site_logo_alternative ?>" alt="<?= $data->web->site_name ?>">
                                    </a>

                                    <li>
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>

                                <?php foreach ($data->menu->primary_menu as $menus) : ?>
                                    <?php $arrayisi = json_decode(json_encode($menus), true); ?>
                                    <?php if (array_key_exists('child', $arrayisi)) : ?>
                                    <li class="position-relative">

                                        <a href="<?= $menus->link ?>"><?= $menus->label ?></a>
                                        <i class="fa fa-chevron-down child-icon child-toggle"></i>
                                        <ul class="ul-child child-menus">
                                        <?php foreach ($menus->child as $menuc) : ?>
                                            <li>
                                                <a href="<?= $menuc->link ?>"><?= $menuc->label ?></a>  
                                            </li>
                                        <?php endforeach ?>
                                        </ul>

                                    </li>
                                    <?php else: ?>
                                        <li><a href="<?= $menus->link ?>"><?= $menus->label ?></a></li>
                                    <?php endif ?>
                                <?php endforeach ?>

                                <!-- <li style="border-bottom: unset;"><a class="btn btn-book-atas" href="<?= $func->dm_whatsapp() ?>"><i class="fa-regular fa-calendar mr-2"></i>Contact Us</a></li> -->

                                </ul>
                            </div>
                        </div> <!-- /.search-box -->


                      </div>
                    </div>
                  </div>

                    <div class="header-column end-menu">
                        <a class="btn btn-book-atas d-none d-md-block" href="<?= $func->dm_whatsapp() ?>">Book a Table <i class="fas fa-arrow-right ml-2"></i></a>

                        <!-- <ul class="header-social-icons social-icons display-pc">
                            <?php if (!empty($data->social->facebook_url)): ?>
                                <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif ?>
                            <?php if (!empty($data->social->twitter_url)): ?>
                                <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>"  title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <?php endif ?>
                            <?php if (!empty($data->social->instagram_url)): ?>
                                <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>"  title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <?php endif ?>
                            <?php if (!empty($data->social->youtube_url)): ?>
                                <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>"  title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            <?php endif ?>
                            <?php if (!empty($data->social->googleplus_url)): ?>
                                <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>"  title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
                            <?php endif ?>
                        </ul> -->
                    </div>


                                    
                                    
                                </div>
                            </div>
                        </div>

                    </header>

                <div role="main" class="main">
