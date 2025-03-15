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

    .search-pos {
        position: absolute;
        right: 20%;
    }

    .search-bar-top {
        text-align: right;
        font-family: var(--primtext);
    }

    /* CSS untuk Search Bar */
    .search-box-top {
        position: relative;
        display: inline-block;
    }

    .search-txt-top {
        width: 300px;
        padding: 3px 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 13px;
        outline: none;
    }

    html:not(.sticky-header-active) .search-txt-top { width: 120px; }

    .search-btn-top {
        position: absolute;
        right: 4px;
        top: 0;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 4px;
    }

    .search-btn-top i {
        font-size: 13px;
    }

    /* Hover effect */
    .search-btn-top:hover {
        background: #f0f0f0;
    }

    @media (max-width: 768px) {
        .search-pos { right: 30%; display:none; }
    }

</style>

<div class="search-pos">
    
    <form class="search-bar-top d-block d-md-none" action="<?= base_url('search/').$src ?>">
        <div class="search-box-top">
            <input class="search-txt-top" placeholder="Cari..." name="q" type="text">
            <button type="submit" class="search-btn-top"><i class="fas fa-search"></i></button>
        </div>
    </form>

</div>