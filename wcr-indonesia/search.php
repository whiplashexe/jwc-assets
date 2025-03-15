<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="active">Result</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>
                    <?php if ($data->result == '' || $data->result == NULL): ?>
                        No Result!
                    <?php endif ?>                
                </h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">           
                <?php if($data->search_type == ROUTE_SEARCH_BLOG): ?>
                    <?= $func->loop('blog') ?>
                    <?php elseif($data->search_type == ROUTE_SEARCH_VIDEO): ?>
                        <?= $func->loop('video') ?>
                        <?php else: ?>
                            <?= $func->loop('product') ?>
                        <?php endif ?>
                    </div>
                    <div class="clear"></div>
                    <?= $func->load_pagination('float-left','page-item','page-link') ?>
                </div>
                <div class="col-lg-3">
                    <div class="container">
                        <aside class="sidebar mt-5">                
                            <?= $func->sidebar('main') ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>