<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $dataView;

	public function __construct()
	{
		parent::__construct();
        //Load Dependencies
        $this->load->model('Model');
        $this->load->library('Xview');
        $this->load->library('mathcaptcha');
        $this->mathcaptcha->init();
        // Insert Theme Function to $dataView
        $this->dataView['func'] = $this->xview;
        // Current Thumb for Meta Tags
        $this->dataView['current_img'] = null;
	}

    public function setGlobal($data='')
    {
       $GLOBALS['API_RESULT'] = $data;
    }

	public function ifNotFound($data='',$url='')
    {
        if ($this->load->filter_complex($data,$url)) {
            $this->page_notfound();
            return true;
        }
    }
    public function ifNotFound_single($data='')
    {
        if ($this->load->filtering($data) == true) {
            $this->page_notfound();
            return true;
        }
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
    

	

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
