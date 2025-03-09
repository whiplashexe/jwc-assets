<?php
header('Content-type: application/xml; charset="ISO-8859-1"',true); 
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
  <loc><?= base_url() ?></loc>
  <lastmod><?= date('c') ?></lastmod>
  <priority>1.00</priority>
</url>
<?php foreach($p_category as $item): ?>
<url>
  <loc><?= base_url(ROUTE_PRODUCT.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($products as $item): ?>
<url>
  <loc><?= base_url(ROUTE_PRODUCT_VIEW.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($b_category as $item): ?>
<url>
  <loc><?= base_url(ROUTE_BLOG.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($blogs as $item): ?>
<url>
  <loc><?= base_url(ROUTE_BLOG_VIEW.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($v_category as $item): ?>
<url>
  <loc><?= base_url(ROUTE_VIDEO.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($videos as $item): ?>
<url>
  <loc><?= base_url(ROUTE_VIDEO_VIEW.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>
<?php foreach($gallery as $item): ?>
<url>
  <loc><?= base_url(ROUTE_GALLERY.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.80</priority>
</url>
<?php endforeach ?>

<?php foreach($pages as $item): ?>
<url>
  <loc><?= base_url(ROUTE_PAGE.$item->slug) ?></loc>
  <lastmod><?= date('c',strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
  <priority>0.60</priority>
</url>
<?php endforeach ?>

<url>
  <loc><?= base_url('contact') ?></loc>
  <lastmod><?= date('c') ?></lastmod>
  <priority>0.60</priority>
</url>

</urlset>
