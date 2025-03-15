<div class="wrapper gray-wrapper">
    <div class="container inner">
        <h2 class="text-center mb-20">Other Videos</h2>
        <div class="slick-wrapper">
            <div class="slick" data-slick='{"slidesToShow": 3, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}},{"breakpoint":768,"settings":{"slidesToShow": 1}}]}'>
                <?php foreach ($sidebar as $key => $item): ?>
                    <?php $func->sidebar_type($item,'single_video') ?>
                <?php endforeach ?>
            </div>
            <!--/.slick -->
            <div class="space20"></div>
            <div class="slick-nav-container">
                <div class="slick-nav"></div>
            </div>
            <!--/.slick-nav-container -->
        </div>
        <!--/.slick-wrapper -->
    </div>
    <!-- /.container -->
</div>
