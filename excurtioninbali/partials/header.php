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
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="<?= base_url('assets') ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
                <!-- <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.carousel.min.css" type="text/css" rel="stylesheet">
                <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.theme.default.min.css" type="text/css" rel="stylesheet"> -->

				 <?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
				<!-- Theme CSS -->
				<link href="<?= base_url('assets') ?>/front/css/theme.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/font/hiatus.ttf" type="text/css" rel="stylesheet">
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
	--colors: #ff8c61;
	--color2: #094D52;
    --color3: #62C03A;
    --primtext: 'Clash Grotesk';
    --subtext: 'Clash Grotesk';
}

html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body {
    position: relative;
}

#_watersport-root ._watersport-card-wrapper {
  display: grid !important;
  grid-template-columns: repeat(2, 1fr);
  gap: .8rem;
}

@media (min-width: 768px) {
  #_watersport-root ._watersport-card-wrapper {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        border-radius: 5px !important;
    }
}

.header-body {
    background-color: transparent !important;
    border: unset !important;
    transition: all ease 500ms;
}

html:not(.sticky-header-active) .header-body { margin-top: 10px !important; transition: all ease 1000ms !important; }

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #fff;
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
    color: #fff;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    font-family: var(--subtext);
    /* text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6); */
    text-transform: uppercase;
    padding: 0 10px;
}

html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: var(--color2) !important;
    border: unset !important;
    transition: all ease 500ms !important;
}

<?php if ($data->site_position != 'home'): ?>
    html.sticky-header-active #header .header-body {
        background-color: var(--color2) !important;
        position: relative !important;
    }
<?php endif ?>

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a {
        padding: 0 14px !important;
        min-height: 15px;
        height: 15px;
    }

	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
	    background-color: var(--colors);
	}
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
  
  .menu-tour a { font-family: var(--subtext); }

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
        background: var(--color2);
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

    .header-logo img {
        height: 50px !important;
        margin-top: 5px;
    }

	#menuWrapper {
		overflow: scroll;
	}
}


/* Section All Page */

.section-allpage {
    position: relative;
    height: 450px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-top: -122px;
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
    top: 45%;
    z-index: 1;
    font-family: var(--subtext);
}

@media (max-width: 768px) {
    .section-allpage .text h1 {
        font-size: 28px;
        line-height: 30px;
    }

    .title-product { padding:0px 10px; }

    .section-allpage { height: 350px; }

    .section-allpage .text p {
        font-size: 15px;
    }
}

@media (min-width: 768px) {
    .container-global { padding-left: 7%; padding-right: 7% }
}

@media ( max-width: 768px ) {
   .container-global { padding-left: 5%; padding-right: 5% }
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
    color: var(--color2) !important;
    background: white;
    border: 1px solid;
}

.social-icons li a {
    height: 35px;
    line-height: 35px;
    width: 35px;
    font-size: 17px;
}

.social-icons li a:hover {
    background: var(--colors) !important;
    color: white !important;
}

.social-icons li { margin-right:5px; }

.btn-book-atas {
    font-family: var(--subtext);
    background: var(--colors);
    color: #000;
    margin-left: 15px;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1px;
    margin-top: 5px;
    border-radius: 100px;
}

.btn-book-atas:hover {
    background: #1a1a1a;
    color: white;
}

a { text-decoration:unset !important; }



.btn-contact1 {
    background: var(--colors);
    color: #fff;
    font-family: var(--primtext);
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 15px 40px;
    transition: all ease 500ms;
    letter-spacing: 1px;
}

.btn-contact1:hover {
    background: var(--color2);
    border-color: white;
    color: #fff;
    transition: all ease 500ms;
}

@media (min-width: 768px) {
    .coni { max-width:1340px; }
}

.head-mencen {
    height: 85px; 
    padding: 20px 7%;
}

@media (max-width: 768px) {
    .head-mencen {
        height: 70px !important;
        padding: 20px 3%;
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
    background: var(--colors);
    font-family: var(--subtext);
    color: #000;
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
    background: var(--colors);
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
    font-weight: 800;
    letter-spacing: 0px;
    line-height: 30px;
    color: #333;
    font-size: 21px;
    margin-bottom: 10px;
}

.blog2 p {
    font-weight: 400;
    font-size: 15px;
    line-height: 30px;
    font-family: var(--subtext);
    color: #777;
}

.blog2 a {
    border-radius: 0px;
    font-family: var(--subtext);
    color: var(--colors);
    padding: 0;
    font-size: 14px;
    padding: .6rem 1.3rem;
    background: #000;
    font-weight: 600;
    transition: all ease 500ms;
}

.blog2 a:hover {
    color: #000;
    background: white;
}

@media (max-width: 768px) {
    .blog2 span {
        font-size: 10px;
        margin-bottom: 5px;
    }
    .blog img {
        height: 150px;
    }
    
    .blog2 h3 {
        line-height: 18px;
        font-size: 12px;
    }

    .blog2 p {
        font-size: 14px;
        line-height: 27px;
        display: none;
    }
    .blog2 .btn {
        font-size: 11px;
        padding: .3rem .8rem;
    }
}
/* Blog */


/* ======== CATE ========== */

    .title-blog { position:relative; font-family:var(--subtext); padding-right:35px; }

    .title-blog span {
        color: var(--color2);
        font-family: var(--subtext);
        font-size: 15px;
        line-height: 25px;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        display: block;
    }

    .title-blog h2 {
        color: var(--color2);
        font-family: var(--primtext);
        font-size: 38px;
        line-height: 50px;
        font-weight: 500;
        text-transform: unset;
        letter-spacing: 0px;
        margin-bottom: 25px;
    }

    .title-blog p {
        color: #555;
        font-family: var(--subtext);
        font-size: 15px;
        font-weight: 400;
        line-height: 28px;
        margin-bottom: 20px;
        letter-spacing: 0.2px;
    }

    .btn-lpm {
        border-radius: 0;
        color: white;
        background: var(--colors);
        font-family: var(--subtext);
        font-size: 15px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 10px;
        padding: .6rem 2rem;
        letter-spacing: .5px;
        transition: ease-in-out .2s;
    }

    .btn-lpm:hover {
        background: white;
        color: var(--colors);
    }

@media (max-width: 768px) {
    .title-blog {
        text-align: center;
        padding: unset;
    }

    .title-blog h2 {
      margin-bottom: 15px;
      font-size: 30px;
      line-height: 45px;
    }

    .title-blog span {
        font-size: 12px;
        line-height: 25px;
    }

    .title-blog p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }

    .btn-lpm { margin-bottom:30px; }
}

.ss-arrow button {
    margin: 0;
    padding: 0;
    background: white;
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1.3);
    color: var(--colors);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: all ease 500ms;
}

.ss-arrow button:hover {
    background-color: var(--colors);
    color: white;
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

.pad6rem { padding:6rem 0px; }

@media (max-width: 768px) {

  .ss-arrow button { transform: scale(0.9); }

  .ss-arrow .slide-arrow { top: 45%; }

  .ss-arrow .prev-arrow{
      left: -1%;
      z-index: 1;
    }

    .ss-arrow .next-arrow{
      right: -1%;
      z-index: 1;
    }

    .pad6rem { padding: 3rem 0 !important; }
}

/*=============== Product ===============*/

.product {
    font-family: var(--primtext);
}
.product .card {
    overflow: hidden;
    position: relative;
    border-radius: 5px;
    border: none;
    box-shadow: 5px 5px 10px #00000010, -2px -2px 10px #00000010;
}
.product .card .price span {
    font-size: 20px;
    font-style: normal;
    font-weight: 800;
    color: #333;
}
.product .card .img {
    overflow: hidden;
    position: relative;
}
.product .card .img:after {
    content: "";
    z-index: 3;
    position: absolute;
    top: 50%;
    left: 50%;
    height: 0%;
    width: 200%;
    background: var(--colors);
    opacity: .3;
    transition: all ease 500ms;
    transform: translate(-50%, -50%) rotate(-45deg);
}

.product .card:hover .img:after {
    height: 300%;
}

.product .card img {
    height: 240px;
    object-fit: cover;
    object-position: center;
    transition: all ease 500ms;
}
.product .card .price {
    color: #787780;
    font-style: italic;
    font-size: 12px;
    margin-bottom: 15px;
}
.product .card-body {
    position: relative;
    padding-bottom: 80px!important;
}
.product .card .rating {
    font-size: 12px;
    margin-top: 8px;
    margin-bottom: 0px;
    color: #787780;
}
.product .card .rating i {
    font-size: 14px;
    margin-right: 4px;
    color: #ffa127;
}
.product .card .info-tag {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 1.5rem;
    width: 93%;
    background: var(--colors);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 4px;
    margin-top: 15px;
    padding: 10px 13px;
    color: #000;
}
.product .card .info-tag i {
    margin-right: 5px;
}
.product .card .info-tag span {
    text-transform: uppercase;
    display: block;
    text-align: center;
    margin-left: 8px;
    margin-right: 8px;
    letter-spacing: .2px;
    font-weight: 600;
    font-size: 13px;
}
/*.product .card .info-tag .people {
    border-left: 0.5px solid;
    border-right: 0.5px solid;
}*/
.product .card .card-title {
    transition: all ease 300ms;
    font-weight: 700;
    letter-spacing: -.02em;
    margin-top: 5px;
    margin-bottom: 15px;
    font-size: 20px;
    line-height: 30px;
    color: #313041;
    text-transform: capitalize;
}
.product .card .card-title:hover {color: var(--colors);}
.product .card p {
    margin-bottom: 12px;
    font-size: 15px;
    color: #323232;
    letter-spacing: .3px;
}
.product .card .btn-wraper {
    bottom: 0;
    left: 0;
    width: 100%;
}
.product .card .btn {
    border-radius: 5px;
    font-family: var(--primtext);
    color: var(--color2);
    padding: 0;
    font-size: 15px;
    font-weight: 600;
    transition: all ease 500ms;
}
.product .card .btn:hover {
    color: var(--colors);
}
.product .card:hover img {
    transform: scale(1.1);
}

@media screen and (max-width: 576px) {
    .product .row.justify-content-center {justify-content: start !important;}
    .product .card .txt{
        padding: 0px !important;
        padding-bottom: 60px;
    }

    .product .card p {
        font-size: 12px;
        line-height: 20px;
    }

    .product .card .info-tag {
        padding: 0;
        bottom: 1rem;
    }
    .product .card .info-tag span {
        font-size: 7px;
        margin-left: 4px;
        margin-right: 4px;
    }
    .product .card .card-body {
        padding-bottom: 35px!important;
    }
    .product .card .card-title {
        margin:0;
        font-size: 13px;
        line-height: 20px;
    }
    .product .card .rating {
        font-size: 8px;
        margin-top: 8px;
        margin-bottom: 5px;
        line-height: 2;
    }
    .product .card .rating i {
        font-size: 7px;
        margin-right: 2px;
    }
    .product .card .price {
        padding: 0;
        font-size: 8px;
        margin-top: 8px;
        line-height: 1;
    }
    .product .card .price span {font-size: 10px;}
    .product .card img {
        height: 150px;
    }
    .product .card .btn {
        font-size: 10px;

    }
}

/* Title Global */

.title-general .tag-ats {
    color: var(--colors);
    font-family: var(--spantext);
    font-size: 20px;
    line-height: 30px;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 0px;
    margin-bottom: 5px;
    display: block;
}

.title-general h2 {
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    color: #000;
    font-family: var(--primtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.title-general h2 span {
    font-size: 45px;
    letter-spacing: 0px;
    line-height: 65px;
    font-weight: 700;
    font-style: italic;
    color: var(--colors);
    text-shadow: 2px 2px 5px #00000010;
    font-family: var(--primtext);
}

@media (max-width: 768px) {
    .title-general h2 {
        text-align: center;
        margin-bottom: 10px;
        font-size: 25px;
        line-height: 33px;
    }
    .title-general h2 span {
        text-align: center;
        font-size: 33px;
        line-height: 35px;
    }

    .title-general .tag-ats {
        font-size: 15px;
        line-height: 15px;
        margin-bottom: 10px;
    }

    .title-general p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }
}

/* FAQ */

/* Profile */

   .wrap-profil-2 p {
        font-family: var(--subtext);
        font-size: 16px;
        line-height: 30px;
        font-weight: 400;
        color: #333;
        margin-bottom: 30px;
        padding-right: 30px;
        text-align: left !important;
    }

    .wrap-profil-2 strong, .wrap-profil-2 b { font-weight: 600 !important; color: var(--colors) }

    .wrap-profil-2 span {
        color: var(--colors);
        font-family: var(--spantext);
        font-size: 30px;
        line-height: 40px;
        font-weight: 400;
        text-transform: capitalize;
        letter-spacing: 0px;
        margin-bottom: 15px;
        display: block;
    }

    .wrap-profil-2 h2 {
        font-size: 45px;
        line-height: 55px;
        color: var(--color2);
        font-weight: 900;
        margin-bottom: 25px;
        letter-spacing: .3px;
        text-transform: uppercase;
        font-family: var(--primtext);
    }

    .wrp-faq-img { position:relative; padding-right:20px; }

    .wrap-profil-2 img {
        height: 600px;
        width: 100%;
        object-fit: cover;
        border-radius: 20px;
    }

    .btn-profile {
        font-family: var(--primtext);
        color: white;
        background: var(--colors);
        padding: 10px 25px;
        font-size: 16px;
        letter-spacing: 0.5px;
        text-transform: capitalize;
        border-radius: 0px;
        margin-top: 15px;
        transition: all ease 500ms;
    }

    .btn-profile:hover {
        background-color: #035A6E;
        color: white;
    }

    .quot-b {
        width: 380px;
        background: #1a1a1a;
        position: absolute;
        z-index: 1;
        bottom: 10%;
        right: 0;
        padding: 40px;
    }

    .quot-b span {
        color: white;
        font-size: 21px;
        line-height: 38px;
        font-style: italic;
    }

@media (max-width: 768px) {
    .wrap-profil-2 p {
        font-size: 14px;
        line-height: 30px;
        padding: unset;
        text-align: center !important;
    }

    .quot-b { display: none; }

    .wrap-profil-2 h2 {
        font-size: 30px;
        line-height: 40px;
    }
    .wrap-profil-2 h2 {
        text-align: center;
        margin-bottom: 10px;
        font-size: 33px;
        line-height: 35px;
    }
    .wrap-profil-2 .sp-atas {
        text-align: center;
        font-size: 25px;
        line-height: 25px;
        margin-bottom: 10px;
    }

    .wrap-profil-2 img { display:none; }
}

html .toggle-primary .toggle label {
    border-radius: 0;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px;
    line-height: 30px;
    letter-spacing: 0.1px;
    margin-bottom: 0px;
    background: unset;
    color: black;
    font-size: 17px;
    border-left: unset;
    border-bottom: 1px solid #eee;
}

html .toggle-primary .toggle.active>label {
    background-color: unset;
    border-color: #eeee;
    color: black;
}

.toggle-content {
    padding: 25px 20px;
    border: unset;
    margin-bottom: 25px;
    font-family: var(--subtext);

}

.toggle-content p {
    padding: 0 !important;
    margin-bottom: 15px !important;
    font-size: 16px;
    line-height: 30px;
    color: #333;
}

.padle { padding-left:20px; }

@media (max-width: 768px) {
    html .toggle-primary .toggle label {
        padding: 18px;
        font-size: 15px;
        padding-right: 50px;
        padding-left: 25px;
        text-align: left;
    }

    .toggle-content p {
        font-size: 14px;
        text-align: left;
    }

   .padle {
        padding: 0px 20px;
    }

}

/* FAQ */

/* Review */

.rev-card .card {

    position: relative;
    border: none;
    background-color: #ffffff30;
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

/*=============== Car Product ===============*/

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
.car-prod .card .notes p {
    margin-bottom: 7px;
    font-size: 13px;
    line-height: 20px;
    color: #323232;
    letter-spacing: 0px;
}
.car-prod .card .notes p b {
    font-weight: 700;
    color: var(--colors);
    font-size: 15px;
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
    .car-prod .card .notes p {
        line-height: 18px;
        font-size: 10px;
    }
    .car-prod .card .notes p b {
        font-size: 13px;
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
/*=============== Car Product ===============*/


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

    .menu-andro {
        align-self: center !important;
        border: 1px solid #ffffff5c;
        border-radius: 100px;
        padding: 15px;
        background: #ffffff50;
        backdrop-filter: blur(10px);
    }
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
<link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk@700,400,600,300,500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="body">
<!--    <header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
  <div class="header-body wow fadeIn" data-wow-duration="2s">
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
                width: 30px;
                height: 3px;
                margin: 6px 0;
                transition: 0.4s;
                }
                .b-p-bg-color .bar1 { background-color:#fff }
                .b-p-bg-color .bar2 { background-color:#fff }
                .b-p-bg-color .bar3 { background-color:#fff }
                html.sticky-header-active .b-p-bg-color .bar1 { background-color:#000 }
                html.sticky-header-active .b-p-bg-color .bar2 { background-color:#000 }
                html.sticky-header-active .b-p-bg-color .bar3 { background-color:#000 }
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
                    <li style="border-bottom: unset;"><a class="btn btn-book-atas" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20https%3A%2F%2Ftreenityexperiences.com.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F"><i class="fa-regular fa-calendar mr-2"></i>Booking Now</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-column end-menu">
          <a class="btn btn-book-atas d-none d-md-block" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20https%3A%2F%2Ftreenityexperiences.com.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F"><i class="fa-regular fa-calendar mr-2"></i>Booking Now!</a>
        </div>
      </div>
    </div>
  </div>
</header>
-->


<!-- NEW HEADER -->

<style>

._header-root ._header-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: nowrap;
  padding-top: 1rem;
  padding-bottom: 1rem;
}

._header-root ._header-nav-wrapper {
  justify-content: center;
  align-items: center;
  background-color: rgba(255,255,255,0.5);
  border-radius: 999em;
  display: none;
}

._header-root ._header-nav-wrapper ._header-nav-item {
  text-transform: uppercase;
  font-family: var(--primtext);
  font-size: clamp(1rem, 2vw, 1,2rem);
  letter-spacing: .1rem;
  color: white;
  padding: 10px 16px;
  transition: all ease-in-out .3s;
  border-radius: none;
}

._header-root ._header-nav-wrapper > ._header-nav-item:first-child {
  border-radius: 999em 0 0 999em;
  overflow: hidden;
}

._header-root ._header-nav-wrapper > ._header-nav-item:last-child {
  border-radius: 0 999em 999em 0;
  overflow: hidden;
}

._header-root ._header-nav-wrapper ._header-nav-item:hover {
  background-color: var(--colors);
}

._header-root ._header-hamburger-btn {
  color: white;
  padding: 0;
  border: none;
  background: transparent;
  font-size: 2rem;
}

._header-root ._header-booking-desktop {
  display: none;
}

._header-hamburger-content {
  position: sticky;
  top: 0;
  left: 0;
  display: none;
  height: 100vh;
  width: 100%;
  background-color: var(--color2);
  z-index: 999999;
  opacity: 0;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  padding: clamp(1rem, 2vw, 2rem);
  gap: 1rem;
}



._header-hamburger-content._hamburger-active {
  display: flex;
  transition: all ease-in-out 1s;
  opacity: 1;
}

._header-hamburger-content ._header-hamburger-content-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

._header-hamburger-content ._header-hamburger-item-wrapper {
  display: flex;
  justify-content: start;
  flex-direction: column;
  align-items: stretch;
  margin-left: 15px;
}

._header-hamburger-content ._header-hamburger-item-wrapper ._header-hamburger-item {
  color: white;
  border-bottom: 1px solid white;
  font-family: var(--primtext);
  padding: .4rem 0;
  text-transform: uppercase;
  letter-spacing: .1rem;
}


._header-hamburger-content ._header-hamburger-close-btn {
  color: white;
  padding: 0;
  border: none;
  background: transparent;
  font-size: 1.4rem;
  font-weight: thin;
}

._header-root .dropdown-toggle {
  text-transform: uppercase;
  font-family: var(--primtext);
  font-size: clamp(1rem, 2vw, 1,2rem);
  letter-spacing: .1rem;
  color: white;
  padding: 10px 16px;
  transition: all ease-in-out .3s;
  background: transparent;
  border: none;
}
._header-root .dropdown-toggle:hover {
  background: var(--colors);
}
._header-root .dropdown-toggle.show {
  background: transparent;
}
._header-root .dropdown-toggle::after {
  content: none;
}

._header-root .dropdown.show>.btn-secondary.dropdown-toggle {
  background: transparent;
}

._header-root .dropdown-menu.show {
  margin-top: 1rem;
  background: rgba(255,255,255,0.5);
}

._header-root .dropdown-menu.show > a {
  text-transform: uppercase;
  font-family: var(--primtext);
  font-size: clamp(1rem, 2vw, 1,2rem);
  letter-spacing: .1rem;
  color: white;
  padding: 10px 16px;
}

._header-root .dropdown-menu.show > a:hover {
  background: var(--colors);
}

@media (min-width: 1100px) {
  ._header-root ._header-nav-wrapper {
    display: flex;
  }
  ._header-root ._header-hamburger-btn {
    display: none;
  }
  ._header-root ._header-booking-desktop {
    display: block;
  }
}

._dnone {
  display: none;
}
</style>


<header id="header" 
  style="<?= $data->site_position == 'view_product' || $data->site_position == 'view_blog' ? 'background: var(--colors); ': '' ?>"
  class="header-no-min-height _header-root <?= $data->site_position == 'home' || $data->site_position == 'view_product' ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}"
>

  <?php 
  $_header = json_decode(json_encode([
    'button' => [
      'text' => 'Booking Now!',
      'link' => 'https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20https%3A%2F%2Fexcurtioninbali.com.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F'
    ]
  ]))
  ?>
  <div class="wow fadeIn" data-wow-duration="2s">
    <div class="_header-wrapper container-global">
      <div class="">
        <a href="<?= base_url() ?>" class="">
          <img style="object-fit: contain; height: auto; width: 210px;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
        </a>
      </div>
      <div class="_header-nav-wrapper">
        <?php foreach($data->menu->primary_menu as $menu): ?>
          <?php $menu = json_decode(json_encode($menu), true); ?>
          <?php if (array_key_exists('child', $menu)): ?>    
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $menu['label'] ?>
              </button>
              <div class="dropdown-menu" style="z-index: 9999; <?= $data->site_position == 'view_product' || $data->site_position == 'view_blog' ? 'background: white !important; ': '' ?>" aria-labelledby="dropdownMenuButton">
                <?php foreach ($menu['child'] as $child) : ?>
                  <a class="dropdown-item" href="<?= $child['link'] ?>" style="<?= $data->site_position == 'view_product' || $data->site_position == 'view_blog' ? 'color: black; ': '' ?>" > <?= $child['label'] ?></a>
                <?php endforeach; ?>
              </div>
            </div>

          <?php else: ?>
            <a class="_header-nav-item" href="<?= $menu['link'] ?>">
              <?= $menu['label'] ?>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <div class="_header-booking-desktop _header-booking">
        <a class="btn btn-book-atas" style="<?= $data->site_position == 'view_product' || $data->site_position == 'view_blog' ? 'background: white !important; color: var(--colors) !important; ': 'color: white !important;' ?>" href="<?= $_header->button->link ?>"><i class="fa-regular fa-calendar mr-2"></i><?= $_header->button->text ?></a>
      </div>
      <button class="_header-hamburger-btn">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>

<div class="_header-hamburger-content">
  <div class="_header-hamburger-content-header">
    <div class="header-logo">
      <a href="<?= base_url() ?>">
        <img style="object-fit: contain; height: auto; width: 150px;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
      </a>
    </div>
    <button class="_header-hamburger-close-btn">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  <div class="_header-hamburger-item-wrapper">
    <?php foreach($data->menu->primary_menu as $key=>$menu): ?>
      <?php $menu = json_decode(json_encode($menu), true); ?>
      <?php if (array_key_exists('child', $menu)): ?>
        <a class="_header-hamburger-item" data-toggle="collapse" href="#collapse<?= $key ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $key ?>">
          <?= $menu['label'] ?> <i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse" id="collapse<?= $key ?>">
          <div class="card card-body"  style="background-color: transparent; border: none; padding: 8px; margin-left: 1rem;">
            <?php foreach($menu['child'] as $child): ?>
              <a class="_header-hamburger-item" href="<?= $child['link'] ?>"><?= $child['label'] ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <a class="_header-hamburger-item" href="<?= $menu['link'] ?>"><?= $menu['label'] ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="_header-booking-mobile _header-booking">
    <a  class="btn btn-book-atas" href="<?= $_header->button->link ?>"><i class="fa-regular fa-calendar mr-2"></i><?= $_header->button->text ?>!</a>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", (event) => {

  const headerRoot = document.querySelector("._header-root");
  const hamburgerBtn = document.querySelector("._header-root ._header-hamburger-btn");
  const hamburgerCloseBtn = document.querySelector("._header-hamburger-content ._header-hamburger-close-btn");
  const hamburgerContent = document.querySelector("._header-hamburger-content");
  const headerDropdownsWrapper = document.querySelectorAll("._header-root .dropdown");


  hamburgerBtn.addEventListener("click", () => {
    hamburgerContent.classList.add("_hamburger-active");
    headerRoot.classList.add("_dnone");
  });

  hamburgerCloseBtn.addEventListener("click", () => {
    hamburgerContent.classList.remove("_hamburger-active");
    headerRoot.classList.remove("_dnone");
  });

  headerDropdownsWrapper.forEach((dropdown, index) => {
    dropdown.addEventListener('mouseenter', (event) => {
      headerDropdownsWrapper.forEach((otherDropdown) => {
        otherDropdown.children[1].classList.remove("show");
      });

      event.target.children[1].classList.add("show");
    });
  });

  headerDropdownsWrapper.forEach(dropdown => {
    document.addEventListener('click', () => {
      dropdown.children[1].classList.remove("show")
    });
  })
});
</script>
<!-- NEW HEADER END -->


<div role="main" class="main" style="background: url('https://gotra.sgp1.digitaloceanspaces.com/web-upload/1734076078-13-12-2024-SXDrEc9Rznl3iTavYHk4GVKpeqN02LJQ.webp');">
