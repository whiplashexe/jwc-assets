<?php 
$types = array('default','boxed','side_header');
$side = 'left';
$logo = 'true';
/*style header*/
$selected = 'default'; ?>

<!DOCTYPE html>
<html lang="id" class="
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

				<title><?= $func->title_bar() ?></title>

				<?php if ($data->site_position == 'home'): ?>
					<meta name="description" content="<?= $data->web->site_desc ?>">
					<meta name="keywords" content="<?= $data->web->site_keyword ?>">
					<meta name="title" content="<?= $data->web->site_name ?>">
				<?php endif ?>

				<?= $func->meta_tag() ?>


				<!-- Mobile Metas -->
				<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

				<!-- Web Fonts  -->
				<!-- Vendor CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="<?= base_url('assets') ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.carousel.min.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.theme.default.min.css" type="text/css" rel="stylesheet">
				 <?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
				<!-- Theme CSS -->
				<link href="<?= base_url('assets') ?>/front/css/theme.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/theme-elements.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/style-tour.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/colors.css" type="text/css" rel="stylesheet">

				<!-- Current Page CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/navigation.css" type="text/css" rel="stylesheet">
				
<style>
:root{
	/*default*/	
	--colors: #501372;
}

i.fas.fa-chevron-down {
	display: none;
}

@media (min-width: 768px) {
	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
		border-radius: 5px !important;
	}

    #header .header-nav.header-nav-stripe .header-nav-main { align-self: center; }
}

.header-body {
	background-color: transparent !important;
}

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #111;
}

#header .header-nav.header-nav-stripe nav>ul>li>a {
	color: #111;
	font-size: 17px;
    letter-spacing: 0px;
    font-weight: 300;
    font-family: DINNextRoundedLTW01-Light;
    text-transform: capitalize;
}

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: white;
}

.logo1, .logo2 { transition: all ease 500ms; }

html.sticky-header-active .logo1 {display: none;}

html:not(.sticky-header-active) .logo2 {display: none;}

@media (min-width: 768px) {
	#header .header-nav.header-nav-stripe nav>ul>li>a {
	    padding: 0 15px!important;
	    min-height: 50px;;

	    height: 50px;
	}

	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
	    background-color: var(--colors);
	}
}

@media (max-width: 768px) {
    html:not(.sticky-header-active) #menu-button {
        border-color: unset;
        border: unset;
        color: #111;
        margin-left: 10px;
    }

    html.sticky-header-active #menu-button {
        border-color: unset;
        border: unset;
        color: #111;
        margin-left: 10px;
    }

    .menu-tour a { font-family: DINNextRoundedLTW01-Light; }

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
        color: #222;
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
        border-bottom: 1px solid #a3a0a05c;
        margin: unset;
    }

    .menu-tour a {
        color: #222;
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

.bg-primarypage {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    height: 300px;
}

.title-primarypage {
    position: absolute;
    left: 0;
    right: 0;
    top: 25%;
    padding: 0 8%;
}

.title-primarypage h1 {
    font-family: DINNextRoundedLTW01-Light;
    color: white;
    font-weight: 800;
    font-size: 40px;
    text-transform: capitalize;
    letter-spacing: 0px;
    margin-bottom: 18px;
}

.title-primarypage p {
    font-family: 'DINNextRoundedLTW01-Light';
    color: rgba(255, 255, 255, .8);
    font-size: 17px;
    margin-bottom: 0px;
    font-weight: 200;
    margin-left: 6px;
}

@media (max-width: 768px) {

	.bg-primarypage {
	    background-position: -155px;
	    height: 250px;
	}

	.title-primarypage { text-align: center; }

	.title-primarypage h1 {
	    font-family: DINNextRoundedLTW01-Light;
	    color: white;
	    font-weight: 800;
	    font-size: 35px;
	    text-transform: capitalize;
	    letter-spacing: 0px;
	    margin-bottom: 8px;
	}

	.title-primarypage p {
	    font-family: 'DINNextRoundedLTW01-Light';
	    color: rgba(255, 255, 255, .8);
	    font-size: 14px;
	    margin-bottom: 0px;
	    font-weight: 200;
	    margin-left: 0px;
	}
}

.service-section {
    position: relative;
    padding: 5rem 0px;
    overflow: hidden;
    background-color: white;
}

.title-product span {
    font-family: 'DINNextRoundedLTW01-Light';
    color: var(--colors);
    font-weight: 500;
    font-size: 17px;
    text-transform: uppercase;
    margin-bottom: 7px;
    letter-spacing: 4.5px;
    display: block;
}

.title-product h2 {
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 600;
    letter-spacing: 0.5px;
    font-size: 35px;
    line-height: 45px;
    text-transform: capitalize;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.title-product p {
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 300;
    font-size: 16px;
    line-height: 28px;
}

.btn-product {
    background: var(--colors);
    padding: 15px 30px;
    font-family: 'DINNextRoundedLTW01-Light';
    border-radius: 5px;
    font-size: 14px;
    color: white;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: all ease 500ms;
}

.btn-product:hover {
    transition: all ease 500ms;
    background-color: #FF7D44;
    color: white;
}

.wrap-pvilla {
    position: relative;
    box-shadow: 1px 5px 19px 0px rgb(89 59 36 / 14%);
    text-align: center;
    border-radius: 5px;
}


.wrap-pvilla .recommended {
    position: absolute;
    top: 5%;
    right: 5%;
    padding: 5px 15px;
    border-radius: 3px;
    border: 1px solid white;
    font-family: DINNextRoundedLTW01-Light;
    color: white;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.img-pvilla {
    height: 250px;
    object-fit: cover;
    margin-bottom: 15px;
    width: 100%;
}

.wrap-text { position: relative; padding-bottom: 25px; }

.wrap-text:after {
    position: absolute;
    content: '';
    background-image: url(https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1647321381-15-03-2022-wxHOUY9oMmsnuc7h3NlQJV2F4gyGaIdW.svg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center bottom;
    display: block;
    padding-bottom: 8%;
    width: 100%;
    top: -58px;
    z-index: 10;
}

.wrap-text h3 {
    font-family: DINNextRoundedLTW01-Light;
    text-transform: capitalize;
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 22px;
    margin-top: 15px;
    margin-bottom: 10px;
}

.wrap-text p {
    margin-bottom: 15px;
    font-family: DINNextRoundedLTW01-Light;
    font-weight: 300;
    font-size: 15px;
    line-height: 25px;
    padding: 0px 25px;
}

.btn-pvilla {
    padding: 8px 25px;
    background: var(--colors);
    color: white;
    font-family: 'DINNextRoundedLTW01-Light';
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 500;
    font-size: 12px;
    border-radius: 3px;
    margin-top: 5px;
}

.btnl { text-align: right; align-self: center; }

@media (max-width: 768px) {
    .title-product {
        text-align: center;
    }

    .title-product h2 {
        font-family: 'DINNextRoundedLTW01-Light';
        font-size: 30px;
        line-height: 35px;
        margin-bottom: 13px;
    }

    .title-product p {
        font-size: 13px;
        line-height: 24px;
    }

    .slide-fix {
        position: relative;
        z-index: 1;
        overflow-y: scroll;
    }

    .btn-product {
        background: var(--colors);
        padding: 10px 20px;
        font-family: 'DINNextRoundedLTW01-Light';
        border-radius: 5px;
        font-size: 11px;
        color: white;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        transition: all ease 500ms;
    }

    .btnl { text-align: center; margin-bottom: 20px; }
}

/* Profile */

.wrap-profil span {
        font-family: 'DINNextRoundedLTW01-Light';
        color: var(--colors);
        font-weight: 500;
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 6px;
        letter-spacing: 4.5px;
        display: block;
    }
    
    .wrap-profil h3 {
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 0.2px;
        font-size: 35px;
        line-height: 50px;
        margin-bottom: 13px;
        position: relative;
        z-index: 2;
    }

    .wrap-profil p {
        font-family: 'DINNextRoundedLTW01-Light';
        font-size: 28px;
        line-height: 40px;
        color: #000;
        position: relative;
        z-index: 2;
    }

    .btn-profile {
        background: var(--colors);
        padding: 15px 30px;
        font-family: 'DINNextRoundedLTW01-Light';
        border-radius: 5px;
        font-size: 14px;
        color: white;
        font-weight: 800;
        text-transform: uppercase;
        transition: all ease 500ms;
        letter-spacing: 2px;
    }

    .btn-profile:hover {
        background-color: #111;
        color: white;
        transition: all ease 500ms;
    }

    .villa-img { position: relative; }

    .villa-img:after {
        position: absolute;
        content: '';
        top: 3%;
        left: 3%;
        right: 3%;
        bottom: 3%;
        border: 3px solid white;
        border-radius: 0px;
    }

    .img-villa {
        height: 500px;
        object-fit: cover;
        width: 100%;
    }

@media (max-width: 768px) {
    .wrap-profil h3 {
        font-size: 30px;
        line-height: 35px;
        margin-bottom: 20px;
    }

    .wrap-profil p {
        font-size: 17px;
        line-height: 30px;
    }

    .img-villa {
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .villa-img:after { display: none; }

    .wrap-profil { text-align: center; }
}

/* Paralax Visi Misi */

    .visimisi {
        position: relative;
        background: var(--colors);
    }

    .wrap-visi-misi {
        padding: 0px 90px;
    }

    .wrap-visi-misi h2 {
        font-family: DINNextRoundedLTW01-Light;
        font-weight: 700;
        letter-spacing: 0px;
        color: #fff;
        text-transform: capitalize;
        font-size: 35px;
        line-height: 45px;
        margin-bottom: 15px;
    }

    .wrap-visi-misi p {
        font-family: 'DINNextRoundedLTW01-Light';
        color: #eee;
        font-size: 16px;
        line-height: 30px;
    }

    .wrap-visi-misi ol li {
        font-family: 'DINNextRoundedLTW01-Light';
        color: #eee;
        font-size: 16px;
        margin-bottom: 7px;
        margin-bottom: 15px;
    }

    .img-visimisi {
        height: 700px;
        width: 100%;
        object-fit: cover;
    }

@media (max-width: 768px) {
    .wrap-visi-misi {
        padding: 0px 30px;
        margin-bottom: 40px;
    }

    .wrap-visi-misi h2 { font-size: 25px; }

    .img-visimisi {
        height: 300px;
        object-fit: cover;
        margin-bottom: 30px;
    }
}

    .volunteer {
        padding: 40px 0 50px;
        background: var(--colors);
        text-align: center;
        position: relative;
    }

    .wrap-volunteer {
        padding: 0px 50px;
    }

    .wrap-volunteer h2 {
        font-family: 'DINNextRoundedLTW01-Light';
        color: white;
        font-weight: 700;
        letter-spacing: 0px;
        font-size: 40px;
        line-height: 50px;
        margin-bottom: 18px;
    }

    .wrap-volunteer p {
        color: #f1f1f1;
        font-family: 'DINNextRoundedLTW01-Light';
        font-size: 16px;
        line-height: 30px;
    }

    .btn-volunteer {
        margin-top: 10px;
        background: black;
        padding: 15px 30px;
        color: white;
        font-family: 'DINNextRoundedLTW01-Light';
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 15px;
        font-weight: 600;
        transition: all ease 500ms;
    }

    .hover-but {
        background: var(--colors) !important;
        color: white !important;
        margin-left: 0px !important;
        transition: all ease 500ms !important;
    }

/* Blog */

  .wrap-article img {
      height: 250px;
      object-fit: cover;
      border-radius: 5px 0px 5px 0px;
  }

  .wrap-article p {
      font-family: 'DINNextRoundedLTW01-Light';
      font-size: 13px;
      padding-right: 10px;
      margin-bottom: 25px;
  }

  .wrap-article a {
      background: black;
      color: white;
      font-family: DINNextRoundedLTW01-Light;
      text-transform: uppercase;
      font-size: 12px;
      padding: 10px 30px;
      border-radius: 5px;
      transition: all ease 500ms;
  }

  .wrap-article h3 {
      margin-bottom: 8px;
      font-family: 'DINNextRoundedLTW01-Light';
      text-transform: none;
      font-weight: 600;
      font-size: 17px;
      line-height: 24px;
      letter-spacing: 0px;
      padding-right: 15px;
  }

  .shadow-art {
      box-shadow: 1px 5px 19px 0px rgb(89 59 36 / 14%);
      border-radius: 5px;
      position: relative;
      background-color: white;
  }

@media (max-width: 768px) {

  .pad8 { padding-left: 15px !important; }

  .wrap-article img {
      height: 250px;
      object-fit: cover;
      border-radius: 5px 5px 0px 0px;
  }

  .wrap-article h3 {
      margin-bottom: 8px;
      font-family: 'DINNextRoundedLTW01-Light';
      text-transform: none;
      font-weight: 600;
      font-size: 18px;
      line-height: 25px;
      letter-spacing: 0px;
      margin-top: 10px;
      padding: 0px 20px;
      padding-top: 15px;
  }

  .wrap-article p {
      font-family: 'DINNextRoundedLTW01-Light';
      font-size: 13px;
      padding-right: 10px;
      padding: 0px 20px;
      margin-bottom: 15px;
      margin-top: 15px;
  }

  .wrap-article a {
      background: black;
      color: white;
      font-family: DINNextRoundedLTW01-Light;
      text-transform: uppercase;
      font-size: 12px;
      padding: 10px 30px;
      border-radius: 5px;
      transition: all ease 500ms;
      margin: 0px 20px;
      display: block;
      width: max-content;
      margin-bottom: 25px;
  }

  .wrap-article { margin-bottom: 20px; }
}

@media (max-width: 768px) {
    .wrap-volunteer {
        padding: 0px 10px;
    }
}

@media ( min-width: 768px ) {
    .display-pc-share {
        display: flex;
    }
}

@media ( max-width: 768px ) {
    .display-pc-share {
        display: none;
   }
}

@media (min-width: 768px) {
    .container {
        max-width: 1140px;
    }
}

@media (min-width: 1340px) {
    .container {
        max-width: 1240px;
    }
}

.wrap-ourteam img {
    border-radius: 130px;
    border: 4px solid var(--colors);
    height: 150px;
    margin-bottom: 20px;
}
.wrap-ourteam {
    background: #fff6f1;
    text-align: center;
    padding: 25px;
    border-radius: 10px;
}

.wrap-ourteam span {
    font-family: 'DINNextRoundedLTW01-Light';
    color: var(--colors);
    margin-bottom: 0;
    font-weight: 500;
    font-size: 15px;
}

.wrap-ourteam h3 {
    font-family: 'DINNextRoundedLTW01-Light';
    text-transform: capitalize;
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 22px;
    line-height: 28px;
    margin-bottom: 8px;
}

/* Blog */

.wrap-blog img {
    height: auto;
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
    background: var(--colors);
    font-family: 'DINNextRoundedLTW01-Light';
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
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

.wrap-blog2 h3 {
    text-transform: unset;
    font-family: 'DINNextRoundedLTW01-Light';
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
    font-family: 'DINNextRoundedLTW01-Light';
    color: #777;
}

.wrap-blog2 a {
    border-radius: 5px;
    font-family: 'DINNextRoundedLTW01-Light';
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


 .carousel-wall .wrp-img img,
    .carousel-wall1 .wrp-img img {
        border-radius: 10px;
        height: auto;
        object-fit: contain;
        object-position: center;
    }

    .carousel-wall .slick-track {
      display: flex;

    }
    .carousel-wall1 .slick-track {
      display: flex;
      flex-direction: row-reverse; /* Balik urutan slide */
    }

    .carousel-wall .slick-slide {
      transform: scaleX(1); /* Balik setiap slide secara horizontal */
    }
    .carousel-wall1 .slick-slide {
      transform: scaleX(-1); /* Balik setiap slide secara horizontal */
    }

    .carousel-wall {
      transform: scaleX(1); /* Balik container untuk mengembalikan tampilan normal */
    }
    .carousel-wall1 {
      transform: scaleX(-1); /* Balik container untuk mengembalikan tampilan normal */
    }

    @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }

        p.counter {
            font-size: 27px;
            line-height: 27px;
            margin-bottom: 35px;
        }

        .wrp-img img { height:200px; }
    }

@font-face {font-family: "DINNextRoundedLTW01-Light"; src: url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.eot"); src: url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.woff") format("woff"), url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/643121b5d2cc9943eff9b59054cc29ba.svg#DINNextRoundedLTW01-Light") format("svg"); }

</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>

</head>
<body>
	<!-- <?= $func->fb_sdk() ?> -->
	
	<div class="body">
		<header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
				<div class="header-body">

					<!-- <div class="header-container container-fluid hilang-head" style="padding: 0px 30px; height: 70px; border-bottom: 1px solid #e1e1e1; background-color: white;">
						<div class="header-row container">

							<div class="header-column justify-content-start display-pc" style="align-self: center;">
								<div class="header-logo">
									<a href="<?= base_url() ?>">
										<img style="height: 60px;" class="img-fluid" src="<?= $data->web->site_logo ?>">
									</a>
								</div>
							</div>

							<div class="header-column justify-content-end sosmed-i" style="display: inline-block; align-self: center;">
								<span class="text-wid" style="padding-left: 10px;"><i class="fas fa-phone phone"></i>+<?= $data->company->company_telp; ?></span>
								<span class="text-wid"><i class="far fa-envelope mail"></i><?= $data->company->company_email; ?></span>
							</div>

						</div>
					</div> -->

					<div class="header-container container" style="height: 105px; padding: 20px 0px;">
						<div class="header-row">

							<div class="header-column justify-content-start logo-menu" style="align-self: center; align-items: baseline;">
								<div class="header-logo">
									<a href="<?= base_url() ?>">
										<img style="height: 95px;" alt="logo wcr indonesia" class="img-fluid logo1" src="<?= $data->web->site_logo_alternative ?>">
										<img style="height: 95px;" alt="logo wcr indonesia" class="img-fluid logo2" src="<?= $data->web->site_logo_alternative ?>">
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
													<?php foreach ($data->menu->primary_menu as $key => $menu) : ?>
														<?php if (array_key_exists('child', json_decode(json_encode($menu), true))) : ?>
															<li class="dropdown">
																<a class="dropdown-item dropdown-toggle" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>

																<ul class="dropdown-menu">
																	<?php foreach ($menu->child as $key => $menu) : ?>
																		<?php if (array_key_exists('child', json_decode(json_encode($menu), true))) : ?>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>
																				<ul class="dropdown-menu">
																					<?php foreach ($menu->child as $key => $menu) : ?>
																						<li><a class="dropdown-item" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
																					<?php endforeach ?>
																				</ul>
																			</li>
																			<?php else : ?>
																				<li><a class="dropdown-item" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
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

												<button class="menu b-p-bg-color display-android" id="menu-button"><i class="fas fa-bars"></i></button>
                                                    <div class="menu-box" id="menuWrapper">
                                                        <button id="close" class="p-color"><i style="font-size:24px" class="fa">&#xf00d;</i></button>
                                                        <div class="container menu-tour">
                                                            <ul>

                                                                <a href="<?= base_url() ?>">
                                                                    <img style="height: 60px;" class="img-fluid mb-2" loading="lazy" src="<?= $data->web->site_logo_alternative ?>" alt="<?= $data->web->site_name ?>">
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
                                                            </ul>
                                                        </div>
                                                    </div> <!-- /.search-box -->


											</div>
										</div>
									</div>

                                    <style>
      .dropdown {
        position: relative;
        display: inline-block;
        font-family: DINNextRoundedLTW01-Light;
      }

      .dropbtn {
        width: 100px;
        height: 40px;
        padding: 0 1rem;
        line-height: 40px;
        color: #111;
        display: flex;
        align-items: center;
        cursor: pointer;
        border: 0;
        background-color: transparent;
        transition: 0.3s;
      }

      .dropdown-content {
        min-width: 160px;
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
            top: 24%;
        }
      }
</style>

                <div id="glt-translate-trigger">
                   <div class="dropdown mx-4">
                      <div class="dropbtn">
                        <img class="dropbtn-flag" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                        <div class="dropbtn-text" translate="no">EN</div>
                      </div>

                      <?php if ($_SERVER['REQUEST_URI'] == "/"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/about-us"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/about-us');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/tentang-kami');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/category/activity-program"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/category/activity-program');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/category/program-aktivitas');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/gallery/women-resilience-in-politics"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/gallery/women-resilience-in-politics');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/gallery/women-resilience-in-politics');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>
                        
                      <?php elseif($_SERVER['REQUEST_URI'] == "/gallery/socialization-of-tppo-prevention"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/gallery/socialization-of-tppo-prevention');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/gallery/sosialisasi-pencegahan-tppo');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/article-category/news-articles"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/gallery/article-category/news-articles');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/article-category/berita-artikel');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/article-category/video-news"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/gallery/article-category/video-news');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/article-category/berita-video');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php elseif($_SERVER['REQUEST_URI'] == "/contact"): ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/contact');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/contact');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>

                      <?php else: ?>
                        <div class="dropdown-content">
                            <button class="dropbtn" onclick="changeLanguage2('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp', 'https://en.wcr-indonesia.org/');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">EN</div>
                            </button>
                            <button class="dropbtn" onclick="changeLanguage2('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp', 'https://wcr-indonesia.org/');">
                                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                                <div class="dropbtn-text" translate="no">ID</div>
                            </button>
                        </div>
                        <!-- <div class="dropdown-content">
                          <button class="dropbtn" onclick="changeLanguage('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp'); doGTranslate('en|id');return false;">
                            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                            <div class="dropbtn-text" translate="no">ID</div>
                          </button>
                          <button class="dropbtn" onclick="changeLanguage('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp'); doGTranslate('en|en');return false;">
                           <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                           <div class="dropbtn-text" translate="no">EN</div>
                          </button>
                        </div> -->  
                      <?php endif ?>



                     <!--<div class="dropdown-content">
                       <?php print_r($data->site_position); ?>
                       <button class="dropbtn" onclick="changeLanguage('ID', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp'); doGTranslate('en|id');return false;">
                         <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464637-26-03-2024-Sf81HNXqMtxU2aKW5g40nyjceTEL3oGb.webp" alt="TRANSLATE" />
                         <div class="dropbtn-text" translate="no">ID</div>
                       </button>


                       <button class="dropbtn" onclick="changeLanguage('EN', 'gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp'); doGTranslate('en|en');return false;">
                         <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE" />
                         <div class="dropbtn-text" translate="no">EN</div>
                       </button>
                     </div> -->


                   </div>
                </div>

                <div class="d-none" id="google_translate_element2"></div>
 <!-- ========== Dropdown ======== -->
                                    

									
										<ul class="header-social-icons social-icons display-pc">
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
									
									
								</div>
							</div>
						</div>


                    <script>
                         function changeLanguage(language) {
                          var dropbtn = document.querySelector(".dropbtn-text");
                          var flag = document.querySelector(".dropbtn-flag");
                          dropbtn.textContent = language;
                          
                        }

                        function changeLanguage2(language, img, url) {
                            var dropbtn = document.querySelector(".dropbtn-text");
                            var flag = document.querySelector(".dropbtn-flag");
                            dropbtn.textContent = language;
                            flag.src = "https://" + img;
                            window.location.href = url;
                        }

                        function changeLanguage1(language, img, baseURL) {
                            var dropbtn = document.querySelector(".dropbtn-text");
                            var flag = document.querySelector(".dropbtn-flag");
                            dropbtn.textContent = language;
                            flag.src = "https://" + img;
                            
                            var currentPath = window.location.pathname;
                            window.location.href = baseURL + currentPath;
                        }
                    </script>

					</header>
				<div role="main" class="main" style="background: #fff;">
