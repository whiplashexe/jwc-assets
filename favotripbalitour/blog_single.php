<style type="text/css">

    * { font-family:var(--subtext); }

    .btn-book-atas {border: 1px solid #fff;}

    .blogsing-style h1 {
        color: #111;
        font-weight: 700;
        letter-spacing: 0.5px;
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 25px;
        font-family:var(--subtext);
    }

    .pad8 {
        padding-left: 0px;
        align-self: center;
    }

    .blogsing-style .title {
        margin-bottom: 0px;
        color: #00001C;
        font-weight: 600;
        font-size: 15px;
    }

    .blogsing-style .date {
        margin-bottom: 0px;
        font-weight: 400;
    }

    .pad8-kanan {
        text-align: right;
        display: flex;
        justify-content: flex-end;
        align-self: center;
    }

    .image-cover {
        height: 500px;
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 30px;
    }

    .content-blog p {
        color: #666;
        font-size: 15px;
        line-height: 30px;
        text-align: left;
        font-weight: 400;
        font-family:var(--subtext);
    }

    .content-blog h3, .content-blog h2, .content-blog h4 {
        letter-spacing: 0px;
        margin: 25px 0px;
        font-weight: 600;
        font-size: 20px;
    }

    .content-blog p a { color: black; font-weight:600; }

    .content-blog li {
        color: #555;
        font-size: 15px;
        line-height: 30px;
        margin-bottom: 10px;
        font-family:var(--subtext);
    }

    .content-blog img {
        height: auto;
        object-fit: cover;
        border-radius: 5px;
        margin: 15px 0px;
    }

    .side-blog h2 {
        font-weight: 700;
        font-size: 24px;
        letter-spacing: 0.5px;
        color: #212121;
        padding-bottom: 10px;
        border-bottom: 3px solid var(--colors);
    }

    .side-blog img {
        height: 105px;
        object-fit: cover;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
    }

    .side-blog h3 {
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0.5px;
        line-height: 22px;
        margin-bottom: 10px;
    }

    .side-blog p {
        font-size: 13px;
        line-height: 23px;
        margin-bottom: 20px;
        font-family:var(--subtext);
    }

    .pad7 {
        padding-right: 0px;
        padding-left: 5px;
    }

    #header.header-no-min-height .header-body {
        min-height: 0!important;
        background: var(--colors) !important;
        margin-top: 0 !important;
    }

@media (max-width: 768px) {
    .blogsing-style h1 {
        color: #212121;
        font-weight: 700;
        letter-spacing: -1px;
        font-size: 25px;
        line-height: 40px;
        margin-bottom: 25px;
    }

    .pad8-kanan {
        justify-content: flex-start;
        margin-bottom: 10px;
    }

    .image-cover { height: 250px; }

    .pad7 {
        padding-right: 10px;
    }
}

.wrap-sidebar h3 {
    font-family: var(--subtext);
    color: var(--colors);
    text-transform: capitalize;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 22px !important;
    margin-bottom: 30px !important;
    margin-top: 30px;
}

.wrap-sidebar h3:first-child { margin-top:0px; }


.wrap-sidebar ul {
    padding-left: 0;
    list-style: none;
}
.wrap-sidebar {
    padding: 30px;
    box-shadow: 10px 10px 30px #00000029;
    border-radius: 10px;
    background: white;
    font-family: var(--subtext);
}

.wrap-sidebar li {
    letter-spacing: 0.5px;
    font-weight: 500;
    margin-bottom: 15px;
    padding-left: 40px;
    font-size: 14px;
    position: relative;
}

.wrap-sidebar li a { color:#444 !important; }

.wrap-sidebar li a:hover { color:var(--colors) !important; }

.wrap-sidebar ul li i {
    position: absolute;
    left: 10px;
    font-size: 15px;
    top: 4px;
    color: var(--colors);
}
</style>
    
<section class="pad6rem blogsing-style wow fadeIn" data-wow-duration="2s">
    <div class="container-global">
        
        <div class="row">
            <div class="col-md-8">
                <h1><?= $data->result->title ?></h1>

                <div class="row mb-3">
                    <div class="col-md-4 display-pc">
                        <div class="row">
                            <div class="col-md-4">
                                <img style="border-radius: 100px; border-radius: 100px; width: 60px; height: 60px; object-fit: cover;" alt="<?= $data->result->title ?> logo" class="img-fluid" src="<?= $data->web->site_favicon ?>">
                            </div>

                            <div class="col-md-8 pad8">
                                <p class="title"><?= $data->web->site_name ?></p>
                                <p class="date"><?= date('d F Y', strtotime($data->result->created_at)) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pad8-kanan">
                        
                        
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_email"></a>
                    <a class="a2a_button_facebook_messenger"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
            
            
                    </div>

                </div>

                <img class="img-fluid image-cover" alt="<?= $data->result->title ?>" src="<?= $data->result->img_cover_url ?>">

                <div class="content-blog">
                    <?= $data->result->content ?>
                </div>

            </div><!-- col-md-8 -->

            <div class="col-md-4">
                
                <?= $func->sidebar('mainblog') ?>

                <!--<div class="wrap-sidebar mt-4">
                    <?= $func->sidebar('mainblog') ?>
                </div> -->

            </div>
        </div> 

    </div>
</section>

