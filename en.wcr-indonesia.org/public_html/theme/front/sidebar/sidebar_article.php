<aside class="col-md-3 sidebar">
    <div class="widget search">
        <form action="<?= base_url('search/').ROUTE_SEARCH_BLOG ?>" method="get" class="relative">
            <input type="search" class="searchbox mb-0" name="q" placeholder="Search">
            <button type="submit" class="search-button"><i class="ui-search"></i></button>
        </form>
    </div>

    <!-- Categories -->
    <!--    <div class="widget categories">-->
    <!--        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Categories</h3>-->
    <!--        <ul class="list-dividers">-->
    <!--            <li>-->
    <!--                <a href="#">Business</a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="#">Science</a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="#">Sport</a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="#">Politics</a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a href="#">Lifestyle</a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->

    <!-- Recent posts -->
    <div class="widget recent-posts">
        
			<?php foreach ($sidebar as $key => $item): ?>
				<?php $func->sidebar_type($item,'article') ?>
			<?php endforeach ?>      
    </div>

    <!-- Tags -->
    <?php if ($this->ci->uri->segment(1).'/' == ROUTE_BLOG_VIEW) : ?>
    <div class="widget tags light clearfix">
        <h3 class="widget-title heading uppercase relative bottom-line full-grey">Tags</h3>
        <?php foreach ($data->tags as $tag) { ?>
            <a href="<?= $func->tag_link(ROUTE_BLOG_TAG,$tag) ?>"
            ><?= $tag ?></a>
        <?php } ?>
    </div>
    <?php endif; ?>
</aside> <!-- end sidebar -->


