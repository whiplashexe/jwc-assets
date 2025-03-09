<?php
/*
* JWC Config Option
* For Website Setting & Option
* 11 May 2023
*/

defined('COMPANY_ID') OR define('COMPANY_ID', '1237'); // COMPANY ID
defined('WEB_STATUS') OR define('WEB_STATUS', 'development'); // WEB STATUS
defined('WEB_AUTO_UPDATE') OR define('WEB_AUTO_UPDATE', false); // WEB AUTO UPDATE
// FB_SDK has been Encode to BASE64
defined('FB_SDK_BASE64') OR define('FB_SDK_BASE64', 'PGRpdiBpZD0iZmItcm9vdCI+PC9kaXY+CjxzY3JpcHQ+KGZ1bmN0aW9uKGQsIHMsIGlkKSB7CiAgdmFyIGpzLCBmanMgPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKHMpWzBdOwogIGlmIChkLmdldEVsZW1lbnRCeUlkKGlkKSkgcmV0dXJuOwogIGpzID0gZC5jcmVhdGVFbGVtZW50KHMpOyBqcy5pZCA9IGlkOwogIGpzLnNyYyA9ICdodHRwczovL2Nvbm5lY3QuZmFjZWJvb2submV0L2lkX0lEL3Nkay5qcyN4ZmJtbD0xJnZlcnNpb249djIuMTImYXBwSWQ9NTk3MzQ3MzkzOTUwNjA0JmF1dG9Mb2dBcHBFdmVudHM9MSc7CiAgZmpzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGpzLCBmanMpOwp9KGRvY3VtZW50LCAnc2NyaXB0JywgJ2ZhY2Vib29rLWpzc2RrJykpOzwvc2NyaXB0Pg=='); 

// Bio Link
defined('BIOLINK_ROUTE')  OR define('BIOLINK_ROUTE', 'biolink'); // Route for the Bio ext: booking-now
defined('BIOLINK_FILE')  OR define('BIOLINK_FILE', 'biolink'); // create file at ./theme/front/[biolink.php]


// Apply Route
defined('ROUTE_PAGE')  OR define('ROUTE_PAGE', '');
defined('ROUTE_PRODUCT')  OR define('ROUTE_PRODUCT', 'category/');
defined('ROUTE_PRODUCT_TAG')  OR define('ROUTE_PRODUCT_TAG', 'tag/');
defined('ROUTE_PRODUCT_VIEW')  OR define('ROUTE_PRODUCT_VIEW', 'view/');
defined('ROUTE_BLOG')  OR define('ROUTE_BLOG', 'article-category/');
defined('ROUTE_BLOG_TAG')  OR define('ROUTE_BLOG_TAG', 'article-tag/');
defined('ROUTE_BLOG_VIEW')  OR define('ROUTE_BLOG_VIEW', 'article/');
defined('ROUTE_VIDEO')  OR define('ROUTE_VIDEO', 'video-category/');
defined('ROUTE_VIDEO_TAG')  OR define('ROUTE_VIDEO_TAG', 'video-tag/');
defined('ROUTE_VIDEO_VIEW')  OR define('ROUTE_VIDEO_VIEW', 'watch/');
defined('ROUTE_GALLERY')  OR define('ROUTE_GALLERY', 'gallery/');
defined('ROUTE_GALLERY_TAG')  OR define('ROUTE_GALLERY_TAG', 'gallery-tag/');
defined('ROUTE_GALLERY_VIEW')  OR define('ROUTE_GALLERY_VIEW', 'gallery-detail/');
defined('ROUTE_EVENT')  OR define('ROUTE_EVENT', 'events');
defined('ROUTE_EVENT_VIEW')  OR define('ROUTE_EVENT_VIEW', 'event/');

defined('ROUTE_SEARCH_BLOG')  OR define('ROUTE_SEARCH_BLOG', 'blog');
defined('ROUTE_SEARCH_PRODUCT')  OR define('ROUTE_SEARCH_PRODUCT', 'product');
defined('ROUTE_SEARCH_VIDEO')  OR define('ROUTE_SEARCH_VIDEO', 'video');
defined('ROUTE_SEARCH_GALLERY')  OR define('ROUTE_SEARCH_GALLERY', 'gallery');
defined('ROUTE_SEARCH_EVENT')  OR define('ROUTE_SEARCH_EVENT', 'event');

// Google Recaptcha
defined('GR_SITE_KEY')  OR define('GR_SITE_KEY', '');
defined('GR_SECRET_KEY')  OR define('GR_SECRET_KEY', '');

defined('URL_API') OR define('URL_API', 'https://cpanel.gotrasoft.com/api/'); // Web API