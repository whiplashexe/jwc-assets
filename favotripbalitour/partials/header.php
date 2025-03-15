<?php
	$types = ["default", "boxed", "side_header"];
	$side = "left";
	$logo = "true";
	/*style header*/
	$selected = "default";
?>

<!DOCTYPE html>
<html lang="en" class="
<?php if ($types[1] == $selected) {
	echo "boxed";
} elseif ($types[2] == $selected) {
	if ($side == "right") {
		echo "side-header side-header-right";
	} else {
		echo "side-header";
	}
} else {
} ?>
			">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?= $func->redirectToHTTPS() ?>
	
	<?= $func->favicon() ?>

    <title><?= $func->title_bar() ?></title>
	
	<?php if ($data->site_position == "home"): ?>
      <meta name="description" content="<?= $data->web->site_desc ?>">
      <meta name="keywords" content="<?= $data->web->site_keyword ?>">
      <meta name="title" content="<?= $data->web->site_name ?>">
	<?php elseif ($data->site_position == "view_blog"): ?>
      <meta name="description" content="<?= $data->result->seo_content ?>">
      <meta name="keywords" content="<?= $data->result->seo_keyword ?>">
      <meta name="title" content="<?= $data->result->seo_title ?>">
	<?php endif; ?>
	
	<?= $func->meta_tag() ?>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vendor CSS -->
    <link href="<?= base_url("assets") ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url("assets") ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
    <!-- <link href="<?= base_url("assets") ?>/front/vendor/owl.carousel/assets/owl.carousel.min.css" type="text/css" rel="stylesheet">
                <link href="<?= base_url("assets") ?>/front/vendor/owl.carousel/assets/owl.theme.default.min.css" type="text/css" rel="stylesheet"> -->
	
	<?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
    <!-- Theme CSS -->
    <link href="<?= base_url("assets") ?>/front/css/theme.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/front/font/hiatus.ttf" type="text/css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/front/css/theme-elements.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/front/css/style-tour.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/front/css/colors.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Current Page CSS -->
    <link href="<?= base_url("assets") ?>/front/vendor/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/front/vendor/rs-plugin/css/navigation.css" type="text/css" rel="stylesheet">

    <style>



      :root{
        /*default*/
        --boxed: #5f758d;
        --body: #e8f5e9;
        --colors: #002536;
        --color2: #dbc55b;
        --color3: #62C03A;
        --primtext: 'Poppins';
        --subtext: 'Poppins';
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
        background-color: transparent; !important;
        border: unset !important;
        transition: all ease 500ms;
      }

      html:not(.sticky-header-active) html:not(.sticky-header-active) .header-body {
        margin-top: 0 !important;
        transition: all ease 1000ms !important;
      }

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

        .header-body {
          background: transparent !important;
        }
      }

      #header .header-nav.header-nav-stripe nav>ul>li>a {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        letter-spacing: 0.1px;
        font-family: var(--subtext);
        text-transform: capitalize;
        padding: 0 10px;
      }

      html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

      html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body { position:relative !important; }

      html.sticky-header-active #header.header-transparent .header-body:before {
        opacity: 1;
        background-color: white !important;
        border: unset !important;
        transition: all ease 500ms !important;
      }

      @media (min-width: 768px) {
        #header .header-nav.header-nav-stripe nav>ul>li>a {
          padding: 0 15px!important;
          min-height: 50px;

          height: 50px;
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

      html #header.header-transparent { position:relative !important; }

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
          color: white;
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
          border-bottom: 1px solid #eeeeee70;
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
        height: 400px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin-top: -155px;
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

      .section-allpage .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        opacity: 0.5;
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
        top: 60%;
        z-index: 1;
        font-family: var(--subtext);
      }

      @media (max-width: 768px) {
        .section-allpage .text h1 {
          font-size: 28px;
          line-height: 30px;
        }

        .section-allpage .text { top:70%; }

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
        background: var(--colors) !important;
        color: #fff !important;
      }

      .social-icons li a {
        height: 35px;
        line-height: 35px;
        width: 35px;
        font-size: 17px;
      }

      .social-icons li a i { line-height:35px; }

      .social-icons li a:hover {
        background: var(--colors) !important;
        color: white !important;
      }

      .social-icons li { margin-right:5px; }


      .btn-book-atas {
        font-family: var(--subtext);
        background: white;
        color: var(--colors);
        border-radius: 100px;
        /*     margin-left: 15px; */
        padding: 8px 20px;
        font-weight: 500;
        font-size: 14px;
        margin-top: 5px;
        transition: all esae 500ms;
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
        background: #000;
        font-family: var(--subtext);
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
        background: #000;
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


      .ss-arrow button {
        margin: 0;
        padding: 0;
        background: white;
        border: 1px solid var(--colors);
        height: 30px;
        width: 30px;
        font-size: 12px;
        transform: scale(1.1);
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

        .pad6rem { padding: 4rem 0 !important; }
      }

      /* Explore Bali */

      #__explore-bali-root {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: var(--primtext);
      }
      #__explore-bali-root * {
        margin: 0;
        padding: 0;
      }
      #__explore-bali-root .__slider-wrapper {
        width: 95%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: stretch;
        margin: 1rem 0;
      }
      #__explore-bali-root .__slider-wrapper header h2 {
        font-size: 1.2rem;
        font-weight: bold;
      }
      #__explore-bali-root .__slider-wrapper .product-slick {
        position: relative;
        padding: 1rem 0;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item {
        width: 400px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: stretch;
        margin-left: 5px;
        margin-bottom: 10px;
        margin-right: 5px;
        gap: 4px;
        border-radius: 0.7rem;
        overflow: hidden;
        box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
        -webkit-box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
        -moz-box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-img-wrapper {
        overflow: hidden;
        transition: all ease-in-out .3s;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item:hover .__item-img-wrapper img {
        transform: scale(1.1);
        z-index: 1;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item img {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
        transition: all ease-in-out .3s;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper {
        display: flex;
        z-index: 2;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        padding: 0.7rem;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-name-stars .__item-name {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-size: 0.9rem;
        font-weight: bold;
        line-height: 1.2rem;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-price {
        margin-top: 0.4rem;
        display: flex;
        flex-direction: row;
        gap: 4px;
        font-weight: normal;
        justify-content: start;
        align-items: end;
        white-space: pre;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-price .__start-from-text {
        display: none;
      }
      #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-price p:last-child {
        color: red;
      }
      @media (min-width: 556px) {
        #__explore-bali-root .__slider-wrapper {
          width: 85%;
        }
        #__explore-bali-root .__slider-wrapper header h2 {
          font-size: 1.6rem;
          font-weight: bold;
        }
        #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper {
          display: flex;
          justify-content: space-between;
          flex-direction: row;
          align-items: center;
          padding: 0.7rem;
        }
        #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-name-stars .__item-name {
          -webkit-line-clamp: 1;
          font-size: 1.1rem;
          line-height: 1.4rem;
        }
        #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-price {
          margin-top: 0;
          font-weight: bold;
          display: flex;
          flex-direction: column;
          justify-content: start;
          align-items: end;
          white-space: pre;
        }
        #__explore-bali-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-desc-wrapper .__item-price .__start-from-text {
          display: inline;
        }
        @media (min-width: 768px) {
          #__other-services-root .__slider-wrapper {
            margin: 2rem 0;
          }
        }
      }

      /* Other Services */

      #__other-services-root {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: var(--primtext);
      }
      #__other-services-root * {
        margin: 0;
        padding: 0;
      }
      .slick-dots {
        display: none !important;
      }
      #__other-services-root .__slider-wrapper {
        width: 95%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: stretch;
        margin: 1rem 0;
      }
      #__other-services-root .__slider-wrapper header h2 {
        font-size: 1.6rem;
        font-weight: bold;
      }
      .slick-dots {
        display: none;
      }
      #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item {
        width: 400px;
        aspect-ratio: 16/20;
        position: relative;
        display: flex;
        gap: 4px;
        border-radius: 0.7rem;
        overflow: hidden;
        padding: 1rem;
        justify-content: start;
        align-items: end;
        margin-left: 5px;
        margin-right: 5px;
      }
      #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item:hover .__item-img {
        transform: scale(1.1);
      }
      #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-gradient {
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60%;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
      }
      #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-title {
        z-index: 2;
        font-size: 1.2rem;
        color: white;
      }
      #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__item-img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        aspect-ratio: 16/9;
        object-fit: cover;
        transition: all ease-in-out .3s;
      }
      @media (min-width: 768px) {
        #__other-services-root .__slider-wrapper {
          width: 85%;
        }
        #__other-services-root .__slider-wrapper {
          margin: 2rem 0;
        }
        #__other-services-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item {
          aspect-ratio: 16/10;
        }
      }

      .read-more, .read-less {
        color: #9f9e9e;
        border-bottom: 1px solid;
      }

      .start-menu-atas {
        width: 25%;
      }

      .start-menu-tengah {
        width: 50%;
      }

      .start-menu-end {
        width: 25%;
      }

      @media (max-width: 768px) {
        .header-logo img {
          height: 45px !important;
        }

        .head-android { padding:10px 3% !important; }
      }

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
          font-size: 18px;
          font-style: normal;
          font-weight: 700;
      }
      .product .card img {
          height: 280px;
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
          margin-top: 1.4rem;
          font-size: 16px;
          letter-spacing: 0.5px;
          font-weight: 700;
          line-height: 30px;
          display: -webkit-box;
          -webkit-line-clamp: 1;
          -webkit-box-orient: vertical;
          overflow: hidden;
      }
      .product .card p {
          margin-bottom: 12px;
          font-size: 15px;
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
          font-size: 15px;
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

      .title-why2 .sp-atas {
          color: var(--color2);
          font-family: var(--subtext);
          font-size: 15px;
          line-height: 25px;
          font-weight: 400;
          text-transform: uppercase;
          letter-spacing: 2px;
          margin-bottom: 10px;
          display: block;
      }

      .title-why2 h2 {
          color: var(--colors);
          font-family: var(--primtext);
          font-size: 30px;
          line-height: 45px;
          font-weight: 600;
          text-transform: unset;
          letter-spacing: 0px;
          margin-bottom: 5px;
      }

      .title-why2 p {
          color: #555;
          font-family: var(--subtext);
          font-size: 15px;
          font-weight: 400;
          line-height: 28px;
          margin-bottom: 20px;
          letter-spacing: 0.2px;
      }

      .title-why2 a {
          font-family: var(--subtext);
          color: var(--colors);
          font-weight: 600;
          font-size: 15px;
          border-bottom: 2px solid;
          padding-bottom: 13px;
      }


      @media (max-width: 768px) {
          .title-why2 h2 {
              margin-bottom: 5px;
              font-size: 20px;
              line-height: 35px;
          }

          .title-why2 .sp-atas {
              font-size: 9px;
              line-height: 15px;
              margin-bottom: 4px;
          }

          .title-why2 p {
              font-size: 11px;
              line-height: 22px;
              letter-spacing: 0px;
              margin-bottom: 0px;
          }

          .title-why2 a {
              font-size: 13px;
              padding-bottom: 7px;
              margin-top: 12px;
              width: max-content;
          }
      }



      .__explore-top {
          display: none!important;
      }
      .__explore-bottom {
          display: flex;
      }
      .__explore-bottom a {
          display: inline-block;
          padding: .4rem;
          color: var(--colors)!important;
          font-weight: bold;
          border-bottom: 1px solid var(--colors);
      }

      @media (min-width: 768px) {
          .__explore-bottom {
              display: none;
          }
          .__explore-top {
              display: block!important;
          }
      }
    </style>

    <!-- Head Libs -->
    <!-- <script src="<?= base_url("assets") ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
	<?= $func->xview_header() ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<!-- <?= $func->fb_sdk() ?> -->

<div class="body">
    <header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product"
			? " header-transparent"
			: "" ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
        <div class="header-body" style="border-bottom: 1px solid #eeeaea !important;">

            <div class="header-container container-global hilang-head d-none d-md-flex" style="height: 90px; border-bottom: 1px solid #e1e1e1; background-color: transparent;">
                <div class="header-row container-global" style="padding: 0;">

                    <div class="header-column justify-content-start display-pc start-menu-atas" style="align-self: center;">
                        <div class="header-logo">
                            <a href="<?= base_url() ?>">
                                <img style="height: 70px; object-fit: cover;" class="img-fluid logo-android" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
                            </a>
                        </div>
                    </div>

                    <div class="header-column justify-items-center sosmed-i start-menu-tengah" style="display: inline-block; align-self: center;">
											<?= $func->load("searchbox") ?>
                    </div>

                    <div class="header-column justify-content-center text-right display-pc start-menu-end" style="align-self: center;">
                        <ul class="header-social-icons social-icons display-pc mt-0" style="margin-left: 0;">
													<?php if (!empty($data->social->facebook_url)): ?>
                              <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
													<?php endif; ?>
													<?php if (!empty($data->social->twitter_url)): ?>
                              <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>"  title="Twitter"><i class="fab fa-twitter"></i></a></li>
													<?php endif; ?>
													<?php if (!empty($data->social->instagram_url)): ?>
                              <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>"  title="Instagram"><i class="fab fa-instagram"></i></a></li>
													<?php endif; ?>
													<?php if (!empty($data->social->youtube_url)): ?>
                              <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>"  title="Youtube"><i class="fab fa-youtube"></i></a></li>
													<?php endif; ?>
													<?php if (!empty($data->social->googleplus_url)): ?>
                              <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>"  title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
													<?php endif; ?>

                            <li class="social-icons-googleplus"><a href="<?= $func->dm_whatsapp() ?>"  title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="header-container container-global head-android" style="height: 65px; padding: 10px 7%; background: transparent;">
                <div class="header-row">

                    <div class="header-column justify-content-start logo-menu d-block d-md-none" style="align-self: center; align-items: baseline;">
                        <div class="header-logo">
                            <a href="<?= base_url() ?>">
                                <img style="height: 70px; object-fit: cover;" class="img-fluid logo-android" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
                            </a>
                        </div>
                    </div>

                    <div class="header-column justify-content-start">
                        <div class="header-row menu-andro">
                            <div class="header-nav header-nav-stripe" style="justify-content: start;">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
																					<?php foreach ($data->menu->primary_menu as $menu): ?>
																						<?php $arrayi = json_decode(json_encode($menu), true); ?>
																						<?php if (array_key_exists("child", $arrayi)): ?>
                                                  <li class="dropdown">
                                                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>

                                                      <ul class="dropdown-menu">
																												<?php foreach ($menu->child as $menis): ?>
																													<?php $arrayis = json_decode(json_encode($menis), true); ?>
																													<?php if (array_key_exists("child", $arrayis)): ?>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="javascript:void(0);" title="<?= $menis->label ?>"><?= $menis->label ?></a>
                                                                    <ul class="dropdown-menu">
																																			<?php foreach ($menis->child as $key => $menis): ?>
                                                                          <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
																																			<?php endforeach; ?>
                                                                    </ul>
                                                                </li>
																													<?php else: ?>
                                                                <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
																													<?php endif; ?>
																												<?php endforeach; ?>
                                                      </ul>

                                                  </li>
																						<?php else: ?>
                                                  <li><a class="nav-link" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
																						<?php endif; ?>
																					
																					
																					<?php endforeach; ?>
                                            <!-- <li class="nav-item"><a title="Home" class="nav-link" href="<?= base_url() ?>">Home </a></li> -->

                                        </ul>
                                    </nav>
                                </div>

                                <style type="text/css">
                                  .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 {
                                    width: 25px;
                                    height: 2px;
                                    margin: 6px 0;
                                    transition: 0.4s;
                                  }

                                  .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#fff; }

                                  /*  html.sticky-header-active .b-p-bg-color .bar1 { background-color:white }
																	 html.sticky-header-active .b-p-bg-color .bar2 { background-color:white }
																	 html.sticky-header-active .b-p-bg-color .bar3 { background-color:white }
			 
<?php if ($data->site_position != "home"): ?>
                                .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#fff !important; }
                            <?php endif; ?> */

                                  .b-p-bg-color .bar2 { width: 15px; margin:0 0 0 auto; }

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
																					
																					<?php foreach ($data->menu->primary_menu as $menus): ?>
																						<?php $arrayisi = json_decode(json_encode($menus), true); ?>
																						<?php if (array_key_exists("child", $arrayisi)): ?>
                                                  <li class="position-relative">

                                                      <a href="<?= $menus->link ?>"><?= $menus->label ?></a>
                                                      <i class="fa fa-chevron-down child-icon child-toggle"></i>
                                                      <ul class="ul-child child-menus">
																												<?php foreach ($menus->child as $menuc): ?>
																													<?php $arrayisi = json_decode(json_encode($menuc), true); ?>
																													<?php if (array_key_exists("child", $arrayisi)): ?>
                                                                <li>
                                                                    <a href="<?= $menuc->link ?>"><?= $menuc->label ?></a>
                                                                    <i class="fa fa-chevron-down child-icon child-toggle"></i>
                                                                    <ul class="ul-child child-menus">
																																			<?php foreach ($menuc->child as $menuci): ?>
                                                                          <li><a href="<?= $menuci->link ?>"><?= $menuci->label ?></a>  </li>
																																			<?php endforeach; ?>
                                                                    </ul>
                                                                </li>
																													<?php else: ?>
                                                                <li><a href="<?= $menuc->link ?>"><?= $menuc->label ?></a>  </li>
																													<?php endif; ?>
																												<?php endforeach; ?>
                                                      </ul>

                                                  </li>
																						<?php else: ?>
                                                  <li><a href="<?= $menus->link ?>"><?= $menus->label ?></a></li>
																						<?php endif; ?>
																					<?php endforeach; ?>

                                            <!-- <li><a href="<?= base_url() ?>booking-form">Booking Form</a></li> -->

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
                          right: 9%;
                          top: 20%;
                        }

                        .dropbtn img {
                          width: 25px;
                          height: 25px;
                        }

                        .dropbtn { color:#fff; }
                      }
                    </style>

                    <div id="glt-translate-trigger">
                        <div class="dropdown mx-4">
                            <div class="dropbtn">
                                <img class="dropbtn-flag" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1711464638-26-03-2024-cjAPkKJplLZFfbVXW3SwdG8xrO7uCt0g.webp" alt="TRANSLATE"/>
                                <div class="dropbtn-text" translate="no">EN</div>
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
                            </div>
                        </div>
                    </div>

                    <div class="d-none" id="google_translate_element2"></div>
                    <!-- ========== Dropdown ======== -->
									
									<?= $func->load("s-top") ?>

                    <a class="btn btn-book-atas d-none d-md-block" href="https://favotripbalitour.com/about-us"></i>About Us | Favotrip Bali</a>



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



        <!-- <style type="text/css">
          .menu-biru-andro {
            overflow-y: scroll;
            position: relative;
          }

          .menu-biru-andro::-webkit-scrollbar {
            display: none;
          }

          .menu-biru-andro ul {
            padding: 0;
            list-style: none;
            width: max-content;
            margin-bottom: 0px;
          }

          .menu-biru-andro ul li {
            display: inline-block;
            margin-bottom: 0px;
            padding: 10px 15px;
            color: white;
            font-size: 13px;
            font-family: var(--primtext);
          }

          .menu-biru-andro .home {
            padding: 10px 20px;
            background: var(--colors);
            color: #fff;
          }
        </style>

        <div class="header-container hilang-head display-android" style="background-color: transparent; margin-bottom: 20px; border-bottom: 1px solid #ccc;">
            <div class="header-row">
                <div class="menu-biru-andro">
                    <ul>
                        <li class="home"><a href="<?= base_url() ?>"><i class="fa-solid fa-house"></i></a></li>
											<?php foreach ($data->menu->primary_menu as $menui): ?>
                          <li><a href="<?= $menui->link ?>"><?= $menui->label ?></a></li>
											<?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div> -->
    </header>

    <div role="main" class="main">
