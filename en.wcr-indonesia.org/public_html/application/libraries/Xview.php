<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xview
{
	protected $ci;
	protected $folder;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->folder = base_url()."assets/front/";
	}

	function read($url){
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);
        return $result;
    }
    // Post
	function ajax_http_post($url='',$postvars='')
	{
		// Send POST query via cURL
		$postdata = http_build_query($postvars);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($curl);
		// Closing
        curl_close($curl);
		return $result;
	}

	// Load CSS
	public function css( $file )
	{
		return "<link rel='stylesheet' type='text/css' href='".$this->folder."css/".$file."'>";
	}
	public function style( $file )
	{
		return "<link rel='stylesheet' type='text/css' href='".$this->folder.$file."'>";
	}
	public function css_external( $file )
	{
		return "<link rel='stylesheet' type='text/css' href='".$file."'>";
	}

	// Load JS
	public function js( $file )
	{
		return "<script type='text/javascript' src='".$this->folder."js/".$file."'></script>";
	}
	public function script( $file )
	{
		return "<script type='text/javascript' src='".$this->folder.$file."'></script>";
	}
	public function js_external( $file )
	{
		return "<script type='text/javascript' src='".$file."'></script>";
	}

	// Assets
	public function assets($file='')
	{
		return $this->folder.$file;
	}

	// Title Bar

	public function title_bar()
	{
		$data = $GLOBALS['API_RESULT'];
		if (isset($data->current_page)){
		return $data->current_page." - ".$data->web->site_name;
		}else{
		return $data->web->site_name." - ".$data->web->site_about; }
	}
  	
  	public function tanggal_indo($tanggal, $cetak_hari='false'){
		$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);

		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}

	public function tanggal_indo_blog($tanggal, $cetak_hari='false'){
		$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);

		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0] . ', ' . $split[3];

		return $tgl_indo;
	}


	public function get_addon_content($product_id='')
	{
		$company_id = COMPANY_ID;
		$addon_contents = $this->ci->db->query('SELECT * FROM addon_contents WHERE company_id="'.$company_id.'" AND product_id="'.@$product_id.'"')->result();
		$result = json_decode(json_encode($addon_contents));
        return $result;
	}
  
  	public function get_product_images($product_id='')
	{
		$company_id = COMPANY_ID;
		$productImages = $this->ci->db->query('SELECT * FROM images WHERE company_id="'.$company_id.'" AND product_id="'.@$product_id.'"')->result();
		$result = json_decode(json_encode($productImages));
        return $result;
	}
	

	// Link
	public function link($to,$slug="")
	{
		$to.='/';
		$link = str_replace('//', '/', $to.$slug);
		return base_url($link);
	}

	public	function redirectToHTTPS() {
	  if($_SERVER['HTTPS']!="on")
	  {
	     $redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	     header("Location:$redirect");
	  }
}

	// Tag Link
	public function tag_link($to,$data)
	{
		$to.='/';
		$base = $to.str_replace(' ','-',ltrim($data,' '));
		$link = str_replace('//', '/', $base);
		return base_url($link);
	}

	// Load Pagination
	public function load_pagination($ul_class='',$li_class='',$a_class='')
	{
		$data = $GLOBALS['API_RESULT'];
		$html = "<ul class='pagination ".$ul_class."'>";
		if ($data->pages >= 1 && $data->page_position <= $data->pages) {
			for ($x=1; $x<=$data->pages; $x++) {
				if ($x == $data->page_position) {
					$html .= "<li class='active ".$li_class."'><a href='#' class='".$a_class."'>".$x."</a></li>";
				} else {
					$html .= "<li class='".$li_class."'><a class='".$a_class."' href='?page=".$x."'>".$x."</a></li>";
				}
			}
		}
		$html .= "</ul>";
		return $html;
	}

	// Meta Tag
	public function meta_tag()
	{
		$data = $GLOBALS['API_RESULT'];
		$title = $this->title_bar();
		$html = "";
		// $html = "<meta charset='UTF-8'>";
		// $html .= "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
		/*
		View Port
		*/
		// $html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";

		// $html .= "<title>".$title."</title>";
		/*
		Favicon
		*/
		$html .= $this->favicon();
		$html .= "<meta name='robots' content='index, follow'/>";
		/*
		Description
		*/
		if ($data->site_position == 'view_product' || $data->site_position == 'view_blog' || $data->site_position == 'view_video' || $data->site_position == 'view_gallery' || $data->site_position == 'page') {
			# code...
			$html .= "<meta name='description' content='".$this->trailer($data->result,150)."'/>";
			$html .= "<meta property='og:description' content='".$this->trailer($data->result,150)."' />";
		}else{
			$html .= "<meta name='description' content='".$data->web->site_desc."'/>";
			$html .= "<meta property='og:description' content='".$data->web->site_desc."' />";
		}
		$html .= "<meta name='author' content='".$data->web->site_name."'/>";
		$html .= "<link rel='canonical' href='".base_url(uri_string())."'/>";
		/*
		Other Meta
		*/
		$html .= "<meta content='index,follow' name='robots'/>";
		$html .= "<meta content='2 days' name='revisit-after'/>";
		$html .= "<meta content='2 days' name='revisit'/>";
		$html .= "<meta content='never' name='expires'/>";
		$html .= "<meta content='always' name='revisit'/>";
		$html .= "<meta content='global' name='distribution'/>";
		$html .= "<meta content='gotrasoft' name='generator'/>";
		$html .= "<meta content='general' name='rating'/>";
		$html .= "<meta content='true' name='MSSmartTagsPreventParsing'/>";
		$html .= "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>";
		$html .= "<meta content='index, follow' name='googlebot'/>";
		$html .= "<meta content='follow, all' name='Googlebot-Image'/>";
		$html .= "<meta content='follow, all' name='msnbot'/>";
		$html .= "<meta content='follow, all' name='Slurp'/>";
		$html .= "<meta content='follow, all' name='ZyBorg'/>";
		$html .= "<meta content='follow, all' name='Scooter'/>";
		$html .= "<meta content='all' name='spiders'/>";
		$html .= "<meta content='all' name='WEBCRAWLERS'/>";
		$html .= "<meta content='aeiwi, alexa, alltheWeb, altavista, aol netfind, anzwers, canada, directhit, euroseek, excite, overture, go, google, hotbot, infomak, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, Websmostlinked, webtop, what-u-seek, aol, yahoo, webcrawler, infoseek, excite, magellan, looksmart, bing, cnet, googlebot' name='search engines'/>";

		/*
		Og: Open Graph Tags By Facebook
		*/
		$html .= "<meta property='og:url' content='".base_url(uri_string())."' />";
		$html .= "<meta property='og:type' content='website' />";
		$html .= "<meta property='og:title' content='".$title."' />";
		$html .= "<meta property='og:site_name' content='".$data->web->site_name."' />";
		if ($data->site_position == 'view_product' || $data->site_position == 'view_blog') {
			$html .= "<meta property='og:image' content='".$data->result->img_thumb_url."' />";
		}else if ($data->site_position == 'view_gallery') {
			$html .= "<meta property='og:image' content='".$data->result->url_img_thumb."' />";
		}else{
			$html .= "<meta property='og:image' content='".$data->web->site_logo."' />";
		}

		$html .= "<meta property='fb:app_id' content='597347393950604' />";
      	if(@$data->web->fb_moderator != ''){
			foreach ($data->web->fb_moderator as $item) {
				$html .= "<meta property='fb:admins' content='".$item."' />";
			}
        }


  		return $html;
	}

	// Favicon
	public function favicon($extention='',$file='',$color='')
	{
		$html = '';
		if ($extention == '' && $file == '' && $color == '') {
			$data = $GLOBALS['API_RESULT'];
			$html = "<link rel='icon' type='image/jpg' href='".$data->web->site_favicon."'>";
			$html .= "<link rel='icon' type='image/jepg' href='".$data->web->site_favicon."'>";
			$html .= "<link rel='icon' type='image/png' href='".$data->web->site_favicon."'>";
          	$html .= "<link rel='icon' type='image/webp' href='".$data->web->site_favicon."'>";
		}else{
			$html = "<link rel='icon' type='image/".$extention."' href='".$file."'>";
			$html .= "<meta name='msapplication-TileColor' content='".$color."'>";
			$html .= "<meta name='theme-color' content='".$color."'>";
			
		}

		return $html;
	}
	// Favicon Color
	public function favicon_color($color=''){
		return "<meta name='theme-color' content='".$color."'>";
	}

	public function load($value='')
	{
		$data = $GLOBALS['API_RESULT'];
		$func = $this;
		include(dirname(__FILE__)."/../../theme/front/".$value.".php");
	}

	public function get_slider($company_id='')
    {
        // /* Get all SiteOption */
      $collectSiteOptions = $this->ci->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
      $data = array();
      foreach ($collectSiteOptions as $item) {
          $data[$item->name] = $item->value;
      }
        
    $result = array();
    $no = 1;
    for ($i=0; $i < 10; $i++) { 
        $a = $i+1;
        if (@$data['slider_img_'.$a] != '' || @$data['slider_img_'.$a] != NULL) {
            $result[$no] = (object)array(
            'img'=>@$data['slider_img_'.$a],
            'title'=>@$data['slider_title_'.$a],
            'text'=>@$data['slider_text_'.$a],
            'text_url'=>@$data['slider_text_url_'.$a],
            'url'=>@$data['slider_url_'.$a],
            );
            $no++;
        }
    }
    return $result;
        // $result = (object)array($slider1,$slider2,$slider3,$slider4,$slider5);
    }

	public function components($collection_id = '')
	{
		$data = $GLOBALS['API_RESULT'];

		$company_id = COMPANY_ID;
       $collection_page_id = @$collection_id;
        $result = array();
        $setting = array();

        if ($collection_page_id == NULL || $collection_page_id == '') {
            $get_is_home_collection = @$this->ci->db->query("SELECT `id` FROM `collections` WHERE `is_home`= 1 AND `company_id` = '".$company_id."' LIMIT 1")->result();
            $id_collection = $get_is_home_collection[0]->id;

            // Get Setting Component
            $setting = @$this->ci->db->query("SELECT * FROM `component` WHERE `collection_id`= ".$id_collection." AND `company_id` = '".$company_id."' ORDER BY `sort` ASC")->result();

        }else{
            // Get Setting Component
            $setting = @$this->ci->db->query("SELECT * FROM `component` WHERE `collection_id`= ".$collection_page_id." AND `company_id` = '".$company_id."' ORDER BY `sort` ASC")->result();
        }
        

        

        $nu = 0;
        foreach ($setting as $item) {
            // Slider
            if ($item->component == 'slider') {
                // Slider Collecting
                $result[$nu] = array(
                    'setting' => $item,
                    'file' => $item->component,
                    'data' => $this->get_slider($company_id),
                );

            }else
            // Profile
            if ($item->component == 'profile') {
                $result[$nu] = array(
                    'setting' => $item,
                    'file' => $item->component,
                    'data' => '',
                );
            }else
            // Product
            if ($item->component == 'product') {
                if($item->criteria == '' || empty($item->criteria)){
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM products WHERE company_id="'.$company_id.'" AND draft="0" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }else{
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM products WHERE tags LIKE "%'.$item->criteria.'%" AND company_id="'.$company_id.'" AND draft="0" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }
                
            }else
            // Blog
            if ($item->component == 'blog') {
                if($item->criteria == '' || empty($item->criteria)){
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM blog_post WHERE company_id="'.$company_id.'" AND draft="0" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }else{
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM blog_post WHERE tags LIKE "%'.$item->criteria.'%" AND company_id="'.$company_id.'" AND draft="0" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }
            }else
            // Video
            if ($item->component == 'video') {
                if($item->criteria == '' || empty($item->criteria)){
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM video_post WHERE company_id="'.$company_id.'" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }else{
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM video_post WHERE video_tags LIKE "%'.$item->criteria.'%" AND company_id="'.$company_id.'" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }
            }else
            // Gallery
            if ($item->component == 'gallery') {
                if($item->criteria == '' || empty($item->criteria)){
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM galleries WHERE company_id="'.$company_id.'" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }else{
                    $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM galleries WHERE tags LIKE "%'.$item->criteria.'%" AND company_id="'.$company_id.'" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
                }
            }else
            // Review
            if ($item->component == 'review') {
                $result[$nu] = array(
                        'setting' => $item,
                        'file' => $item->component,
                        'data' => @$this->ci->db->query('SELECT * FROM reviews WHERE company_id="'.$company_id.'" ORDER BY id DESC LIMIT '.$item->number_post)->result(),
                    );
            }else
            // Contact
            if ($item->component == 'contact') {
                $result[$nu] = array(
                    'setting' => $item,
                    'file' => $item->component,
                    'data' => '',
                );
            }else
            if ($item->component == 'html') {
                $result[$nu] = array(
                    'setting' => $item,
                    'file' => $item->component,
                    'data' => $item->html,
                );
            }else{
                // Custom
                $result[$nu] = array(
                    'setting' => $item,
                    'file' => $item->component,
                    'data' => '',
                    );
                }
            $nu++;
        }

		$func = $this;
		$result = json_decode(json_encode($result));
		foreach ($result as $item) {
			@include(dirname(__FILE__)."/../../theme/front/home/home_".$item->file.".php");
		}
	}

	public function sidebar_options($type = '', $item='', $company_id='',$related='')
    {
        $data = 'SELECT * FROM products WHERE company_id="'.$company_id.'" AND draft="0" ';
        if ($type == 'blog') {
            $data = 'SELECT * FROM blog_post WHERE company_id="'.$company_id.'" AND draft="0" ';
        }
        if ($type == 'video') {
            $data = 'SELECT * FROM video_post WHERE company_id="'.$company_id.'" AND draft="0" ';
        }
        if ($type == 'event') {
            $data = 'SELECT * FROM events WHERE company_id="'.$company_id.'" ';
        }
        if ($type == 'gallery') {
            $data = 'SELECT * FROM galleries WHERE company_id="'.$company_id.'" ';
        }
        /*List Post Category Criteria*/
        if ($item->data_widget == 'category-post' && $type == 'product') {
            $doSlug = $this->slug($item->criteria);
            $catId = $this->ci->db->query('SELECT * FROM packages WHERE company_id='.$company_id.' AND slug="'.$doSlug.'"')->result();
            $catId = @$catId[0]->id;
            if ($catId != NULL) {
            	# code...
	            $data .= 'AND package_id ='. $catId.' ';
            }
        }
        /*List Latest Post*/
        if ($item->data_widget == 'latest-post') {
            $data .='ORDER BY id DESC ';
        }
        /*List Popular Post*/
        if ($item->data_widget == 'popular-post') {
            $data .='ORDER BY visit DESC ';
        }
        /*List Recommended Post*/
        if ($item->data_widget == 'recommended-post') {
            $data .= 'AND tags LIKE "%'. $item->criteria.'%" ';
        }
        /*List Related Post*/
        if ($item->data_widget == 'related-post' && $type == 'product') {
            $data .= 'AND package_id ="'. $related.'" ';
        }
        if (!empty($item->limit) || $item->limit !='' || $item->limit !=='0') {
            $data .='LIMIT '.$item->limit.' ';
        }
        $result = $this->ci->db->query($data)->result();
        return $result;
    }

    // Slider 
    

	public function get_data_sidebar($company_id='',$file='',$related='')
	{
		/*Define Variable*/
        $sidebar_file = @$file;
        $post_related = @$related;
        $result_sidebar = array();
        // Remove .php
        $sidebar_file = str_replace('.php', '', $sidebar_file);
        /* Get Sidebar Widget*/
        $data_widget = $this->ci->db->query("SELECT * FROM sidebar_position WHERE sidebar_file = '".$sidebar_file."' AND company_id = ".$company_id." ORDER BY sort ASC")->result();
        // var_dump($data_widget); die();
        $in = 0;
        foreach ($data_widget as $item) {
            /*HTML*/
            if ($item->type_content == 'html') {
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'html',
                    'widget' => $item->data_widget,
                    'data' => base64_decode($item->html),
                );
            }
            /*Product*/
            if ($item->type_content == 'product') {
                $db_data = null;
                if ($item->data_widget == 'category-list') {
                    $db_data = $this->ci->db->query('SELECT * FROM packages WHERE company_id="'.$company_id.'"')->result();
                }else{
                    $db_data = $this->sidebar_options($item->type_content,$item,$company_id,$post_related);
                }
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'post',
                    'widget' => $item->data_widget,
                    'data' => $db_data,
                );
            }
            /*Blog*/
            if ($item->type_content == 'blog') {
                $db_data = null;
                if ($item->data_widget == 'category-list') {
                    $db_data = $this->ci->db->query('SELECT * FROM blog_category WHERE company_id="'.$company_id.'"')->result();
                }else{
                    $db_data = $this->sidebar_options($item->type_content,$item,$company_id,$post_related);
                }
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'post',
                    'widget' => $item->data_widget,
                    'data' => $db_data,
                );
            }
            /*Video*/
            if ($item->type_content == 'video') {
                $db_data = null;
                if ($item->data_widget == 'category-list') {
                    $db_data = $this->ci->db->query('SELECT * FROM video_category WHERE company_id="'.$company_id.'"')->result();
                }else{
                    $db_data = $this->sidebar_options($item->type_content,$item,$company_id,$post_related);
                }
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'video',
                    'widget' => $item->data_widget,
                    'data' => $db_data,
                );
            }

            /*Events*/
            if ($item->type_content == 'event') {
                $db_data = null;
                if ($item->data_widget == 'category-list') {
                    // $db_data = $this->Video_category->sidebar_options($company_id);
                    $db_data = null;
                }else{
                    $db_data = $this->sidebar_options($item->type_content,$item,$company_id,$post_related);
                }
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'event',
                    'widget' => $item->data_widget,
                    'data' => $db_data,
                );
            }

            /*Gallery*/
            if ($item->type_content == 'gallery') {
                $db_data = null;
                if ($item->data_widget == 'category-list') {
                    $db_data = $this->ci->db->query('SELECT * FROM gallery_category WHERE company_id="'.$company_id.'"')->result();
                }else{
                    $db_data = $this->sidebar_options($item->type_content,$item,$company_id,$post_related);
                }
                $result = array(
                    'title' => $item->title,
                    'type' => $item->type_content,
                    'type_file' => 'gallery',
                    'widget' => $item->data_widget,
                    'data' => $db_data,
                );
            }

            $result_sidebar[$in] = $result;
            $in++;
        }
        $result = json_decode(json_encode($result_sidebar));
        return $result;
	}


	public function sidebar($value='',$related='')
	{
		$company_id = COMPANY_ID;
		$file = 'sidebar_'.$value.'.php';
		$sidebar = $this->get_data_sidebar($company_id,$file,$related);
		$func = $this;
		include(dirname(__FILE__)."/../../theme/front/sidebar/sidebar_".$value.".php");
	}
	public function sidebar_custom($value='',$related='')
	{
		$company_id = COMPANY_ID;
		$file = 'sidebar_'.$value.'.php';
		$sidebar = $this->get_data_sidebar($company_id,$file,$related);
		$data = $GLOBALS['API_RESULT'];
		$resource = $this->get_data_sidebar($company_id,$file,$related);
		return json_decode($resource,false);
	}

	public function grab_sidebar_content($company_id='',$file='',$related='')
	{
		$company_id = COMPANY_ID;
		$sidebar = $this->get_data_sidebar($company_id,$file,$related);
		$data = $GLOBALS['API_RESULT'];
		$resource = $this->ajax_http_post($api,$vars);
		return json_decode($resource,false);
	}


	public function sidebar_type($data='',$opsi='')
	{
		$data = $data;
		$opsi = $opsi;
		$func = $this;
		@include(dirname(__FILE__)."/../../theme/front/sidebar/type/".$data->type_file.".php");
	}
	public function published($data='')
	{
		$all = explode(' ', $data);
		$date = explode('-', $all[0]);
		$dateObject = DateTime::createFromFormat('!m', $date[1]);
		$month = $dateObject->format('F');
		return $date[2]." ".$month.", ".$date[0];
	}
	public function trailer($data='',$limit='',$end='...')
	{
		return substr(strip_tags($data->content), 0, $limit).$end;
	}
	public function price($item='',$filter='')
	{
		$data = $GLOBALS['API_RESULT'];
		if ($filter == '') {
			return $data->web->currency.' '.number_format($item->price);
		}
		if ($filter == 'currency') {
			return $data->web->currency;
		}
		if ($filter == 'number') {
			return number_format($item->price);
		}
	}
	

	public function loop($file)
	{
		$data = $GLOBALS['API_RESULT'];
		$func = $this;
		$dir = dirname(__FILE__)."/../../theme/front/loop/";
		$i=0;
		foreach ($data->result as $item) {
			include($dir.$file.".php");
			$i++;
		}
	}
	public function fb_comment_count($url='')
	{
		if ($url == '') {
			$url = base_url(uri_string());
		}
	  $json = json_decode($this->read('https://graph.facebook.com/?ids=' . $url));
	  // var_dump($json->$url->share->comment_count);
	  return isset($json->$url->share->comment_count) ? $json->$url->share->comment_count : 0;
	}
	public function fb_share_count($url='')
	{
		if ($url == '') {
			$url = base_url(uri_string());
		}
	  $json = json_decode($this->read('https://graph.facebook.com/?ids=' . $url));
	  return isset($json->$url->share->share_count) ? $json->$url->share->share_count : 0;
	}

	public function fb_sdk()
	{
		$html = base64_decode(FB_SDK_BASE64);
		return $html;
	}

	public function fb_comment($num='',$url = '')
	{
		if ($url == '') {
			$url = base_url(uri_string());
		}
		$html = "<div class='fb-comments' data-href='".$url."' data-numposts='".$num."' data-width='100%'></div>";
		return $html;
	}

	public function fb_share_link($url='')
	{
		if ($url == '') {
			$url = base_url(uri_string());
		}
		$link = "https://www.facebook.com/dialog/feed?app_id=597347393950604&link=".$url;
		return $link;
	}
	public function in_share_link($url='')
	{
		if ($url == '') {
			$url = base_url(uri_string());
		}
		$link = "https://www.linkedin.com/shareArticle?url=".$url;
		return $link;
	}
	public function tweeter_share_link($url='')
	{
		$data = $GLOBALS['API_RESULT'];
		if ($url == '') {
			$url = base_url(uri_string());
		}
		$link = "https://twitter.com/intent/tweet?text=".@$data->result->title." - ".$url;
		return $link;
	}

	public function dm_whatsapp($custom='')
	{
		$link = 'https://wa.me/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->whatsapp;
		}
		return $link;
	}

	public function dm_whatsapp_text($number,$text){
		return 'https://api.whatsapp.com/send?phone='.$number.'&text='.$text;
	}

	public function dm_telegram($custom='')
	{
		$link = 'https://dm.gotrasoft.com/tgm/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->telegram;
		}
		return $link;
	}
	public function dm_messenger($custom='')
	{
		$link = 'https://dm.gotrasoft.com/m/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->messenger;
		}
		return $link;
	}

	public function dm_telphone($custom='')
	{
		$link = 'tel:';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->company->company_telp;
		}
		return $link;
	}

	public function dm_email($custom='')
	{
		$link = 'mailto:';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->company->company_email;
		}
		return $link;
	}

	public function dm_instagram($custom='')
	{
		$link = 'https://dm.gotrasoft.com/ig/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->instagram_url;
		}
		return $link;
	}

	public function dm_bbm($custom='')
	{
		$link = 'https://dm.gotrasoft.com/bbm/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->bbm;
		}
		return $link;
	}

	public function dm_line($custom='')
	{
		$link = 'https://dm.gotrasoft.com/ln/';
		if ($custom != '') {
			$link .= $custom;
		}else{
			$data = $GLOBALS['API_RESULT'];
			$link .= $data->social->line;
		}
		return $link;
	}

	public function bootstrap_grid($item='')
	{
		switch ($item->setting->grid) {
			case '1':
				return '12';
				break;
			case '2':
				return '6';
				break;
			case '3':
				return '4';
				break;
			case '4':
				return '3';
				break;
			case '6':
				return '2';
				break;
			
			default:
				return '4';
				break;
		}
	}

	public function active_lang()
	{
		$active = $this->ci->session->userdata('active_lang');
		if ($active == '' || $active == null) {
			$data = $GLOBALS['API_RESULT'];
			$active = @$data->web->language[0];
		}
		return $active;
	}

	public function lang_url($order='')
	{
		$data = $GLOBALS['API_RESULT'];
		return base_url('set_lang/'.@$data->web->language[$order]); 
	}

	public function get_lang($order='')
	{
		$data = $GLOBALS['API_RESULT'];
		return @$data->web->language[$order];
	}

	public function load_captcha($key = '')
	{
		// if (GR_SITE_KEY != '') {
		// 	$html = "<script src='https://www.google.com/recaptcha/api.js'></script> <div class='g-recaptcha' data-sitekey='".GR_SITE_KEY."'></div>"; 
		// 	if ($key != '') {
		// 		$html = "<script src='https://www.google.com/recaptcha/api.js'></script> <div class='g-recaptcha' data-sitekey='".@$key."'></div>";
		// 	}
		// 	return $html;
		// }else{
		// 	echo $GLOBALS['captcha'];
		// }
		
		$html = '

		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1">'.$GLOBALS["captcha"].'</span>
		  </div>
		  <input type="text" class="form-control" name="captcha" required="required" placeholder="Fill the Answer">
		</div>

		';
		echo $html;
		
	}

	public function captcha_status($success='',$failed='')
	{
		$msg = '';
		if ($success != '') {
			$msg = $success;
		}else
		if ($failed != '') {
			$msg = $failed;
		}else{
			$msg = $this->ci->session->flashdata('status');
		}	

		$html = '';
		if ($this->ci->session->flashdata('mail_sent') == true && $this->ci->session->flashdata('status') != '') {
			$html = '<div class="alert alert-success" role="alert">
	  '.$msg.'
	</div>';
		}
		if ($this->ci->session->flashdata('mail_sent') == false && $this->ci->session->flashdata('status') != '') {
			$html = '<div class="alert alert-danger" role="alert">
	  '.$msg.'
	</div>';

		}
	echo $html;
		
	}

	// FB Pixel
	public function fb_pixel_sdk()
	{
		return "<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '551165378414357');
  fbq('track', 'PageView');
</script>
<noscript><img height='1' width='1' style='display:none'
  src='https://www.facebook.com/tr?id=551165378414357&ev=PageView&noscript=1'
/></noscript>
<!-- End Facebook Pixel Code -->";
	}

	// Xview_head
	public function xview_header($value='')
	{
		$data = $GLOBALS['API_RESULT'];
		// Script
		echo $data->addon->header_script;

		// FB Pixel
		// echo $this->fb_pixel_sdk();


		// chatpop
		if ($data->addon->chatpop_status == '1') {
			echo $this->chatpop_header();
		}
	}
	public function xview_footer($value='')
	{
		$data = $GLOBALS['API_RESULT'];
		// Script
		echo $data->addon->footer_script;
		// chatpop
		if ($data->addon->chatpop_status == '1') {
			echo $this->chatpop_active();
			echo $this->chatpop_footer();
		}
	}

	// ChatpOp
	public function chatpop_header($value='')
	{
		$html = '<link rel="stylesheet" type="text/css" href="https://cdn.gotrasoft.com/widget/chatpop/css/chatpop.css"> <style> :root {--chatpop-bubble-bg: #089dff; --chatpop-notif-bg: #fff; --chatpop-notif-message-bg: #fff; --chatpop-notif-message-text: #2d2d2d; } </style>';
		return $html;
	}
	public function chatpop_footer($value='')
	{
		$html = '<script type="text/javascript" src="https://cdn.gotrasoft.com/widget/chatpop/js/chatpop.js"></script>';
		return $html;
	}
	public function chatpop_active($value='')
	{
		$data = $GLOBALS['API_RESULT'];
		$html = '<div id="chatpop"> <div class="chatpop-wrapper" id="chatpop-box"> <div class="chatpop-notif" id="chatpop-notif"> <button class="chatpop-close" id="chatpop-notif-close">X</button> <div class="chatpop-message"> <div style="clear: both;"></div> <div class="chatpop-person"> <img src="'.$data->addon->chatpop_picture.'" alt="person" width="80px"> </div> <div class="chatpop-content"> <div>'.$data->addon->chatpop_name.'</div> <div class="chatpop-content-inner"> '.$data->addon->chatpop_message.'</div> </div> </div> <div class="chatpop-clear"></div> <div class="chatpop-icon"> <ul>';
		if ($data->social->whatsapp != '') {
			$html .='<li><a href="'.$this->dm_whatsapp().'" class="whatsapp"><img src="https://cdn.gotrasoft.com/widget/chatpop/img/whatsapp.png"></a></li>';
		}
		if ($data->social->messenger != '') {
			$html .='<li><a href="'.$this->dm_messenger().'" class="messenger"><img src="https://cdn.gotrasoft.com/widget/chatpop/img/messenger.png"></a></li>';
		}
		if ($data->social->telegram != '') {
			$html .='<li><a href="'.$this->dm_telegram().'" class="telegram"><img src="https://cdn.gotrasoft.com/widget/chatpop/img/telegram.png"></a></li>';
		}
		if ($data->company->company_email != '') {
			$html .='<li><a href="'.$this->dm_email().'" class="mail"><img src="https://cdn.gotrasoft.com/widget/chatpop/img/mail.png"></a></li>';
		}
		if ($data->company->company_telp != '') {
			$html .='<li><a href="'.$this->dm_telphone().'" class="phone"><img src="https://cdn.gotrasoft.com/widget/chatpop/img/telp.png"></a></li>';
		}
		$html .='</ul> </div> <div class="chatpop-clear"></div> </div> <div class="chatpop-button"> <button class="chatpop-button-bullet" id="chatpop-notif-show"> <img src="https://cdn.gotrasoft.com/widget/chatpop/img/chat.png" alt="chatpop-gotrasoft-chat"> </button> </div> </div> </div>';
		return $html;
	}


	 // MakeSlug
    public function slug($title='')
    {
        $title = strip_tags($title);
        // Preserve escaped octets.
        $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
        // Remove percent signs that are not part of an octet.
        $title = str_replace('%', '', $title);
        // Restore octets.
        $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

        if ($this->seems_utf8($title)) {
            if (function_exists('mb_strtolower')) {
                $title = mb_strtolower($title, 'UTF-8');
            }
            $title = $this->utf8_uri_encode($title, 200);
        }

        $title = strtolower($title);
        $title = preg_replace('/&.+?;/', '', $title); // kill entities
        $title = str_replace('.', '-', $title);
        $title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
        $title = preg_replace('/\s+/', '-', $title);
        $title = preg_replace('|-+|', '-', $title);
        $title = trim($title, '-');

        return $title;
    }

    //taken from wordpress
    function seems_utf8($str) {
        $length = strlen($str);
        for ($i=0; $i < $length; $i++) {
            $c = ord($str[$i]);
            if ($c < 0x80) $n = 0; # 0bbbbbbb
            elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
            elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
            elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
            elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
            elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
            else return false; # Does not match any model
            for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
                if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
                    return false;
            }
        }
        return true;
    }

    //taken from wordpress
    function utf8_uri_encode( $utf8_string, $length = 0 ) {
        $unicode = '';
        $values = array();
        $num_octets = 1;
        $unicode_length = 0;

        $string_length = strlen( $utf8_string );
        for ($i = 0; $i < $string_length; $i++ ) {

            $value = ord( $utf8_string[ $i ] );

            if ( $value < 128 ) {
                if ( $length && ( $unicode_length >= $length ) )
                    break;
                $unicode .= chr($value);
                $unicode_length++;
            } else {
                if ( count( $values ) == 0 ) $num_octets = ( $value < 224 ) ? 2 : 3;

                $values[] = $value;

                if ( $length && ( $unicode_length + ($num_octets * 3) ) > $length )
                    break;
                if ( count( $values ) == $num_octets ) {
                    if ($num_octets == 3) {
                        $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
                        $unicode_length += 9;
                    } else {
                        $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
                        $unicode_length += 6;
                    }

                    $values = array();
                    $num_octets = 1;
                }
            }
        }

        return $unicode;
    }



	

}

/* End of file xview.php */
/* Location: ./application/libraries/xview.php */
