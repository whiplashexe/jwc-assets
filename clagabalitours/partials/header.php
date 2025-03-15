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
                <?php elseif ($data->site_position == 'view_blog'): ?>
                    <meta name="description" content="<?= $data->result->seo_content ?>">
                    <meta name="keywords" content="<?= $data->result->seo_keyword ?>">
                    <meta name="title" content="<?= $data->result->seo_title ?>">
                <?php endif ?>

				<?= $func->meta_tag() ?>

				<!-- Mobile Metas -->
				<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

				<!-- Web Fonts  -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

				<!-- Vendor CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
				<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
:root{
	/*default*/	
	--boxed: #5f758d;
	--body: #e8f5e9;
	--colors: #5b2d5e;
	--color2: #FFD700;
    --color3: #ffc700;

    --primtext: "Raleway", sans-serif;
    --subtext: "Raleway", sans-serif;
}
body {
    font-family: var(--primtext);
}
i.fas.fa-chevron-down {
    display: none;
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        border-radius: 5px !important;
    }
}

.header-body {
    background-color: white !important;
    border: unset !important;
    transition: all ease 500ms;
}

html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body { position:relative; }

html:not(.sticky-header-active) .header-body { transition: all ease 1000ms !important; }

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #333;
}

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a.dropdown-toggle:after {
    border-color: #fff transparent transparent transparent;
}

@media (max-width: 768px) {
    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
    }
}

#header .header-nav.header-nav-stripe nav>ul>li>a {
    color: #333;
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 0px;
    font-family: var(--primtext);
    text-transform: capitalize;
    padding: 0 10px;
}

html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: #1A2B4987;
    backdrop-filter: saturate(180%) blur(20px);
    border: unset !important;
    transition: all ease 500ms !important;
}

@media (min-width: 768px) {
	#header .header-nav.header-nav-stripe nav>ul>li>a {
	    padding: 0 13px!important;
	    min-height: 50px;

	    height: 50px;
	}

	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
	    background-color: var(--colors);
	}

    <?php if ($data->site_position != 'home'): ?>
        #header.header-no-min-height .header-body {
            margin-top: 0 !important;
            background: white !important;
            /* background: var(--color3) !important; */
        }
    <?php endif ?>
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a.dropdown-toggle:after {
        border-color: #fff transparent transparent transparent !important;
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
        background: var(--colors);
        z-index: 99999;
        opacity: 0;
        visibility: hidden;
        transition: all ease .5s;
    }

    #menuWrapper #close {
        color: #fff;
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
        color: #fff;
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
    height: 300px;
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
    align-items: center;
    font-family: var(--primtext);
}

@media (max-width: 768px) {
    .section-allpage {
        height: 200px;
        top: 0;
        margin-top: -20px;
    }

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

.wrap-blog2 span {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #fff;
    font-family: var(--primtext);
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

span.catcat {
    position: absolute;
    bottom: 13%;
    z-index: 1;
    left: 4%;
    background: var(--colors);
    font-family: var(--primtext);
    color: #fff;
    font-weight: 600;
    border-radius: 100px;
    padding: 3px 20px;
    font-size: 13px;
    text-transform: uppercase;
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
    font-size: 16px;
    line-height: 30px;
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
      height: 40px !important;
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
    margin-left: 15px;
    padding: 8px 20px;
    font-weight: 500;
    font-size: 14px;
    margin-top: 5px;
    transition: all esae 500ms;
}

.btn-book-atas:hover {
    background: black;
    color: #fff;
}

a { text-decoration:unset !important; }



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

@media (max-width: 768px) {

  .ss-arrow button { transform: scale(1); }

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


.revrev .slick-list { overflow:unset !important; }

/* TOUR */

#__tours_root {
  position: relative;
  font-family: var(--primtext);
  width: 100%;
  background-color: var(--colors);
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__tours_root .wrapper {
  z-index: 2;
  width: 100%;
  margin: 4rem 7%;
  gap: 1.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#__tours_root .wrapper * {
  padding: 0;
  margin: 0;
}
#__tours_root .wrapper .header {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}
#__tours_root .wrapper .header .title {
  /**font-size: clamp(1.3rem, 2vw, 3rem);
  color: white;
  font-weight: bold;
  **/
  font-size: clamp(1.3rem, 2vw, 3rem);
  letter-spacing: 0.1rem;
  color: oklch(37.3% 0.034 259.733deg);
  line-height: 1.7rem;
  text-transform: capitalize;
  font-weight: 600;
  color: white;
}
#__tours_root .wrapper .product-wrapper {
  width: 80%;
}
#__tours_root .wrapper .product-wrapper .tour-product {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  text-decoration: none;
  margin: 0 1rem;
  gap: 1rem;
  overflow: hidden;
}
#__tours_root .wrapper .product-wrapper .tour-product:hover .tour-image {
  scale: 1.2;
}
#__tours_root .wrapper .product-wrapper .tour-product .tour-image-wrapper {
  border-radius: 1rem;
  overflow: hidden;
}
#__tours_root .wrapper .product-wrapper .tour-product .tour-image-wrapper .tour-image {
  width: 100%;
  transition: all ease-in-out 0.5s;
  height: 400px;
  object-fit: cover;
}
#__tours_root .wrapper .product-wrapper .tour-product .tour-title {
    color: #232323;
    font-size: 20px;
    letter-spacing: 0px;
    background-color: oklch(92.3% 0.003 48.717deg);
    line-height: 30px;
    font-weight: 600;
    border-radius: 15px;
    text-align: center;
    padding: 1rem;
}
#__tours_root .pattern-image {
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 80%;
  object-fit: cover;
  opacity: 0.06;
}

@media (max-width: 768px) {
    #__tours_root .wrapper .header .title { font-size: 27px; }

    #__tours_root .wrapper .product-wrapper {
        width: 95%;
    }

    #__tours_root .pattern-image {
        height: 50%;
    }

    #__tours_root .wrapper .product-wrapper .tour-product { margin:0 10px; }

    #__tours_root .wrapper .product-wrapper .tour-product .tour-image-wrapper .tour-image { height:200px; }

    #__tours_root .wrapper .product-wrapper .tour-product .tour-title {
        font-size: 15px;
        padding: 10px;
    }
}

/* ACTIVITIES */

#__activities_root {
  position: relative;
  font-family: var(--primtext);
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
#__activities_root .wrapper {
  z-index: 2;
  width: 100%;
  margin: 4rem 7%;
  gap: 1.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#__activities_root .wrapper * {
  padding: 0;
  margin: 0;
}
#__activities_root .wrapper .header {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}
#__activities_root .wrapper .header .title {
  font-size: clamp(1.3rem, 2vw, 3rem);
  letter-spacing: 0.1rem;
  color: oklch(37.3% 0.034 259.733deg);
  line-height: 1.7rem;
  text-transform: capitalize;
  font-weight: 600;
}
#__activities_root .wrapper .product-wrapper {
  width: 80%;
}
#__activities_root .wrapper .product-wrapper .activity-product {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  text-decoration: none;
  margin: 0 1rem;
  gap: 1rem;
  overflow: hidden;
}
#__activities_root .wrapper .product-wrapper .activity-product:hover .activity-image {
  scale: 1.2;
}
#__activities_root .wrapper .product-wrapper .activity-product .activity-image-wrapper {
  border-radius: 1rem;
  overflow: hidden;
}
#__activities_root .wrapper .product-wrapper .activity-product .activity-image-wrapper .activity-image {
  width: 100%;
  transition: all ease-in-out 0.5s;
  height: 400px;
  object-fit: cover;
}
#__activities_root .wrapper .product-wrapper .activity-product .activity-title {
    color: #232323;
    font-size: 20px;
    letter-spacing: 0px;
    background-color: oklch(92.3% 0.003 48.717deg);
    line-height: 30px;
    font-weight: 600;
    border-radius: 15px;
    text-align: center;
    padding: 1rem;
}

@media (max-width: 768px) {
    #__activities_root .wrapper .header .title { font-size: 27px; }

    #__activities_root .wrapper .product-wrapper {
        width: 95%;
    }

    #__activities_root .wrapper .product-wrapper .activity-product { margin:0 10px; }

    #__activities_root .wrapper .product-wrapper .activity-product .activity-image-wrapper .activity-image { height:200px; }

    #__activities_root .wrapper .product-wrapper .activity-product .activity-title {
        font-size: 15px;
        padding: 10px;
    }
}

</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<!-- <?= $func->fb_sdk() ?> -->
	
	<div class="body">
		<header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
				<div class="header-body wow fadeInDown" data-wow-duration="2s">

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

					<div class="header-container container-global headatas">
						<div class="header-row">

							<div class="header-column justify-content-start logo-menu" style="align-self: center; align-items: baseline;">
								<div class="header-logo">
									<a href="<?= base_url() ?>">
										<img style="height: 55px; object-fit: cover;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
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

                            .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#000 }

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


							<a class="btn btn-book-atas d-none d-md-block" href="<?= $func->dm_whatsapp() ?>"><i class="fa-regular fa-calendar mr-2"></i>Booking Now!</a>
									

<!-- <style>
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
    color: #fff;
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
    object-fit: cover;
    margin-right: 0.5rem;
    border-radius: 50%;
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
        right: 10%;
        top: 20%;
    }

    .dropbtn { color:#fff; }
  }
</style> -->

            <!--<div id="glt-translate-trigger">
               <div class="dropdown mx-4">
                 <div class="dropbtn">
                   <img class="dropbtn-flag" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE"/>
                   <div class="dropbtn-text" translate="no">En</div>
                 </div>

                 <div class="dropdown-content">
                   
                   <button class="dropbtn" onclick="changeLanguage('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp'); doGTranslate('en|id');return false;">

                     <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                     <div class="dropbtn-text" translate="no">ID</div>
                   </button>


                   <button class="dropbtn" onclick="changeLanguage('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp'); doGTranslate('en|en');return false;">

                     <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                     <div class="dropbtn-text" translate="no">EN</div>
                   </button>

                   <button class="dropbtn" onclick="changeLanguage('KO', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1737785163-25-01-2025-3oa5Z1q0VTEn2h6XLM8tBjuSdlFe4PUp.webp'); doGTranslate('en|ko'); return false;">

                     <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737785163-25-01-2025-3oa5Z1q0VTEn2h6XLM8tBjuSdlFe4PUp.webp" alt="TRANSLATE" />
                     <div class="dropbtn-text" translate="no">KO</div>
                   </button>
                 </div>
               </div>
            </div>-->

            <!--<div class="d-none" id="google_translate_element2"></div>-->
<!-- ========== Dropdown ======== -->
                                
                                
                            </div>
                        </div>
                    </div>

                    <!-- <script>
                    function changeLanguage(language, img) {
                      var dropbtn = document.querySelector(".dropbtn-text");
                      var flag = document.querySelector(".dropbtn-flag");
                      dropbtn.textContent = language;
                      flag.src = "https://" + img;
                    }
                </script> -->


								</div>
							</div>
						</div>


					</header>
				<style>
                </style>

                <div role="main" class="main" style="background: #fff;">
