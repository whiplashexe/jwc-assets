<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_API extends CI_Controller {

    protected $company_id;
    protected $dataView;

	public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->company_id = COMPANY_ID;
        $this->load->library('Xview');
        
        // Insert Theme Function to $dataView
        $this->dataView['func'] = $this->xview;
        // Current Thumb for Meta Tags
        $this->dataView['current_img'] = null;
        
    }
    public function redirectHome(){
        // return redirect to homepage in 1 second
        
        // echo "If you're not redirected automatically, follow this link to <a href='".base_url()."'>Homepage</a>.";
        // header('Refresh: 1; URL='.base_url());
        // exit();
        show_404();
    }

    public function setGlobal($data='')
    {
       $GLOBALS['API_RESULT'] = $data;
    }

    public function ifNotFound($data='',$url='')
    {
        if ($this->load->filter_complex($data,$url)) {
            // $this->redirectHome();
            // return true;
            show_404();
        }
    }

    public function ifNotFound_single($data='')
    {
        if ($this->load->filtering($data) == true) {
            // $this->redirectHome();
            // return true;
            show_404();
        }
    }
  
  	public function content_front($file=''){
    	return $this->load->content($file, $this->dataView);
    }

    public function header($file='')
    {


        if ($file != '') {
            return $this->load->partial($file, $this->dataView);
        }else{
            return $this->load->partial('header', $this->dataView); 
        }
    }
    public function footer($file='')
    {
        if ($file != '') {
            return $this->load->partial($file);
        }else{
            return $this->load->partial('footer');  
        }
    }
    public function content($data='')
    {
        if (is_array($data)) {
            # code...
            foreach ($data as $key => $value) {
                $this->load->content($value);
            }
        }else{
            $this->load->content($data);
        }
    }

    public function create_captcha()
    {
        if (!file_exists('./captcha/')) {
            mkdir('./captcha/', 0777, true);
        }
        $options = array(
            'img_path' => './captcha/',
            'img_url' => base_url('captcha'),
            'img_width' => '100',
            'img_height' => '30',
            'expiration' => '7200',
            'word_length'   => 5,
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(212, 212, 212)
                )
        );
        $cap = create_captcha($options);
        $image = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);

        return $image;

    }

    public function read($url){
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
        return json_decode($result, true);
    }

    public function pushData($url){
        $resource = $this->read($url);
        return json_decode (json_encode ($resource), FALSE);
    }
  	public function internal_json($url){
        $resource = include __DIR__.'/../../jwc_theme_config_load.php';
        return json_decode (json_encode ($resource), FALSE);
    }

    public function load_themeConfig($domain)
    {
        $slashing = (substr($domain, -1) !== '/')? '/': '';;
        $url = $domain.$slashing."ThemeConfig.php";
        // $url = "https://gotratours.com/ThemeConfig.php";
        $result = $this->internal_json($url);
        return serialize($result);
    }

    public function coma_to_array($data)
    {		
      	if($data !== NULL){
        	$data = strtoupper($data);
        	$result = explode(',', $data);
        	return str_replace(' ', '', $result);
        }
      return '';
    }

    // Merge Array 
    public function mix($arr1 = '', $arr2 = '')
    {
        return array_merge($arr1, $arr2);
    }

    public function rebuild_menu($items='', $status = 'parent')
    {
        $data =array();
        
        foreach($items as $key=>$value) {
            $data[$key] = $value;
            if(array_key_exists('child',$value)) {
                $this->rebuild_menu($value['child'],'child');
            }
        }
        return $data;
    }

    // Primary Menu
    public function primary_menu($company_id = '')
    {
        $sql_str = "SELECT id,label,link,language,parent,sort FROM navigasi WHERE company_id= ".$this->company_id." ORDER BY sort ASC";
        $result = $this->db->query($sql_str)->result();
        // Re-Build
        $ref   = [];
        $items = [];

        foreach ($result as $key) {

            $thisRef = &$ref[$key->id];

            $thisRef['parent'] = $key->parent;
            $thisRef['label'] = $key->label;
            $thisRef['link'] = $key->link;
            $thisRef['language'] = $key->language;
            $thisRef['id'] = $key->id;

           if($key->parent == 0) {
                $items[$key->id] = &$thisRef;
           } else {
                $ref[$key->parent]['child'][$key->id] = &$thisRef;
           }

        }
        return $this->rebuild_menu($items);
        
        
    }

    public function countingVisitor($company_id='')
    {
        // submiting visit

        $now = date('Y-m-d');

        // $where = array('date'=>$now,'company_id'=>$company_id);

        $getit = Visitor::where('date',$now)
                        ->where('company_id',$company_id);

        $visit = NULL;

        if ($getit->count() > 0) {

            $thisDate = $getit->get();
            $lastVisit = $thisDate[0]->visitor;
            $visit = $lastVisit+1;

            // Update
            $newVisit = Visitor::where('date',$now)
                        ->where('company_id',$company_id)
                        ->update(array('visitor'=>$visit));

        } else {

            $visit = 1;
            // Saving
            $newVisit = new Visitor;
            $newVisit->date = $now;
            $newVisit->company_id = $company_id;
            $newVisit->visitor = $visit;
            $newVisit->save();

        }

        // null visit

        $checking = 7; //7 days

        for ($i=1; $i < $checking; $i++) { 

            $theday = "-".$i." days";

            $decday = date("Y-m-d", strtotime($theday));

            // $where = array('date'=>$decday,'company_id'=>$company_id);

            $getit = Visitor::where('date',$decday)
                            ->where('company_id',$company_id);

            if ($getit->count() > 0) {

                continue;

            }

            $visit = 0;
            $newVisit = new Visitor;
            $newVisit->date = $decday;
            $newVisit->company_id = $company_id;
            $newVisit->visitor = $visit;
            $newVisit->save();

        }

        /*Deleting Old Count*/
        app('db')->select("DELETE FROM `visitors` WHERE NOT date >= DATE(NOW()) - INTERVAL 60 DAY AND `company_id` = '{$company_id}'");
    }



    function generalData($company_id='')
    {
        // $this->countingVisitor($company_id);
        $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$this->company_id)->result();
        $data = array();
        foreach ($collectSiteOptions as $item) {
            $data[$item->name] = $item->value;
        }
      
        $web = array(
            'site_name'             =>@$data['site_name'],
            'site_desc'             =>@$data['site_desc'],
            'site_keyword'          =>@$data['site_keyword'],
            'site_logo'             =>@$data['site_logo'],
            'site_logo_alternative' =>@$data['site_logo_alternative'],
          	'site_favicon' 			=>@$data['site_favicon'],
            'site_about'            =>@$data['site_about'],
            'site_domain'           =>@$data['domain'],
            'hide_price'            =>@$data['hide_price'],
            'currency'              =>@$data['currency'],
            'language'              =>$this->coma_to_array(@$data['language_support']),
            'image_product'         =>@$data['image_product_supported'],
            'image_blog'            =>@$data['image_blog_supported'],
            'fb_moderator'          =>$this->coma_to_array(@$data['fb_moderator']),
            'layout_type'           =>@$data['layout_type'],
            'layout_header'         =>@$data['layout_header'],
            'layout_footer'         =>@$data['layout_footer'],
            );
      


        $company = array(
            'company_id'      =>$this->company_id,
            'company_email'   =>@$data['company_email'],
            'company_phone'   =>@$data['company_phone'],
            'company_image'   =>@$data['company_image'],
            'company_name'    =>@$data['company_name'],
            'company_desc'    =>@$data['company_desc'],
            'company_telp'    =>@$data['company_telp'],
            'company_address' =>@$data['company_address'],
            );
      

        $themeConf = @unserialize($this->load_themeConfig(@$data['domain']));
        // var_dump($data['domain']);
        $themecolor = array();
        if (isset($themeConf->color)) {
            foreach ($themeConf->color as $key => $value) {
                $themecolor[$key] = @$data['themecolor_'.$key];
            }
        }
      


        $social = array(
            'facebook_url'   =>@$data['facebook_url'],
            'googleplus_url' =>@$data['googleplus_url'],
            'twitter_url'    =>@$data['twitter_url'],
            'youtube_url'    =>@$data['youtube_url'],
            'instagram_url'  =>@$data['instagram_url'],
            'bbm'            =>@$data['bbm'],
            'line'           =>@$data['line'],
            'whatsapp'       =>@$data['whatsapp'],
            'telegram'       =>@$data['telegram'],
            'messenger'      =>@$data['messenger'],
            );
      
        $menu = array(
            'primary_menu' => $this->primary_menu($this->company_id),
            );
      
        $addons = array(
            'header_script'   => @base64_decode(@$data['header_script']),
            'footer_script'   => @base64_decode(@$data['footer_script']),
            'chatpop_status'  => @$data['chatpop_status'],
            'chatpop_picture' => @$data['chatpop_picture'],
            'chatpop_name'    => @$data['chatpop_name'],
            'chatpop_message' => @$data['chatpop_message'],
            );
      

        // Collecting Category beserta jumlah data dengan alias total
        $review = $this->db->query('SELECT *,(SELECT COUNT(*) FROM reviews WHERE reviews.company_id='.$this->company_id.') as total_post FROM reviews WHERE company_id='.$this->company_id)->result();
        $blogCategory = $this->db->query('SELECT *, (SELECT COUNT(*) FROM blog_post WHERE blog_post.company_id='.$this->company_id.' AND blog_post.category_id=blog_category.id) as total_post FROM blog_category WHERE company_id='.$this->company_id)->result();
        $productCategory = $this->db->query('SELECT *, (SELECT COUNT(*) FROM products WHERE products.company_id='.$this->company_id.' AND products.package_id=packages.id) as total_post FROM packages WHERE company_id='.$this->company_id)->result();
        $videoCategory = $this->db->query('SELECT *, (SELECT COUNT(*) FROM video_post WHERE video_post.company_id='.$this->company_id.' AND video_post.video_category_id=video_category.id) as total_post FROM video_category WHERE company_id='.$this->company_id)->result();
        $galleryCategory = $this->db->query('SELECT *, (SELECT COUNT(*) FROM galleries WHERE galleries.company_id='.$this->company_id.' AND galleries.category_id=gallery_category.id) as total_post FROM gallery_category WHERE company_id='.$this->company_id)->result();

        


        

        /* Preparing Data */
        $data = array(
            'web'              =>$web,
            'themecolor'       =>$themecolor,
            'company'          =>$company,
            'social'           =>$social,
            'menu'             =>$menu,
            'addon'            =>$addons,
            'google_maps'      =>@$data['google_maps'],
            'review'           =>$review,
            'category'         =>$productCategory,
            'blog_category'    =>$blogCategory,
            'video_category'   =>$videoCategory,
            'gallery_category' =>$galleryCategory,
            );
      


       
        // Return
        return $data;
    }

    public function sidebar_options($type = '', $item='', $company_id='',$related='')
    {
        //  beserta jumlah data dengan alias total
        $data = 'SELECT * FROM products WHERE company_id="'.$this->company_id.'" AND draft="0" ';
        if ($type == 'blog') {
            $data = 'SELECT * FROM blog_post WHERE company_id="'.$this->company_id.'" AND draft="0" ';
        }
        if ($type == 'video') {
            $data = 'SELECT * FROM video_post WHERE company_id="'.$this->company_id.'" AND draft="0" ';
        }
        if ($type == 'event') {
            $data = 'SELECT * FROM events WHERE company_id="'.$this->company_id.'" ';
        }
        if ($type == 'gallery') {
            $data = 'SELECT * FROM galleries WHERE company_id="'.$this->company_id.'" ';
        }
        /*List Post Category Criteria*/
        if ($item->data_widget == 'category-post' && $type == 'product') {
            $doSlug = $this->slug($item->criteria);
            $catId = $this->db->query('packages','WHERE company_id='.$this->company_id.' AND slug="'.$doSlug.'"');
            $catId = @$catId[0]->id;

            $data .= 'AND package_id ='. $catId.' ';
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
        return $this->db->query($data)->result();
    }

    // Slider 
    public function get_slider($company_id='')
    {
    $db = new db;
        // /* Get all SiteOption */
      $collectSiteOptions = $this->db->query('SELECT * FROM settings WHERE company_id='.$this->company_id)->result();
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

/* End of file MY_API.php */
/* Location: ./application/core/MY_API.php */