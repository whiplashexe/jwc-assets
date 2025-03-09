<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH.'/core/MY_API.php';

class Home extends MY_API
{
    public function __construct() {
        parent::__construct();

        $this->load->driver('cache', array('adapter' => 'redis', 'backup' => 'file'));
    }

    // List all your items
    public function index($lang='')
    {
        $company_id = $this->company_id;

        /* Load General Data */
         $general = $this->generalData($company_id);


         /*Preparing Data*/
         $opt = array(
             'site_position' => 'home',
          );

         // Extend Data
         $data = (object) $this->mix($opt,$general);
         $data = json_decode(json_encode($data));




        if ($lang != '') {
            $array = array(
                'active_lang' => $lang,
            );

            if ($data->web->language[0] == $lang) {
                return redirect(base_url(),'refresh');
            }
        }
        if(!$this->ifNotFound_single($data)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;

            // buatkan kondisi jika query ?dev=1 maka keluar json, jika tidak maka passing view
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                $this->content('index');
                $this->footer();
            }

        }

    }
  
  	// Sitemap Automation
  	public function sitemap(){
      	$company_id = $this->company_id;
        // Product Category
        $data['p_category'] = $this->db->query('SELECT * FROM packages WHERE company_id="'.$company_id.'"')->result();
        $data['products'] = $this->db->query('SELECT * FROM products WHERE company_id="'.$company_id.'" AND draft="0"')->result();
        $data['b_category'] = $this->db->query('SELECT * FROM blog_category WHERE company_id="'.$company_id.'"')->result();
        $data['blogs'] = $this->db->query('SELECT * FROM blog_post WHERE company_id="'.$company_id.'" AND draft="0"')->result();
        $data['gallery'] = $this->db->query('SELECT * FROM gallery_category WHERE company_id="'.$company_id.'"')->result();
        $data['pages'] = $this->db->query('SELECT * FROM pages WHERE company_id="'.$company_id.'"')->result();
        $data['v_category'] = $this->db->query('SELECT * FROM video_category WHERE company_id="'.$company_id.'"')->result();
        $data['videos'] = $this->db->query('SELECT * FROM video_post WHERE company_id="'.$company_id.'"')->result();

  		return $this->load->view('sitemap',$data);
    }
  
  	// Bio Link
  	public function biolink(){
      	$company_id = $this->company_id;
		/* Load General Data */
         $general = $this->generalData($company_id);
      
		/*Preparing Data*/
         $opt = array(
             'site_position' => 'biolink',
          );

         // Extend Data
         $data = (object) $this->mix($opt,$general);
         $data = json_decode(json_encode($data));
      	$this->setGlobal($data);

        // jika query ?dev=1 maka keluar json
        if($this->input->get('dev') == 1){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'data' => $data,
                'text' => 'Success 200',
                'type' => 'success'
            ]));
        }else{
      	 $this->dataView['data'] = $data;
      	 $this->content_front(BIOLINK_FILE);
        }
    }

    // List all your items
    public function view($action = null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // Collect data
          $result = $this->db->query('SELECT * FROM products WHERE company_id="'.$company_id.'" AND slug="'.$slug.'" AND draft="0"')->result();
      		if(@$result[0]->id == NULL){
              $this->redirectHome();
            }

          $images = $this->db->query('SELECT * FROM images WHERE company_id="'.$company_id.'" AND product_id="'.@$result[0]->id.'"')->result();
      	  $reviews = $this->db->query('SELECT * FROM reviews WHERE company_id="'.$company_id.'" AND product_id="'.@$result[0]->id.'"')->result();

          $pkg_all = $this->db->query('SELECT * FROM packages WHERE company_id='.$company_id)->result();
          $tags = explode(',', @$result[0]->tags);

          $cat_data = $this->db->query('SELECT * FROM packages WHERE company_id="'.$company_id.'" AND id="'.@$result[0]->package_id.'"')->result();
          $current_visit = @($result[0]->visit == NULL)? 1 : $result[0]->visit+1 ;
          // // Add visit to Database
          $this->db->query("UPDATE `products` SET `visit` = ".$current_visit." WHERE id =".@$result[0]->id);

          $addon_contents = $this->db->query('SELECT * FROM addon_contents WHERE company_id="'.$company_id.'" AND product_id="'.@$result[0]->id.'"')->result();

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // // Set Page
          $curr_page = @$result[0]->title;
          if (!empty($siteOption['route_product_view_label'])) {
              $curr_page .= @" - ".$siteOption['route_product_view_label'];
          }


          // /*Preparing Data*/
          $opt = array(
              'result'           => @$result[0],
              'addon_contents'   => @$addon_contents,
              'cat_data'         => $cat_data[0],
              'images'           => $images,
              'reviews'           => $reviews,
              'is_product'       => true,
              'current_page'     => $curr_page,
              'pkg_all'          => $pkg_all,
              'tags'             => $tags,
              'site_position'    => 'view_product',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));


        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->result->img_cover_url;
            $this->dataView['data'] = $data;
          	// Global Data Product View
            $GLOBALS['product_view_data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('product_single');
            $this->footer();
            }
        }

    }

    public function contact()
    {
           $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $curr_page = 'Contact';

          $opt = array(
              'current_page'     => $curr_page,
              'site_position'    => 'contact',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));
        if(!$this->ifNotFound_single($data)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('page/contact');
            $this->footer();
            }
        }

    }

    public function gallery($slug='')
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $list_tag = $this->db->query('SELECT * FROM gallery_tags WHERE company_id='.$company_id)->result();
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // cat data
          $cat_data = null;
          $result = null;
          $id = null;
          $cat = null;
          $all = false;
          if ($slug === 'all' || $slug === '') {
              $cat    = "all";
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_gallery'] == null || $siteOption['limit_list_gallery'] == '')? '5' : $siteOption['limit_list_gallery'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM galleries WHERE company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM galleries WHERE company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();

              $pages = ceil($total/$per_page);
              //End Pagination
              $all    = true;
          } else {
              $cat_data = $this->db->query('SELECT * FROM gallery_category WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
              $id       = @$cat_data[0]->id;
              $cat      = @$cat_data[0]->name;
               // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_gallery'] == null || $siteOption['limit_list_gallery'] == '')? '5' : $siteOption['limit_list_gallery'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM galleries WHERE category_id='".$id."' AND company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM galleries WHERE category_id='".$id."' AND company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();

              $pages = ceil($total/$per_page);
              // End Pagination

              $all      = false;
          }

          $curr_page = $cat;
          if (!empty($siteOption['route_gallery_label'])) {
              $curr_page .= @" - ".$siteOption['route_gallery_label'];
          }

          // result filter category
          $opt = array(
              'result'           => $result,
              'list_tag'      => $list_tag,
              'cat_data'         => @$cat_data[0],
              'category_name'    => $cat,
              'current_page'     => $curr_page,
              'is_all'           => $all,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'video_category',
              );



          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));


        if(!$this->ifNotFound($data,$slug)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('page/gallery');
            $this->footer();
            }
        }
    }

    public function gallery_tag($action=null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;
          $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $tag_data = $this->db->query('SELECT * FROM gallery_tags WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          $id       = @$tag_data[0]->id;
          $name     = @$tag_data[0]->name;

          // Pagination
          $page_position = ($opt_page)? (int)$opt_page: 1;
          $per_page = ($siteOption['limit_list_gallery'] == null || $siteOption['limit_list_gallery'] == '')? '5' : $siteOption['limit_list_gallery'];
          $page = ($page_position - 1) * $per_page;

          $query = $this->db->query("SELECT * FROM galleries WHERE gallery_tags LIKE '%".$name."%' AND company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
          $total = $this->db->query("SELECT id FROM galleries WHERE gallery_tags LIKE '%".$name."%' AND company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
          $result = $query->result();

          $pages = ceil($total/$per_page);

          $curr_page = $name;
          if (!empty($siteOption['route_gallery_tag_label'])) {
              $curr_page .= @" - ".$siteOption['route_gallery_tag_label'];
          }

          $opt = array(
            'result'           => $result,
            // 'result_count'      => $total,
            'tag_name'         => $name,
            'current_page'     => $curr_page,
            'pages'            => $pages,
            'page_position'    => $page_position,
            'site_position'    => 'gallery_tag',
            );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('page/gallery');
            $this->footer();
            }
        }

    }

    public function view_gallery($action=null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // Collect data
          $result = $this->db->query('SELECT * FROM galleries WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          if(@$result[0]->id == NULL){
              $this->redirectHome();
            }
            
          $pkg_all = $this->db->query('SELECT * FROM gallery_category WHERE company_id='.$company_id)->result();
          $tags = explode(',', @$result[0]->tags);

          $cat_data = $this->db->query('SELECT * FROM gallery_category WHERE company_id="'.$company_id.'" AND id="'.@$result[0]->category_id.'"')->result();
          $current_visit = ($result[0]->visit == NULL)? 1 : $result[0]->visit+1 ;
          // // Add visit to Database
          $this->db->query("UPDATE `galleries` SET `visit` = ".$current_visit." WHERE id =".@$result[0]->id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // Set Page
          $curr_page = @$result[0]->title;
          if (!empty($siteOption['route_gallery_view_label'])) {
              $curr_page .= @" - ".$siteOption['route_gallery_view_label'];
          }


          /*Preparing Data*/
          $opt = array(
              'result'           => @$result[0],
              'cat_data'         => $cat_data[0],
              // 'images'           => $images,
              'is_product'       => true,
              'current_page'     => $curr_page,
              'pkg_all'          => $pkg_all,
              'tags'             => $tags,
              'site_position'    => 'view_gallery',
              );


          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->result->url_img_thumb;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('page/gallery_single');
            $this->footer();
            }
        }

    }

    // List all your items
    public function search($type = '')
    {
        $opt_page = $this->input->get('page');
        $key = $this->input->get('q');

        $company_id = $this->company_id;
          $type = $type;
          $key = str_replace('%20', ' ', $key);

           /* Load General Data */
          $general = $this->generalData($company_id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $curr_page = $key." - ".strtoupper($type)." Search";


          // Variables
          $pages = '';
          $page_position = '';
          $result = '';
          if($type == $siteOption['route_search_product']){
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM products WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM products WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();


              $pages = ceil($total/$per_page);

              // End Pagination
          }
          if($type == $siteOption['route_search_blog']){
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM blog_post WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM blog_post WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();


              $pages = ceil($total/$per_page);

              // End Pagination
          }
          if($type == $siteOption['route_search_video']){
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM video_post WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM video_post WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();


              $pages = ceil($total/$per_page);

              // End Pagination
          }
          if($type == $siteOption['route_search_gallery']){
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_gallery'] == null || $siteOption['limit_list_gallery'] == '')? '5' : $siteOption['limit_list_gallery'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM galleries WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM galleries WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();


              $pages = ceil($total/$per_page);

              // End Pagination

          }
          if($type == $siteOption['route_search_event']){
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM events WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM events WHERE title LIKE '%".$key."%' AND company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();


              $pages = ceil($total/$per_page);

              // End Pagination

          }

          $opt = array(
              'result'           => $result,
              // 'result_count'      => $total,
              'current_page'     => $curr_page,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'search_type'      => $type,
              'site_position'    => 'search',
              );



          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$type)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('search');
            $this->footer();
            }
        }



    }
    // List all your items
    public function product_category($slug)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // cat data
          $cat_data = null;
          $result = null;
          $id = null;
          $cat = null;
          $all = false;
          if ($slug === 'all' || $slug === '') {
            
              $cat    = "all";
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

            // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
            if($siteOption['sorting_list_supported'] == 1){
              $query = $this->db->query("SELECT 
                products.*, 
                packages.name AS category_name, 
                packages.content AS category_content, 
                packages.slug AS category_slug, 
                packages.image AS category_img_url, 
                (SELECT COUNT(*) FROM products WHERE products.package_id = packages.id) as category_total_post 
                FROM products INNER JOIN packages ON (products.package_id = packages.id) WHERE products.company_id='".$company_id."' AND products.draft='0' ORDER BY products.sort DESC , products.updated_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM products WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();
            }else{

            $query = $this->db->query("SELECT 
                products.*, 
                packages.name AS category_name, 
                packages.content AS category_content, 
                packages.slug AS category_slug, 
                packages.image AS category_img_url, 
                (SELECT COUNT(*) FROM products WHERE products.package_id = packages.id) as category_total_post 
                FROM products INNER JOIN packages ON (products.package_id = packages.id) WHERE products.company_id='".$company_id."' AND products.draft='0' ORDER BY products.created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM products WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();
            }
            

              $pages = ceil($total/$per_page);
            
              //End Pagination
              $all    = true;
          } else {
              $cat_data = $this->db->query('SELECT *, (SELECT COUNT(*) FROM products WHERE products.package_id = packages.id) as category_total_post FROM packages WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
              $id       = @$cat_data[0]->id;
              $cat      = @$cat_data[0]->name;
               // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
            if($siteOption['sorting_list_supported'] == 1){
                $query = $this->db->query("SELECT 
                    products.*, 
                    packages.name AS category_name, 
                    packages.content AS category_content, 
                    packages.slug AS category_slug, 
                    packages.image AS category_img_url, 
                    (SELECT COUNT(*) FROM products WHERE products.package_id = packages.id) as category_total_post 
                    FROM products INNER JOIN packages ON (products.package_id = packages.id) WHERE products.package_id='".$id."' AND products.company_id='".$company_id."' AND products.draft='0' ORDER BY products.sort DESC , products.updated_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM products WHERE package_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
                }else{

                $query = $this->db->query("SELECT 
                    products.*, 
                    packages.name AS category_name, 
                    packages.content AS category_content, 
                    packages.slug AS category_slug, 
                    packages.image AS category_img_url, 
                    (SELECT COUNT(*) FROM products WHERE products.package_id = packages.id) as category_total_post 
                    FROM products INNER JOIN packages ON (products.package_id = packages.id) WHERE products.package_id='".$id."' AND products.company_id='".$company_id."' AND products.draft='0' ORDER BY products.created_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM products WHERE package_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
                }

              $pages = ceil($total/$per_page);
              // End Pagination

              $all      = false;
          }

          $curr_page = $cat;
          if (!empty($siteOption['route_product_label'])) {
              $curr_page .= @" - ".$siteOption['route_product_label'];
          }

        //   if $total is 0 then redirect to redirectHome
        if($total == 0){
            $this->redirectHome();
        }

          // result filter category
          $opt = array(
              'result'           => $result,
              'result_count'      => $total,
              'cat_data'         => @$cat_data[0],
              'category_name'    => $cat,
              'current_page'     => $curr_page,
              'is_all'           => $all,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'product_category',
              );


          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$slug)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('product');
            $this->footer();
            }
        }

    }

    public function tag($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $tag_data = $this->db->query('SELECT * FROM tags WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          $id       = @$tag_data[0]->id;
          $name     = @$tag_data[0]->name;

          // Pagination
          $page_position = ($opt_page)? (int)$opt_page: 1;
          $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
          $page = ($page_position - 1) * $per_page;

          // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
          if($siteOption['sorting_list_supported'] == 1){
              $query = $this->db->query("SELECT * FROM products WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY sort DESC , updated_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM products WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();
            }else{

                $query = $this->db->query("SELECT * FROM products WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM products WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
            }

          $pages = ceil($total/$per_page);

          $curr_page = $name;
          if (!empty($siteOption['route_product_tag_label'])) {
              $curr_page .= @" - ".$siteOption['route_product_tag_label'];
          }

          $opt = array(
              'result'           => $result,
              'tag_name'         => $name,
              'current_page'     => $curr_page,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'product_tag',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$slug)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('product');
            $this->footer();
            }
        }

    }

    public function blog_post($action = null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // Collect data
          $result = $this->db->query('SELECT * FROM blog_post WHERE company_id="'.$company_id.'" AND slug="'.$slug.'" AND draft="0"')->result();
          if(@$result[0]->id == NULL){
              $this->redirectHome();
            }
          $images = $this->db->query('SELECT * FROM images WHERE company_id="'.$company_id.'" AND blog_id="'.@$result[0]->id.'"')->result();

          $pkg_all = $this->db->query('SELECT * FROM blog_category WHERE company_id='.$company_id)->result();
          $tags = explode(',', @$result[0]->tags);

          $cat_data = $this->db->query('SELECT * FROM blog_category WHERE company_id="'.$company_id.'" AND id="'.@$result[0]->category_id.'"')->result();
          $current_visit = ($result[0]->visit == NULL)? 1 : $result[0]->visit+1 ;
          // // Add visit to Database
          $this->db->query("UPDATE `blog_post` SET `visit` = ".$current_visit." WHERE id =".@$result[0]->id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // Set Page
          $curr_page = @$result[0]->title;
          if (!empty($siteOption['route_blog_view_label'])) {
              $curr_page .= @" - ".$siteOption['route_blog_view_label'];
          }


          // /*Preparing Data*/
          $opt = array(
            'result'           => @$result[0],
            'cat_data'         => @$cat_data[0],
            'images'           => $images,
            'is_product'       => true,
            'current_page'     => $curr_page,
            'pkg_all'          => $pkg_all,
            'tags'             => $tags,
            'site_position'    => 'view_blog',
            );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));


        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->result->img_cover_url;
            $this->dataView['data'] = $data;
          	// Global Data Blog View
            $GLOBALS['blog_view_data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('blog_single');
            $this->footer();
            }
        }

    }
  public function test_cat($slug = null)
    {
    echo "its work!";
  }

    public function blog_category($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // cat data
          $cat_data = null;
          $result = null;
          $id = null;
          $cat = null;
          $all = false;
      
          if ($slug === 'all' || $slug === '') {
              $cat    = "all";
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;
                
              // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
          if($siteOption['sorting_list_supported'] == 1){
                $query = $this->db->query("SELECT 
                    blog_post.*, blog_category.name AS category_name, 
                    blog_category.content AS category_content, 
                    blog_category.slug AS category_slug, 
                    blog_category.image AS category_img_url, 
                    (SELECT COUNT(*) FROM blog_post WHERE blog_post.category_id = blog_category.id) AS category_total_post
                    FROM blog_post INNER JOIN blog_category ON (blog_category.id = blog_post.category_id) WHERE blog_post.company_id='".$company_id."' AND blog_post.draft='0' ORDER BY blog_post.sort DESC , blog_post.updated_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM blog_post WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
            }else{

                $query = $this->db->query("SELECT 
                    blog_post.*, blog_category.name AS category_name, 
                    blog_category.content AS category_content, 
                    blog_category.slug AS category_slug, 
                    blog_category.image AS category_img_url, 
                    (SELECT COUNT(*) FROM blog_post WHERE blog_post.category_id = blog_category.id) AS category_total_post
                    FROM blog_post INNER JOIN blog_category ON (blog_category.id = blog_post.category_id) WHERE blog_post.company_id='".$company_id."' AND blog_post.draft='0' ORDER BY blog_post.created_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM blog_post WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
            }

              $pages = ceil($total/$per_page);
              //End Pagination
              $all    = true;
          } else {
              $cat_data = $this->db->query('SELECT *,(SELECT COUNT(*) FROM blog_post WHERE blog_post.category_id = blog_category.id) as category_total_post FROM blog_category WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
              $id       = @$cat_data[0]->id;
              $cat      = @$cat_data[0]->name;
               // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
          if($siteOption['sorting_list_supported'] == 1){
                $query = $this->db->query("SELECT 
                blog_post.*, blog_category.name AS category_name, 
                blog_category.content AS category_content, 
                blog_category.slug AS category_slug, 
                blog_category.image AS category_img_url, 
                (SELECT COUNT(*) FROM blog_post WHERE blog_post.category_id = blog_category.id) AS category_total_post
                FROM blog_post INNER JOIN blog_category ON (blog_category.id = blog_post.category_id) WHERE blog_post.category_id='".$id."' AND blog_post.company_id='".$company_id."' AND blog_post.draft='0' ORDER BY blog_post.sort DESC , blog_post.updated_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM blog_post WHERE category_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->result();
            }else{

              $query = $this->db->query("SELECT 
                blog_post.*, blog_category.name AS category_name, 
                blog_category.content AS category_content, 
                blog_category.slug AS category_slug, 
                blog_category.image AS category_img_url, 
                (SELECT COUNT(*) FROM blog_post WHERE blog_post.category_id = blog_category.id) AS category_total_post
                FROM blog_post INNER JOIN blog_category ON (blog_category.id = blog_post.category_id) WHERE blog_post.category_id='".$id."' AND blog_post.company_id='".$company_id."' AND blog_post.draft='0' ORDER BY blog_post.created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM blog_post WHERE category_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();
            }

              $pages = ceil($total/$per_page);
              // End Pagination

              $all      = false;
          }


          $curr_page = $cat;
          if (!empty($siteOption['route_blog_label'])) {
              $curr_page .= @" - ".$siteOption['route_blog_label'];
          }
        //   if $total is 0 then redirect to redirectHome
        if($total == 0){
            $this->redirectHome();
        }

          // result filter category
          $opt = array(
              'result'           => $result,
              'result_count'      => $total,
              'cat_data'         => @$cat_data[0],
              'category_name'    => $cat,
              'current_page'     => $curr_page,
              'is_all'           => $all,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'blog_category',
              );



          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$slug)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('blog');
            $this->footer();
            }
        }

    }

    public function blog_tag($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $tag_data = $this->db->query('SELECT * FROM blog_tags WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          $id       = @$tag_data[0]->id;
          $name     = @$tag_data[0]->name;

          // Pagination
          $page_position = ($opt_page)? (int)$opt_page: 1;
          $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
          $page = ($page_position - 1) * $per_page;

          // jika sorting mode = 1 maka akan diurutkan berdasarkan sort desc
          if($siteOption['sorting_list_supported'] == 1){
                $query = $this->db->query("SELECT * FROM blog_post WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY sort DESC , updated_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM blog_post WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->fetchAll(PDO::FETCH_OBJ);
            }else{

                $query = $this->db->query("SELECT * FROM blog_post WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
                $total = $this->db->query("SELECT id FROM blog_post WHERE tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
                $result = $query->fetchAll(PDO::FETCH_OBJ);
            }


          $pages = ceil($total/$per_page);

          $curr_page = $name;
          if (!empty($siteOption['route_blog_tag_label'])) {
              $curr_page .= @" - ".$siteOption['route_blog_tag_label'];
          }

          $opt = array(
            'result'           => $result,
            // 'result_count'      => $total,
            'tag_name'         => $name,
            'current_page'     => $curr_page,
            'pages'            => $pages,
            'page_position'    => $page_position,
            'site_position'    => 'blog_tag',
            );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$slug)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('blog');
            $this->footer();
            }
        }

    }

    public function blog_search($action = null)
    {
        $page = (int)$this->input->get('page');
        $data = $this->Model->get_blog_search($action, $page);
        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
            // Passing View
            $this->header();
            $this->content('search');
            $this->footer();
            }
        }

    }
    // List all your items
    public function page_notfound()
    {

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $curr_page = 'Not Found';

          $opt = array(
              'result'           => null,
              'current_page'     => $curr_page,
              'site_position'    => 'not_found',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        $this->setGlobal($data);
        $GLOBALS['current_img'] = $data->web->site_logo;
        $this->dataView['data'] = $data;
        // jika query ?dev=1 maka keluar json
        if($this->input->get('dev') == 1){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'data' => $data,
                'text' => 'Success 200',
                'type' => 'success'
            ]));
        }else{
        // Passing View
        $this->header();
        $this->content('404');
        $this->footer();
        }
    }

    // List all your items
    public function page($action = null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $page = $this->db->query('SELECT * FROM pages WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();

          $result = @$page[0];
          $redirect = false;
          if (count($page) < 1) {
              $redirect = true;
              $result = null;
          }

          $curr_page = null;
          if (!empty($siteOption['route_page_label'])) {
              $curr_page .= @$siteOption['route_page_label'].' - ';
          }
          $curr_page .= @$result->title;

          $opt = array(
              'result'           => $result,
              'redirect'         => $redirect,
              'current_page'     => $curr_page,
              'site_position'    => 'page',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));


        if(!$this->ifNotFound($data->result,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                // Collection
                if ($data->result->collection_id == '0' || $data->result->collection_id == NULL || $data->result->collection_id == '') {
                    $this->content('page');
                }else{
                    $this->content('index');
                }
                $this->footer();
            }
        }
    }

    //  Video
    public function video_post($action = null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // Collect data
          $result = $this->db->query('SELECT * FROM video_post WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          if(@$result[0]->id == NULL){
              $this->redirectHome();
            }
          // $images = $this->db->query('SELECT * FROM images WHERE company_id="'.$company_id.'" AND product_id="'.@$result[0]->id.'"')->result();

          $pkg_all = $this->db->query('SELECT * FROM video_category WHERE company_id='.$company_id)->result();
          $tags = explode(',', @$result[0]->video_tags);

          $cat_data = $this->db->query('SELECT * FROM video_category WHERE company_id="'.$company_id.'" AND id="'.@$result[0]->video_category_id.'"')->result();
          $current_visit = ($result[0]->visit == NULL)? 1 : $result[0]->visit+1 ;
          // // Add visit to Database
          $this->db->query("UPDATE `video_post` SET `visit` = ".$current_visit." WHERE id =".@$result[0]->id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // Set Page
          $curr_page = @$result[0]->title;
          if (!empty($siteOption['route_video_view_label'])) {
              $curr_page .= @" - ".$siteOption['route_video_view_label'];
          }


          /*Preparing Data*/
          $opt = array(
              'result'           => @$result[0],
              'cat_data'         => @$cat_data[0],
              // 'images'           => $images,
              'is_product'       => true,
              'current_page'     => $curr_page,
              'pkg_all'          => $pkg_all,
              'tags'             => $tags,
              'site_position'    => 'view_video',
              );


          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                $this->content('video_single');
                $this->footer();
            }
        }

    }

    public function video_category($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // cat data
          $cat_data = null;
          $result = null;
          $id = null;
          $cat = null;
          $all = false;
          if ($slug === 'all' || $slug === '') {
              $cat    = "all";
              // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM video_post WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM video_post WHERE company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();

              $pages = ceil($total/$per_page);
              //End Pagination
              $all    = true;
          } else {
              $cat_data = $this->db->query('SELECT * FROM video_category WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
              $id       = @$cat_data[0]->id;
              $cat      = @$cat_data[0]->name;
               // Pagination
              $page_position = ($opt_page)? (int)$opt_page: 1;
              $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
              $page = ($page_position - 1) * $per_page;

              $query = $this->db->query("SELECT * FROM video_post WHERE video_category_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
              $total = $this->db->query("SELECT id FROM video_post WHERE video_category_id='".$id."' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
              $result = $query->result();

              $pages = ceil($total/$per_page);
              // End Pagination

              $all      = false;
          }

          $curr_page = $cat;
          if (!empty($siteOption['route_video_label'])) {
              $curr_page .= @" - ".$siteOption['route_video_label'];
          }

          // result filter category
          $opt = array(
              'result'           => $result,
              // 'result_count'      => $total,
              'cat_data'         => @$cat_data[0],
              'category_name'    => $cat,
              'current_page'     => $curr_page,
              'is_all'           => $all,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'video_category',
              );



          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        $this->ifNotFound($data,$slug);
        $this->setGlobal($data);
        $GLOBALS['current_img'] = $data->web->site_logo;
        $this->dataView['data'] = $data;
        // jika query ?dev=1 maka keluar json
        if($this->input->get('dev') == 1){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'data' => $data,
                'text' => 'Success 200',
                'type' => 'success'
            ]));
        }else{
            // Passing View
            $this->header();
            $this->content('videos');
            $this->footer();
        }
    }

    public function video_tag($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;
           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          $tag_data = $this->db->query('SELECT * FROM video_tags WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          $id       = @$tag_data[0]->id;
          $name     = @$tag_data[0]->name;

          // Pagination
          $page_position = ($opt_page)? (int)$opt_page: 1;
          $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
          $page = ($page_position - 1) * $per_page;

          $query = $this->db->query("SELECT * FROM video_post WHERE video_tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
          $total = $this->db->query("SELECT id FROM video_post WHERE video_tags LIKE '%".$name."%' AND company_id='".$company_id."' AND draft='0' ORDER BY created_at DESC")->num_rows();
          $result = $query->result();

          $pages = ceil($total/$per_page);

          $curr_page = $name;
          if (!empty($siteOption['route_video_tag_label'])) {
              $curr_page .= @" - ".$siteOption['route_video_tag_label'];
          }

          $opt = array(
            'result'           => $result,
            // 'result_count'      => $total,
            'tag_name'         => $name,
            'current_page'     => $curr_page,
            'pages'            => $pages,
            'page_position'    => $page_position,
            'site_position'    => 'video_tag',
            );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        $this->ifNotFound($data,$slug);
        $this->setGlobal($data);
        $GLOBALS['current_img'] = $data->web->site_logo;
        $this->dataView['data'] = $data;
        // jika query ?dev=1 maka keluar json
        if($this->input->get('dev') == 1){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'data' => $data,
                'text' => 'Success 200',
                'type' => 'success'
            ]));
        }else{
            // Passing View
            $this->header();
            $this->content('videos');
            $this->footer();
        }
    }

    public function set_language($lang='',$redirect='')
    {
        $array = array(
            'active_lang' => $lang,
        );

        $this->session->set_userdata( $array );
        $redirect_page = ($redirect != '')? $redirect : base_url();
        return redirect($redirect_page,'refresh');
    }

    public function panel($value='')
    {
        ?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
    body,html {
        margin: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
</style>
</head>
<body>
<iframe src="https://cpanel.gotrasoft.com/" style="border: 0; width: 100%; height: 100%">Your browser doesn't support, Use Popular Browser like Chrome,Mozilla,Opera,Safari Etc...</iframe>
</body>
</html>
        <?php
    }

    // Event List
    public function events($slug = null)
    {
        $opt_page = (int)$this->input->get('page');

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }


          $cat    = "all";
          // Pagination
          $page_position = ($opt_page)? (int)$opt_page: 1;
          $per_page = ($siteOption['limit_list_post'] == null || $siteOption['limit_list_post'] == '')? '5' : $siteOption['limit_list_post'];
          $page = ($page_position - 1) * $per_page;

          $query = $this->db->query("SELECT * FROM events WHERE company_id='".$company_id."' ORDER BY created_at DESC LIMIT ".@$page.",".@$per_page." ");
          $total = $this->db->query("SELECT id FROM events WHERE company_id='".$company_id."' ORDER BY created_at DESC")->num_rows();
          $result = $query->result();

          $pages = ceil($total/$per_page);
          //End Pagination
          $all    = true;

          $curr_page = "List Events";

          // result filter category
          $opt = array(
              'result'           => $result,
              // 'result_count'      => $total,
              'current_page'     => $curr_page,
              'is_all'           => $all,
              'pages'            => $pages,
              'page_position'    => $page_position,
              'site_position'    => 'list_event',
              );


          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));


        if(!$this->ifNotFound_single($data)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                $this->content('events');
                $this->footer();
            }
        }
    }

     //  Event View
    public function event_post($action = null)
    {
        $company_id = $this->company_id;
           $slug = $action;

           /* Load General Data */
          $general = $this->generalData($company_id);

          // Collect data
          $result = $this->db->query('SELECT * FROM events WHERE company_id="'.$company_id.'" AND slug="'.$slug.'"')->result();
          if(@$result[0]->id == NULL){
              $this->redirectHome();
            }

          $current_visit = ($result[0]->visit == NULL)? 1 : $result[0]->visit+1 ;
          // // Add visit to Database
          $this->db->query("UPDATE `events` SET `visit` = ".$current_visit." WHERE id =".@$result[0]->id);

          // /* Get all SiteOption */
          $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$company_id)->result();
          $siteOption = array();
          foreach ($collectSiteOptions as $item) {
              $siteOption[$item->name] = $item->value;
          }

          // Set Page
          $curr_page = @$result[0]->title;
          if (!empty($siteOption['route_event_view_label'])) {
              $curr_page .= @" - ".$siteOption['route_event_view_label'];
          }


          // /*Preparing Data*/
          $opt = array(
            'result'           => @$result[0],
            'current_page'     => $curr_page,
            'site_position'    => 'view_event',
            );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound($data,$action)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->result->img_cover;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                $this->content('event_single');
                $this->footer();
            }
        }

    }

    // Checkout
    public function checkout()
    {

        $company_id = $this->company_id;

           /* Load General Data */
          $general = $this->generalData($company_id);

          $curr_page = 'Contact';

          $opt = array(
              'current_page'     => $curr_page,
              'site_position'    => 'contact',
              );

          // Extend Data
          $data = $this->mix($opt,$general);
          $data = json_decode(json_encode($data));

        if(!$this->ifNotFound_single($data)){
            $this->setGlobal($data);
            $GLOBALS['current_img'] = $data->web->site_logo;
            $this->dataView['data'] = $data;
            // jika query ?dev=1 maka keluar json
            if($this->input->get('dev') == 1){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'data' => $data,
                    'text' => 'Success 200',
                    'type' => 'success'
                ]));
            }else{
                // Passing View
                $this->header();
                $this->content('page/checkout');
                $this->footer();
            }
        }

    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
