<?php
/*
* JWC Theme Config
* For Theme Config multi channel read
* 11 May 2023
*/
// Theme Info
$data['theme'] = array(
	'name' => 'Default Theme',
	'version' => '0.9.1',
	'creator' => 'Yulianakomang',
	'description' => 'The First theme',
	'type' => array(
		'boxed' => 'Boxed', 
		'tourtravel' => 'Tour & Travel', 
	),
	'header_type' => array(
		'type1' => 'Transparant',
		'type2' => 'Putih',
	),
	'footer_type' => array(
		'type1' => 'Transparant',
		'type2' => 'Putih',
	),
);

/*
:: Color Info
'class' => 'Value'
class = --class tanpa --
*/
$data['color'] = array(
	'bg' => '#000',
	'text' => '#fff',
	'up_cover' => '#2d2d2d',
	'header_bg' => '#fff',
	'header_color' => '#000',
	'footer_bg' => '#fff',
	'footer_color' => '#000',
);

/*
:: Menu Default
'no urut' => 'Text'

Link automatic using # -> <a href="#">
*/
$data['use_default_menu'] = true;
$data['default_menu'] = array(
	'1' => 'About Us',
	'2' => 'Full Day Tour',
	'3' => 'Half Day Tour',
	'4' => 'Activities',
);

/*
:: Sidebar Support
'Sidebar Name' => 'Sidebar File'

use_default_widget = true -> untuk install otomatis widget default
use_default_widget = false -> untuk tidak install otomatis widget default / Setting manual
*/
$data['sidebar'] = array(
	'Main_Sidebar' => 'sidebar_main',
	'Sidebar Main Blog' => 'sidebar_mainblog',
	'Sidebar_News_Single' => 'sidebar_news_single',
	'Sidebar_Service' => 'sidebar_service',
	'Sidebar_Popular' => 'sidebar_popular',
);

/*
:: Default Widget
Keterangan:

use_default_widget = true -> untuk install otomatis widget default
use_default_widget = false -> untuk tidak install otomatis widget default / Setting manual

Setting Default Widget
$data['default_widget'] = array(
	'home' => array(
		'1' => 'Title|Type Widget|Data Widget|Limit|Criteria',
		'2' => 'Title|Type Widget|Data Widget|Limit|Criteria', 
	),
	'article' => array(
		'1' => 'Title|Type Widget|Data Widget|Limit|Criteria',
		'2' => 'Title|Type Widget|Data Widget|Limit|Criteria', 
	),
);

*/
$data['use_default_widget'] = true;
$data['default_widget'] = array(
	'home' => array(
		'1' => 'Title|Type Widget|Data Widget|Limit|Criteria',
		'2' => 'Title|Type Widget|Data Widget|Limit|Criteria', 
	),
	'article' => array(
		'1' => 'Title|Type Widget|Data Widget|Limit|Criteria',
		'2' => 'Title|Type Widget|Data Widget|Limit|Criteria', 
	),
);

/*
:: Default Component
Keterangan:

use_default_component = true -> untuk install otomatis component default
use_default_component = false -> untuk tidak install otomatis component default / Setting manual

Setting Default Component
$data['default_component'] = array(
	'1' => 'Title|subtitle|Component|Limit|Criteria|Display',
	'2' => 'Title|subtitle|Component|Limit|Criteria|Display',
);

*/
$data['use_default_component'] = true;
$data['default_component'] = array(
	'1' => 'Title|subtitle|Component|Limit|Criteria|Display',
	'2' => 'Title|subtitle|Component|Limit|Criteria|Display',
);