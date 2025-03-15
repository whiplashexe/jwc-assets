<?php 

$segment = $this->ci->uri->segment(1).'/';

$samakan = '';

if ($segment == 'search/') {

    $samakan = $data->search_type;

} 

if ($samakan == ROUTE_SEARCH_VIDEO || $segment == ROUTE_VIDEO_VIEW || $segment == ROUTE_VIDEO_TAG || $segment == ROUTE_VIDEO){

    $list = 'video';

    $src = ROUTE_SEARCH_VIDEO;

} elseif ($samakan == ROUTE_SEARCH_BLOG || $segment == ROUTE_BLOG_VIEW || $segment == ROUTE_BLOG_TAG || $segment == ROUTE_BLOG){

    $list = 'article';

    $src = ROUTE_SEARCH_BLOG;

} else{

    $list = 'product';

    $src = ROUTE_SEARCH_PRODUCT;

} ?>



<style>

    .search-bar-top {
        text-align: right;
        font-family: var(--primtext);
    }

    /* CSS untuk Search Bar */
    .search-box-top {
        position: relative;
        display: inline-block;
    }

    .search-txt-topi {
        width: 500px;
        padding: 10px 20px;
        border: 1px solid #ccc;
        outline: none;
        background: #f9f9f9f9;
        border-radius: 100px;
        font-size: 15px;
    }

    .search-btn-topi {
        position: absolute;
        right: 1%;
        top: 14%;
        background: var(--colors);
        color: white;
        border: none;
        cursor: pointer;
        padding: 5px 15px;
        border-radius: 100px;
    }

    .search-btn-top i {
        font-size: 13px;
    }

    /* Hover effect */
    .search-btn-top:hover {
        background: #f0f0f0;
    }

</style>

<div class="search-position">
    
    <form class="search-bar-top" action="<?= base_url('search/').$src ?>">
        <div class="search-box-top">
            <input class="search-txt-topi" placeholder="Hi, where are you going today?" name="q" type="text">
            <button type="submit" class="search-btn-topi"><i class="fas fa-search mr-2"></i> Search</button>
        </div>
    </form>

</div>