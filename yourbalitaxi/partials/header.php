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
				
<style>
:root{
	/*default*/	
	--boxed: #5f758d;
	--body: #e8f5e9;
	--colors: #fe9048;
	--color2: #000000;
    --color3: #fe9048;

    --primtext: "Inter", serif;
    --subtext: "Urbanist", sans-serif;
    --titletext: "Inter", serif;
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




/* Nearby Attract */

    .nearby .card {
        overflow: hidden;
        border-radius: 0;
      }

    .nearby .card span {
        font-family: var(--primtext);
        color: white;
    }
    .nearby .card:before {
        position: absolute;
        content: '';
        top: 20%;
        left: 0;
        transition: all ease 500ms;
        right: 0;
        bottom: 0;
        z-index: 1;
        background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000b3 110%) 0 0 no-repeat padding-box;
    }
     
     .nearby .card img {
        aspect-ratio: 5 / 6;
        border-radius: 0;
        transition: ease-in-out 0.3s;
        filter: brightness(1);
        object-fit: cover;
    }

      .nearby .card-img-overlay {
        z-index: 2;
        height: fit-content;
        bottom: 1.2rem;
        top: unset;
        transition: ease-in-out 0.3s;
        transform: translateY(0%);
      }
      .nearby .card h3 {
            color: white;
            text-transform: unset;
            font-style: normal;
            font-family: var(--primtext);
            font-weight: 500;
            font-size: 23px;
            line-height: 40px;
            letter-spacing: 0px;
            margin-bottom: 5px;
        }
      .nearby .card p {
        color: white;
        font-family: var(--subtext);
        font-weight: 300;
        font-size: 14px;
        line-height: 26px;
        letter-spacing: 0px;
        margin-bottom: 10px;
      }
      .nearby .card .btn {
        color: white;
        text-transform: unset;
        font-style: normal;
        padding-left: 0;
        font-family: var(--subtext2);
        font-weight: 400;
        font-size: 14px;
        line-height: 22px;
        letter-spacing: .4px;
        margin-bottom: 0px;
      }
      .nearby .card .desc {
        z-index: 2;
        position: absolute;
        bottom: 1.2rem;
        transition: ease-in-out 0.3s;
        transform: translateY(120%);
      }
      .nearby .card:hover img {
        transform: scale(1.1);
        filter: brightness(.6);
      }
      .nearby .card:hover .desc {
        transform: translateY(0%);
      }
      .nearby .card:hover .card-img-overlay {
        transform: translateY(120%);
      }
/* ========= Nearby ========== */



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
    height: 400px;
    margin-top: -90px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
    background-attachment: fixed;
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
        background-attachment: unset;
    }

    .section-allpage .text {padding-top: 50px;}
    .section-allpage .tx {margin-top: 1rem;}
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

.blog img {
    height: 270px;
    object-fit: cover;
    position: relative;
    z-index: 2;
    margin-bottom: 20px;
}

.blog {
    position: relative;
    margin-bottom: 20px;
}

.blog2 {
    position: relative;
}

.catcat{
    position: absolute;
    bottom: 13%;
    z-index: 3;
    left: -15px;
    background: var(--color2);
    font-family: var(--primtext);
    color: white;
    font-weight: 600;
    border-radius: 0;
    padding: 9px 20px;
    font-size: 13px;
    line-height: 13px;
    width: max-content;
    text-transform: uppercase;
}
.catcat:before {
    content: "";
    width: 16px;
    height: 10px;
    z-index: 1;
    clip-path: polygon(100% 0, 0% 100%, 100% 100%);
    background: var(--color2);
    position: absolute;
    top: -9.5px;
    left: 0;
}
.blog .catcat span {
    font-size: 22px;
    line-height: 22px;
}

.blog2 span {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color2);
    font-family: var(--primtext);
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

.blog2 h3 {
    text-transform: unset;
    font-family: var(--primtext);
    font-weight: 700;
    letter-spacing: 0px;
    line-height: 30px;
    color: #333;
    font-size: 21px;
    margin-bottom: 10px;
}

.blog2 p {
    font-weight: 400;
    font-size: 16px;
    line-height: 30px;
    font-family: var(--primtext);
    color: #777;
}

.blog2 a {
    border-radius: 0px;
    font-family: var(--primtext);
    color: var(--colors);
    padding: 0;
    font-size: 15px;
    padding: .6rem 1.3rem;
    border: 1px solid var(--colors);
    font-weight: 600;
    transition: all ease 500ms;
}

.blog2 a:hover {
    color: #000;
}

@media (max-width: 768px) {
    .blog2 span {
        font-size: 10px;
        margin-bottom: 5px;
    }

    .blog2 h3 {
        line-height: 30px;
        font-size: 20px;
    }

    .blog2 p {
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
      height: 37px !important;
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

/*=============== Product ===============*/

.car-prod {
    font-family: var(--primtext);
}
.car-prod .card {
    overflow: hidden;
    position: relative;
    border-radius: 0;
    border: none;
    box-shadow: 5px 5px 10px #00000010, -2px -2px 10px #00000010;
}
.car-prod .card .price span {
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
}
.car-prod .card img {
    margin: 10px 0;
    object-position: center;
    padding: 20px;
    padding-bottom: 0px;
}
.car-prod .card .price-wrap .final {
    font-size: 13px;
}
.car-prod .card .price-wrap .final span {
    color: black;
    font-size: 18px;
    font-weight: 600;
}
.car-prod.supir .card .price-wrap .final {
    font-size: 11px;
}
.car-prod.supir .card .price-wrap .final span {
    color: black;
    font-size: 15px;
    font-weight: 600;
}
.car-prod .card .price-wrap .disc {
    color: #c3c3c3;
    font-size: 13px;
    position: relative;
    font-weight: 600;
    width: max-content;
}
.car-prod .card .price-wrap .disc:after {
    position:absolute;
    content: "";
    width: 110%;
    height:1px;
    left:50%;
    top:50%;
    transform: translate(-50%, -50%);
    background: #333;

}
.car-prod .card-body {
    position: relative;

}
.car-prod .card .rating {
    font-size: 13px;
    margin-bottom: 12px;
    color: #878787;
}
.car-prod .card .rating i {
    font-size: 15px;
    margin-right: 4px;
    color: #ffa127;
}
.car-prod .card .price-wrap .top {
    margin: 15px 0 5px;
}
.car-prod .card .price-wrap .top .avb {
    background: #32CD3280;
    color: #000;
    padding: 3px 13px;
    border-radius: 15px;
    font-family: var(--primtext);
}
.car-prod .card .info-tag {
    position: absolute;
    width: 90%;
    top: -1rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--colors);
    padding: 8px 13px;
}
.car-prod .card .info i {
    color: #fff;
    padding: 5px;
    display: flex;
    margin-right: 10px;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: var(--colors);
    font-size: 13px;
    width: 25px;
    height: 25px;
}
.car-prod .card .card-title {
    margin-top: 0px;
    font-size: 19px;
    text-transform: capitalize;
    letter-spacing: 0.3px;
    font-weight: 600;
    line-height: 30px;
}
.car-prod .card p {
    margin-bottom: 12px;
    font-size: 15px;
    color: #323232;
    letter-spacing: .3px;
}
.car-prod .card .btn-wraper {
    border-top: 0.5px solid #1c1c1c40;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
}
.car-prod .card .btn {
    width: 100%;
    margin: 0;
    margin-top: 15px;
    background: var(--colors);
    font-size: 15px;
    padding: 10px;
    font-weight: 500;
    color: white;
    letter-spacing: .3px;
    border-radius: 100px;
    transition: all ease 500ms;
}

.car-prod .card .btn:hover {
    background: black;
    color: white;
}

.car-prod .card .btn.btn-book {
    border-right: 0.5px solid #1c1c1c40;
}

@media screen and (max-width: 576px) {
    .car-prod .row.justify-content-center {justify-content: start !important;}
    .car-prod .card .price-wrap .top .txt {
        font-size: 12px;

    }
    .car-prod .card .price-wrap .top .avb {
        font-size: 10px;
        padding: 1px 13px;
    }
    .car-prod .card .card-body {

    }
    .car-prod .card .info {
        flex-wrap: wrap;
    }
    
    .car-prod .card .info .bx {margin-top: 5px; margin-right: 5px !important;}
    .car-prod .card .info i {
        font-size: 11px;
        width: 18px;
        height: 18px;
        margin-right: 3px;
    }
    .car-prod .card .card-title {
        margin:0;
        font-size: 15px;
        line-height: 20px;
    }
    .car-prod .card .rating {
        font-size: 8px;
        margin-bottom: 5px;
        line-height: 2;
    }
    .car-prod .card .rating i {
        font-size: 10px;
        margin-right: 2px;
    }
    .car-prod .card .price-wrap .top .avb{}
    .car-prod .card .price-wrap .final {
        font-size: 8px;
        line-height: 1;
    }
    .car-prod .card .price-wrap .final span {
        font-size: 14px;
        line-height: 1;
    }
    .car-prod.supir .card .price-wrap .final {
        font-size: 8px;
    }
    .car-prod.supir .card .price-wrap .final span {
        font-size: 10px;
    }
    .car-prod .card .price-wrap .disc {font-size: 13px;}
    .car-prod .card .btn {
        width: 100%;
        font-size: 11px;
        padding: 0.6rem 1rem;
    }
}

/*=============== Product ===============*/
/*=============== Simcard ===============*/

/* ======== simcard ========== */

    .simcard .card {
        font-family: var(--primtext);
        border-radius: 0px;
        overflow: hidden;
    }
    .simcard .card .head-card {
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        text-align: center;
        background-color: #f4f2e9;
        font-size: 16px;
        letter-spacing: 0.1px;
    }
    .simcard .card .head-card p.cate-prd {
        margin-bottom: 0px;
        font-weight: 600;
        color: var(--colors);
    }
    .simcard .card .head-card h3 {
        font-size: 22px;
        color: var(--color2);
        line-height: 34px;
        letter-spacing: 0.3px;
        text-transform: none;
        font-weight: 700;
    }
    .simcard .card .icon {
        margin-top: -2rem;
        position: relative;
    }
    .simcard .card .icon i {
        background-color: var(--colors);
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        margin-left: auto;
        margin-right: auto;
    }
    .simcard .card .feature {
        padding: 20px 10px;
        position: relative;
    }
    .simcard .card .feature p {
        margin-bottom: 0;
        font-size: 15px;
        text-align: center;
        color: #333;
        margin-bottom: 10px;
    }
    .simcard .card .feature p i {
        color: var(--colors);
        font-weight: 800;
    }
    .simcard .card .price {
        text-align: center;
        font-weight: 600;
        font-size: 20px;
        color: var(--color2);
    }
    .simcard .card .price span {
        color: var(--colors);
        font-weight: 700;
    }
    .simcard .card .button .btn-prd {
        padding: 12px 1.6rem;
        line-height: 14px;
        font-size: 13px;
        letter-spacing: 1px;
        margin-top: 10px;
        font-weight: 600;
        border-radius: 0px;
        text-transform: uppercase;
        background-color: var(--colors);
        color: white;
        border-radius: 25px;
        transition: allease 500ms;
    }
    .simcard .card .button .btn-prd:hover {
        background: var(--color2);
    }
    .simcard .card .button .btn-prd.btn-det {
        background: var(--color2);
    }
    .simcard .card .button .btn-prd.btn-det:hover {
        background: var(--colors);
    }

    @media (max-width: 768px) {
        .simcard .card .button .btn-prd {
            font-size: 13px;
            margin-top: 10px;
            letter-spacing: 1px;
        }
    }
/*=============== Simcard ===============*/
/*=============== Product 2 ===============*/

.wrap-roomsi {
    position: relative;
    font-family: var(--subtext);
}

.row.amenfa p {
    font-size: 16px;
    color: #000;
}

.row.amenfa i {
    color: var(--color2);
}

.wrap-roomsi span {
    text-transform: uppercase;
    font-weight: 600;
    color: var(--color2);
    margin-bottom: 15px;
    display: block;
    letter-spacing: 2px;
}
.wrap-roomsi h3 {
    font-family: var(--primtext);
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 30px;
    line-height: 40px;
    margin-top: 5px;
    margin-bottom: 20px;
}
.wrap-roomsi ul {
    padding-left: 0;
    position: relative;
    list-style: circle;
}

.wrap-roomsi li {
    position: relative;
    color:#444;
    font-size: 15px;
    line-height: 25px;
    width: 48%;
    display: inline-flex;
    align-items: center;
}

.wrap-roomsi ul li i {
    font-size: 15px;
    line-height: 15px;
    color: var(--color2);
}

.wrap-roomsi p { color:#444; font-size:15px; }

.btn-fad {
    background: var(--colors);
    color: white;
    border-radius: 100px;
    border: 1px solid;
    padding: 10px 30px;
    font-size: 14px;
    margin-top: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    transition: all ease 500ms;
}

.btn-fad:hover { background: black; color: white; }

.img-room img {
    height: 450px;
    margin-bottom: 40px;
    object-fit: cover;
}


@media (max-width: 768px) {

    .wrap-roomsi h3 {
        font-size: 25px;
        margin-bottom: 10px;
    }
    .img-room img {
        height: 250px;
        margin-bottom: 20px;
    }
    .wrap-roomsi li {width: 100%;}
}
/*=============== Product 2 ===============*/
/*=============== Review ===============*/

.rev-card .card {
    position: relative;
    border: none;
    background-color: transparent;
    border-radius: 0px;
    min-height: 300px;
    margin: 10px;
}
.rev-card h3 {
    font-family: var(--subtext);
    color: #fff;
    font-size: 18px;
    line-height: 25px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: capitalize
}
.rev-card .from {
    font-family: var(--subtext);
    color: #fff;
    font-size: 13px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.5px;
}
.rev-card p {
    font-family: var(--subtext);
    color: #fff;
    font-size: 15px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.1px;
}

.rev-card img {
    height: 80px;
    width: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: .4px solid #00000050;
    margin-right: 25px;
}

@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
  }

      .btn-full {
        padding: 10px 13px;
        font-size: 13px;
    }

  .pad-cus { background-size:contain !important; }

  .wrap-review { padding:2rem; }

  .tirev h2 {
    font-size: 28px;
    line-height: 40px;
}

}


.revieww h2 span {
    color: var(--colors);
}

.read-more, .read-less {
    color: #9f9e9e;
    border-bottom: 1px solid;
}


/*=============== Review ===============*/
.list-star {
    margin-bottom: 9px;
    position: relative;
}

.list-star i {
    color: #FFDC00;
    font-size: 13px;
}

.btn-contact1 {
    background: var(--colors);
    color: #fff;
    font-family: var(--primtext);
    font-size: 15px;
    text-transform: uppercase;
    border-radius: 50px;
    font-weight: 600;
    padding: 10px 30px;
    transition: all ease 500ms;
    letter-spacing: 2px;
}

.btn-contact1:hover {
    background: #000;
    border-color: white;
    color: #fff;
    transition: all ease 500ms;
}
@media (max-width: 768px) {
    .btn-contact1 {
        font-size: 10px;
    }
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
    transform: scale(1.2);
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
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    line-height: 20px;
    color: var(--colors);
    letter-spacing: .5px;
    border-radius: 50px;
    padding: 1px 3px ;
    font-family: var(--subtext);
    display: block;
    width: max-content;
    margin: auto;
    position: relative;
    margin-bottom: 8px;
}
.title-product .tag-atas:after {
    content: "";
    width: 100%;
    height: 2px;
    position: absolute;
    background: var(--colors);
    bottom: 0px;
    left: 0;
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
    font-size: 40px;
    line-height: 115%;
    font-weight: 700;
    letter-spacing: .1px;
    color: #000;
    max-width: 800px;
    margin: auto;
    margin-bottom: 50px;
    text-transform: unset;
    font-family: var(--primtext);
}
.title-product p {
    text-align: left;
    font-family: var(--primtext);
    font-size: 15px;
    letter-spacing: 0px;
    margin-bottom: 20px;
    font-weight: 400;
    font-weight: 400;
    color: #5b5b5b;
}
@media screen and (max-width: 576px) {
    .title-product h2 {
        font-size: 27px;
        line-height: 40px;
        margin-bottom: 40px;
        text-align: center;
    }

    .title-product p { 
        margin-bottom: 15px; 
        text-align: center;
        font-size: 13px;
    }

    .title-product .tag-atas {
        font-size: 11px;
        text-align: center;
        margin: auto !important;
        margin-bottom: 10px !important;
    }
    .title-product .btnprofile {
        margin-left: auto;
        margin-right: auto;
    }
}
/* ========= title general ========*/
/* ========= btn general ========*/

.btnprofile {
    color: #fff;
    position: relative;
    background: var(--color2);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 600;
    line-height: 25px;
    border: .5px solid #00000050;
    margin-top: 10px;
    padding: 5px 5px 5px 1.6rem;
    letter-spacing: .4px;
    width: max-content;
    border-radius: 50px;
    text-transform: uppercase;
    transition: ease-in-out .25s;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.btnprofile .tx {
  position: relative; 
  z-index: 2; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.btnprofile .icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 3rem;
    width: 3rem;
    background: #00000020;
    margin-left: 15px;
    border-radius: 50%;
    transition: all ease-in-out .3s;
    transform: rotate(45deg);
}
.btnprofile:hover .icon {transform: rotate(90deg);}
.btnprofile i {
    height: fit-content;
    line-height: 1.1rem;
    font-size: 1.2rem;
}
.btnprofile .shadow {
    position: absolute;
    right: 5px;
    top: 5px;
    width: 3rem;
    height: 3rem;
    opacity: .8;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    background-color: #fff;
    /* filter: blur(20px); */
    transform: scale(.0) translateX(-202%);
    transition: all ease-in-out .6s;
}
.btnprofile:hover .shadow {
    transform: scale(11) ;

}
.btnprofile:hover {
    background: var(--color2);
    color: var(--color2);
}
@media screen and (max-width: 576px) {
    .btnprofile .icon {
        margin-left: 15px;
        height: 2.5rem;
        width: 2.5rem;
    }
}
/* ========= btn general ========*/
/* Review */

.wrap-review {
    padding: 3rem;
    position: relative;
    border: 1px solid #ccc;
    text-align: center;
    background-color: white;
    border-radius: 10px;
    height: 440px;
    margin: 10px;
    background: white;
}

.wrap-review p {
    font-family: var(--subtext);
    color: #000;
    font-size: 16px;
    line-height: 32px;
    font-weight: 400;
    letter-spacing: 0.1px;
}

.tirev h2 {
    font-family: var(--titletext);
    font-size: 40px;
    line-height: 55px;
}

.slide-fix {
    padding-top: 10px;
}

.wrap-why {
    padding: 35px 18px 28px;
    background: white;
    box-shadow: 0 0 87px 5px rgb(220 230 237 / 75%);
    border-radius: 5px;
    margin-bottom: 15px;
}

.list-stars i {
    color: #ffe000;
    margin: 5px;
    font-size: 15px;
}

.list-stars {
    position: relative;
    margin-bottom: 30px;
}

.from-reveiw a {
    color: var(--colors);
    font-weight: 600;
}
.from-reveiw p {
    font-size: 14px;
}
.from-reveiw img {
    height: 50px;
    margin: auto;
    margin-bottom: 13px;
}

.from-reveiw .gole {
    height: 40px;
}

.from-reveiw {
    position: absolute;
    font-family: var(--subtext);
    text-align: center;
    left: 0;
    right: 0;
    bottom: 3%;
}

.btn-full {
    background: var(--colors);
    color: white;
    font-family: var(--subtext);
    padding: 10px 25px;
    font-size: 15px;
    border-radius: 25px;
    letter-spacing: 1px;
    text-transform: capitalize;
    transition: all ease 500ms;
}
.btn-full:hover {
    color: #fff;
    background: var(--color2);
}

@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
  }

      .btn-full {
        padding: 10px 13px;
        font-size: 13px;
    }

  .pad-cus { background-size:contain !important; }

  .wrap-review { padding:2rem; }

  .tirev h2 {
    font-size: 28px;
    line-height: 40px;
}

}


</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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

                            <div class="header-column justify-content-start logo-menu" style="align-self: center; align-items: baseline;">
                                <div class="header-logo">
                                    <a href="<?= base_url() ?>">
                                        <img style="height: 55px; object-fit: contain;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="header-column justify-content-start">
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
                              width: 30px;
                              height: 3px;
                              margin: 6px 0;
                              transition: 0.4s;
                            }

                            .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#12265a; }

                           /*  html.sticky-header-active .b-p-bg-color .bar1 { background-color:white }
                            html.sticky-header-active .b-p-bg-color .bar2 { background-color:white }
                            html.sticky-header-active .b-p-bg-color .bar3 { background-color:white }

                            <?php if ($data->site_position != 'home'): ?>
                                .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#fff !important; }
                            <?php endif ?> */

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

                                <!-- <li><a href="<?= base_url() ?>booking-form">Booking Form</a></li> -->

                                </ul>
                            </div>
                        </div> <!-- /.search-box -->


                      </div>
                    </div>
                  </div>

                <style>
                    
                    .head-icon {
                        margin-top: 0 !important;
                    }

                    .head-icon:not(.head-icon-clean) li a {
                        background: var(--colors) !important;
                        color: white !important;
                    }

                </style>

                <style>
                    .dropdown {
                        position: relative;
                        display: inline-block;
                        font-family: var(--primtext);
                    }

                    .dropbtn {
                        width: 100px;
                        height: 40px;
                        padding: 0 1rem;
                        line-height: 40px;
                        color: #000;
                        display: flex;
                        align-items: center;
                        cursor: pointer;
                        border: 0;
                        background-color: transparent;
                        transition: 0.3s;
                    }

                    .dropdown-content {
                        min-width: 100px;
                        padding: 0.5rem;
                        position: absolute;
                        background-color: #fff;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        top: 100%;
                        left: 50%;
                        border-radius: 0.5rem;
                        transform: translateX(-50%);
                        z-index: 1;
                        display: none;
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    }

                    .dropbtn img {
                        width: 29px;
                        height: 29px;
                        margin-right: 0.5rem;
                        border-radius: 100px;
                        object-fit: cover;
                    }

                    .dropdown-content .dropbtn {
                        width: 100%;
                        margin: 0;
                        color: #000;
                    }

                    .dropdown-content .dropbtn:hover {
                        background-color: #cbd5e1;
                    }

                    .dropbtn:hover {
                        color: #000;
                        background-color: #fff;
                        border-radius: 0.5rem;
                    }

                    @media (max-width: 768px) {
                        .dropdown {
                            position: absolute;
                            display: inline-block;
                            right: 15%;
                            top: 10%;
                        }
                        .dropbtn { color:#111; }
                    }
                </style>

                    <div id="glt-translate-trigger">
                    <div class="dropdown ml-4">
                        <div class="dropbtn">
                        <img class="dropbtn-flag" src="https://jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp" alt="TRANSLATE"/>
                        <div class="dropbtn-text" translate="no">EN</div>
                        </div>

                        <div class="dropdown-content">
                        
                        <button class="dropbtn" onclick="changeLanguage('ID', 'jwc.gotra-resources.my.id/web-upload/1740989665-03-03-2025-Mh27VA1r8lexDsaok9ZKpzjfwBTXJRdQ.webp'); doGTranslate('en|id');return false;">

                            <img src="https://jwc.gotra-resources.my.id/web-upload/1740989665-03-03-2025-Mh27VA1r8lexDsaok9ZKpzjfwBTXJRdQ.webp" alt="TRANSLATE" />
                            <div class="dropbtn-text" translate="no">ID</div>
                        </button>


                        <button class="dropbtn" onclick="changeLanguage('EN', 'jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp'); doGTranslate('en|en');return false;">

                            <img src="https://jwc.gotra-resources.my.id/web-upload/1740989614-03-03-2025-JxOpLAEqk8TfsIwerBymzPhMGvtDbj1i.webp" alt="TRANSLATE" />
                            <div class="dropbtn-text" translate="no">EN</div>
                        </button>
                        </div>
                    </div>
                    </div>

                    <div class="d-none" id="google_translate_element2"></div>


                  <a class="btn btn-book-atas d-none d-md-block" href="<?= $func->dm_whatsapp() ?>"><i class="fab fa-whatsapp mr-2"></i>+<?= $data->social->whatsapp ?></a>

                                    
                                    
                                </div>
                            </div>
                        </div>

                    <script>
                        function changeLanguage(language, img) {
                          var dropbtn = document.querySelector(".dropbtn-text");
                          var flag = document.querySelector(".dropbtn-flag");
                          dropbtn.textContent = language;
                          flag.src = "https://" + img;
                        }
                    </script>

                    </header>
                <style>
                </style>

                <div role="main" class="main" style="background: #fff;">
