<style type="text/css">
    .blogsing-style h1 {
        color: #111;
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 700;
        letter-spacing: 0.5px;
        font-size: 35px;
        line-height: 45px;
        margin-bottom: 25px;
    }

    .pad8 {
        padding-left: 0px;
        align-self: center;
    }

    .blogsing-style .title {
        margin-bottom: 0px;
        font-family: 'DINNextRoundedLTW01-Light';
        color: #00001C;
        font-weight: 600;
        font-size: 15px;
    }

    .blogsing-style .date {
        margin-bottom: 0px;
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 400;
    }

    .pad8-kanan {
        text-align: right;
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
        font-family: 'DINNextRoundedLTW01-Light';
        color: #555;
        font-size: 15px;
        text-align: justify;
        font-weight: 400;
    }

    .content-blog img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
    }

    .side-blog h2 {
        font-weight: 700;
        font-size: 24px;
        letter-spacing: 0.5px;
        color: #212121;
        padding-bottom: 10px;
        position: relative;
        font-family:'DINNextRoundedLTW01-Light';
        border-bottom: 3px solid #694e3045;
    }
    .side-blog h2:after {
        background-color: var(--colors);
        width: 16%;
        content: "";
        height: 3px;
        position: absolute;
        bottom: -3px;
        left: 0;
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
        font-family:'DINNextRoundedLTW01-Light';
        line-height: 22px;
        margin-bottom: 10px;
    }

    .side-blog p {
        font-size: 13px;
        line-height: 23px;
        margin-bottom: 20px;
    }

    .pad7 {
        padding-right: 0px;
        padding-left: 5px;
    }

    .header-body {
        background-color: white !important;
    }

    h3,h4,h5,h6 { 
        font-family: DINNextRoundedLTW01-Light;
        text-transform: capitalize;
        line-height: 35px;
        margin-bottom: 20px;
    }
    .content-blog iframe {
        height: 500px;
    }

@media (max-width: 768px) {
    .blogsing-style h1 {
        color: #212121;
        font-family: 'DINNextRoundedLTW01-Light';
        font-weight: 700;
        letter-spacing: -1px;
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 20px;
    }

    .pad8-kanan {
        text-align: left;
        margin-bottom: 10px;
    }

    .image-cover, .content-blog img { height: 250px; }

    .content-blog iframe {
        height: 250px;
    }

    .pad7 {
        padding-right: 10px;
    }
}
</style>
    
<section class="py-5 blogsing-style">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8">
                <h1><?= $data->result->title ?></h1>

                <div class="row mb-3">
                    <div class="col-md-4 display-pc">
                        <div class="row">
                            <div class="col-md-4">
                                <img style="border-radius: 100px; border-radius: 100px; width: 60px; height: 60px; object-fit: cover;" class="img-fluid" src="<?= $data->web->site_logo ?>">
                            </div>

                            <div class="col-md-8 pad8">
                                <p class="title"><?= $data->web->site_name ?></p>
                                <p class="date"><?= date('d F Y', strtotime($data->result->created_at)) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pad8-kanan">
                        
                        
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
            
                    </div>

                </div>

                <?php if ($data->cat_data->id == '1214'): ?>
                    <img class="img-fluid image-cover" src="<?= $data->result->img_cover_url ?>">
                <?php endif ?>

                <div class="content-blog">
                    <?= $data->result->content ?>
                </div>

            </div><!-- col-md-8 -->

            <div class="col-md-4">
                
                <?= $func->sidebar('mainblog') ?>

            </div>
        </div> 

    </div>
</section>