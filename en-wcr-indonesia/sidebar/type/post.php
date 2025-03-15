<?php 
$route = '';
if ($data->type == 'blog') {
    $route = ROUTE_BLOG_VIEW;
}else{
    $route = ROUTE_PRODUCT_VIEW;
}

?>

<style>
    .side-text {
        text-transform: capitalize;
        font-size: 18px !important;
        font-weight: 600;
        color: #333;
    }

@media (min-width: 768px) {
    .side-sect { padding-top: 25px !important; }

    .side-sect .img-pvilla {
        height: 190px;
        object-fit: cover;
        margin-bottom: 15px;
        width: 100%;
    }

    .side-sect .wrap-text:after {
        padding-bottom: 12.5%;
    }

    .side-sect .wrap-text h3 {
        font-family: forum;
        text-transform: capitalize;
        font-weight: 600;
        letter-spacing: 0px;
        font-size: 21px;
        margin-top: 9px;
        margin-bottom: 9px;
    }

    .side-sect .wrap-text p {
        margin-bottom: 15px;
        font-family: poppins;
        font-weight: 300;
        font-size: 12px;
        line-height: 21px;
        padding: 0px 20px;
    }
}

</style>

<?php if ($opsi == 'mainblog'): ?>
    <div class="side-blog">
        <h2><?= $data->title ?></h2>

    <?php foreach ($data->data as $items): ?>
        <div class="border-bawah" style="border-bottom: 1px solid #ccc; margin-bottom: 15px;">
            <a href="<?= $func->link($route, $items->slug) ?>" style="text-decoration: none;">
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" src="<?= $items->img_cover_url ?>">
                </div>

                <div class="col-7 pad7 d-flex align-items-center">
                    <div class="box">
                        <h3><?= substr($items->title, 0, 40) ?>...</h3>
                        <p><i class="fa-regular fa-calendar mr-2"></i><?= date('d F Y', strtotime($items->created_at)) ?></p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    <?php endforeach ?>

    </div>
<?php endif ?>

<?php if ($opsi == 'mainmain'): ?>

<section class="service-section side-sect">

    <div class="row">
        <?php foreach ($data->data as $items): ?>
            <div class="col-md-12">
                <div class="wrap-pvilla mb-3">
                    <img class="img-fluid img-pvilla" src="<?= $items->img_cover_url ?>">
                        
                    <span class="recommended">Recommended!</span>
                    <div class="wrap-text">
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 80) ?></p>

                        <a class="btn btn-pvilla" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</section>

<?php endif ?>

<?php if ($opsi == 'mostly'): ?>

<style>
    .abso-wrapp {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #0000008f;
        z-index: 9999;
        text-align: center;
        transition: all ease 500ms;
    }

    .abso-wrapp .closebtn {
        position: absolute;
        top: 30px;
        right: 010px;
        font-size: 60px;
        font-weight: 600;
        color: red;
        transition: all ease 500ms;
        cursor: pointer;
    }

@media (min-width: 768px) {
    .abso-wrapp img{
        height: 550px;
        margin: 50px 0px;
    }
}

@media (min-width: 1340px) {
    .abso-wrapp img{
        height: 650px;
        margin: 50px 0px;
    }
}

@media (max-width: 768px) {
    .abso-wrapp img {
        height: 435px;
        margin-top: 65px;
        width: 350px;
        object-fit: cover;
    }

    .img-baw { margin-top: 15px !important; }
}

.chatpop-notif {
    display: none;
}
</style>

    
    <div class="abso-wrapp wow fadeIn">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?php $i=1; foreach ($data->data as $items): ?>
            <a href="https://senseseminyak.com/category/special-offer">
                <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="img-fluid ">
            </a>
        <?php $i++; endforeach ?>
    </div>



<?php endif ?>
