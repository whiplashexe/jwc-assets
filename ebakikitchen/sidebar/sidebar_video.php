<div class="col-md-3 col-sm-4">
    <div class="blog-sidebar">
        <div class="search-bar">
            <form action="<?= base_url('search/').ROUTE_SEARCH_VIDEO ?>" method="get"><input type="text" name="q" class="form-control" placeholder="search for something">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <div class="widget-box">
                 <?php foreach ($sidebar as $key => $item): ?>
                    <?php $func->sidebar_type($item,'video') ?>
                <?php endforeach ?> 
            
        </div>
        <?php if ($this->uri->segment(1).'/' == ROUTE_VIDEO_VIEW) { ?>
            <div class="widget-box">
                <div class="widget-title">
                    <h3 class="text-uppercase">post tags</h3>
                </div>
                <div class="widget-body">
                    <div class="tags">
                        <?php foreach ($data->tags as $tag) { ?>
                            <a href="<?= $func->tag_link(ROUTE_VIDEO_TAG,$tag) ?>" class="btn btn-outline"><?= $tag ?></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
