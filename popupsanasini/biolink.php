<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?= $func->redirectToHTTPS() ?>  
	<?= $func->favicon() ?>
	<title><?= $func->title_bar() ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style type="text/css">
  .link-sec {
    position: relative;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      background: linear-gradient(to top, #000000, #0f9b0f);
  }

  .linktree span {
      display: block;
      font-family: 'Work Sans';
      color: white;
      font-weight: 400;
      font-size: 13px;
      letter-spacing: 0.5px;
      margin-top: 25px;
      margin-bottom: 30px;
  }

  .linktree img {
      height: 130px;
      width: 130px;
      border-radius: 100px;
      object-fit: cover;
  }

  .btn-linktree i {
    position: absolute;
      left: 3%;
      font-size: 33px;
      top: 18%;
      color: var(--colors);
  }

  a.btn.btn-linktree {
      margin-bottom: 15px;
      background: white;
      width: 680px;
      padding: 16px 20px;
      color: #333;
      font-family: 'Work Sans';
      letter-spacing: 0.1px;
      font-weight: 600;
      font-size: 14px;
      border-radius: 5px;
      transition: all ease 500ms;
      position: relative;
  }

  a.btn.btn-linktree:hover {
    transition: all ease 500ms;
    background-color: black;
    border: 2px solid #3d3b3c;
    color: white; 
  }


  .fixed-bottom {
      display: none;
  }

  @media (min-width: 768px) {
    .linktree span {
        padding: 0px 175px;
    }
  }

  @media (max-width: 768px) {
    a.btn.btn-linktree {
      width: 100%;
    }

    .link-sec { overflow: scroll; }
  }

  section.bg-cb { display: none; }
</style>
  </head>
<body>
<section class="py-5 link-sec">
  <div class="container text-center linktree">
    
    <img class="img-fluid" src="<?= $data->web->site_logo ?>">
    <span class="mb-1">Feel The Adrenaline In Every Adventures</span>
    <span class="my-1">The Best Quad Bike in Bali, Rafting in Bali, Tubing & Swing Packages</span>
    <span class="mt-3">Booking For Your Adventure Now</span>

    <a class="btn btn-linktree" href="<?= $func->dm_whatsapp() ?>"><i class="fa-brands fa-whatsapp-square"></i>Contact Us Via Whatsapp</a>

    <a class="btn btn-linktree" href="<?= $func->dm_telphone() ?>"><i class="fa-solid fa-square-phone"></i>Contact Us Via Telphone</a>

    <a class="btn btn-linktree" href="<?= base_url() ?>"><i class="fa-solid fa-globe"></i>Our Website</a>

    <a class="btn btn-linktree" href="<?= $data->social->instagram_url ?>"><i class="fa-brands fa-instagram-square"></i>Check Our Instagram</a>

    <a class="btn btn-linktree" href="<?= $data->social->facebook_url ?>"><i class="fa-brands fa-facebook-square"></i>Check Our Facebook</a>

    <a class="btn btn-linktree" href="<?= $data->social->youtube_url ?>"><i class="fa-brands fa-youtube"></i>Check Our Youtube Channel</a>
  </div>
</section>
  </body>
</html>