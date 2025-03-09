<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
XFunc Integrated to CI_Loader
*/
class MY_Loader extends CI_Loader
{
	public function partial($file, $data = '')
    {
        return $this->view('front/partials/'.$file, $data);
    }
    public function content($file = '', $data = '')
    {
        return $this->view('front/'.$file, $data);
    }
    public function mix($arr1 = '', $arr2 = '')
    {
        return array_merge($arr1, $arr2);
    }
    public function filtering($data = '')
    {
        if ($data == null) {
            return true;

        }
    }
    public function filter_uri(&$str)
    {
        if ( ! empty($str) && ! empty($this->_permitted_uri_chars) && ! preg_match('/^['.$this->_permitted_uri_chars.']+$/i'.(UTF8_ENABLED ? 'u' : ''), $str))
        {
            return preg_replace('~[^a-zA-Z 0-9%.:_\-,()]+~', '', $str);
        }
    }
    public function costum_filter_uri($data = '')
    {
        $filter = $this->filter_uri($data);
        if ($filter != null) {
            return true;
        }
    }

    public function filter_complex($data='',$uri_filter='')
    {
        if ($this->filtering($data) == true || $this->costum_filter_uri($uri_filter) == true) {
            return true;
        }else{
            return false;
        }
    }

	

}

/* End of file Xfunc.php */
/* Location: ./application/core/Xfunc.php */
