<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Model extends CI_Model

{
    protected $api = URL_API;
    // protected $api = 'http://localhost/JWC/Web_Engine/admin/api/';
    protected $code = '?company_id=1';
    public function __construct()
    {
        parent::__construct();
        $base_api = '?company_id=';
        $id = COMPANY_ID;
        $this->session->set_userdata(array('company_id'=>$id));
        $this->code = $base_api.$id;
    }
    public function get_companyID()
    {
        return COMPANY_ID;
    }
    public function mix($arr1 = '', $arr2 = '')
    {
        return array_merge($arr1, $arr2);
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
        if (curl_errno($ch)) { 
           print curl_error($ch); 
        } 
        curl_close($ch);
        return json_decode($result, true);
    }

    public function pushData($url){
        $resource = $this->read($url);
        return json_decode (json_encode ($resource), FALSE);
    }

    public function get_home()
    {

        return $this->pushData($this->api.'index'.$this->code);

    }    

    public function get_page($action)
    {

        return $this->pushData($this->api.'page/'.$action.$this->code);

    }

    public function get_view($action)
    {

        return $this->pushData($this->api.'view/'.$action.$this->code);

    }

    public function get_category($action, $page = '')

    {

        return $this->pushData($this->api.'category/'.$action.$this->code.'&page='.$page);

    }

    public function get_tag($action, $page = '')

    {

        return $this->pushData($this->api.'tag/'.$action.$this->code.'&page='.$page);

    }

    public function get_search($type='',$key='', $page = '')
    {

        return $this->pushData($this->api.'search/'.$type.$this->code.'&q='.$key.'&page='.$page);

    }

    public function get_gallery($action, $page='')
    {
        return $this->pushData($this->api.'gallery/'.$action.$this->code.'&page='.$page);

    }
    public function get_gallery_tag($action, $page = '')
    {
        return $this->pushData($this->api.'gallery_tag/'.$action.$this->code.'&page='.$page);

    }
    public function get_gallery_view($action='')
    {
        return $this->pushData($this->api.'gallery_view/'.$action.$this->code);
    }
    public function get_contact()

    {

        return $this->pushData($this->api.'contact'.$this->code);

    }

    public function get_blog_post()

    {

        return $this->pushData($this->api.'blog_post'.$this->code);

    }

    public function get_blog_category($action, $page = '')

    {

        return $this->pushData($this->api.'blog_category/'.$action.$this->code.'&page='.$page);

    }

    public function get_blog_tag($action, $page = '')

    {

        return $this->pushData($this->api.'blog_tag/'.$action.$this->code.'&page='.$page);

    }

    public function get_blog_view($action)

    {

        return $this->pushData($this->api.'blog_post/'.$action.$this->code);

    }

    public function get_blog_search($action, $page = '')

    {

        return $this->pushData($this->api.'blog_search/'.$action.$this->code.'&page='.$page);

    }
    
    public function get_page_notfound()

    {

        return $this->pushData($this->api.'notfound'.$this->code);

    }

    // Video

    public function get_video_category($action, $page = '')

    {

        return $this->pushData($this->api.'video_category/'.$action.$this->code.'&page='.$page);

    }

    public function get_video_tag($action, $page = '')

    {

        return $this->pushData($this->api.'video_tag/'.$action.$this->code.'&page='.$page);

    }

    public function get_video_view($action)

    {

        return $this->pushData($this->api.'video_post/'.$action.$this->code);

    }

    public function get_events($page='')
    {

       return $this->pushData($this->api.'event/'.$this->code.'&page='.$page);

    }

    public function get_event_view($action)
    {

        return $this->pushData($this->api.'event_post/'.$action.$this->code);

    }

}



/* End of file Model.php */

/* Location: ./application/models/Model.php */

