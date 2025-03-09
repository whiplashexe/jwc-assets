<?php
$date_start = new DateTime($item->date_start);
$mount = $date_start->format('m');
$mount_year = $date_start->format('M - Y')
?>
<?php if($opsi == 'event'): ?>
    <div class="col-md-6 pd0 isotope-item">
        <section class="section section-child evn border-0 my-0">
            <div class="container">
                <h2 class="text-center text-uppercase"><strong><?= $data->title ?></strong></h2>
                <div class="row">
                    <?php $i=1; foreach ($data->data as $key => $item): ?>
                    <div class="col">
                        <a href="<?= $func->link(ROUTE_EVENT_VIEW.$item->slug) ?>">
                            <span class="thumb-info thumb-info-lighten">
                                <span class="thumb-info-wrapper">
                                    <img src="<?= $item->img_cover ?>" class="img-fluid" alt="<?= $item->title ?>">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner"><?= $item->title ?></span>
                                        <span class="thumb-info-type"><?= $item->date_start ?> | <?= $item->start_at ?></span>
                                    </span>                                 
                                </span>
                            </span>
                        </a>
                    </div>
                    <?php if ($i == 1){break;} ?>
                    <?php $i++; endforeach ?>                       
                </div>
                <ul class="simple-post-list">
                    <?php $i=1; foreach ($data->data as $key => $item): ?>
                    <?php if ($i > 1): ?>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail d-block">
                                    <a href="<?= $func->link(ROUTE_EVENT_VIEW.$item->slug) ?>">
                                        <img style="max-width: 80px" src="<?= $item->img_cover ?>" alt="<?= $item->title ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="<?= $func->link(ROUTE_EVENT_VIEW.$item->slug) ?>">
                                    <div>
                                        <h4><?= $item->title ?></h4>
                                        <?= $func->trailer($item,80) ?>
                                    </div>
                                </a>
                                <div class="post-meta">
                                    <span><i class="fas fa-user"></i> By <?= $item->executor ?>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fas fa-calendar-alt"></i>Date <?= $item->date_start ?></span>
                                    <span><i class="fas fa-clock "></i>Time <?= $item->start_at ?></span>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fas fa-map"></i> Location <?= $item->location ?>

                                </div>
                            </div>
                        </li>
                    <?php endif; $i++; endforeach ?>   
                </ul>
            </div>
        </section>
    </div>
    <?php endif ?>