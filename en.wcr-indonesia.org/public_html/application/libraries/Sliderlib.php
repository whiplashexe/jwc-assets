<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 

class Sliderlib{

	public function get()
	{
		$CI =& get_instance();
		$result = array();
		$no = 1;
		for ($i=0; $i < 10; $i++) { 
			$a = $i+1;
			if ($CI->Setting->get('slider_img_'.$a) != '' || $CI->Setting->get('slider_img_'.$a) != NULL) {
				$result[$no] = (object)array(
				'img'=>$CI->Setting->get('slider_img_'.$a),
				'title'=>$CI->Setting->get('slider_title_'.$a),
				'text'=>$CI->Setting->get('slider_text_'.$a),
				'text_url'=>$CI->Setting->get('slider_text_url_'.$a),
				'url'=>$CI->Setting->get('slider_url_'.$a),
				);
				$no++;
			}
		}
		return $result;
		// $result = (object)array($slider1,$slider2,$slider3,$slider4,$slider5);
	}

	public function get_front($company_id)
	{
		$CI =& get_instance();
		$result = array();
		$no = 1;
		for ($i=0; $i < 10; $i++) { 
			$a = $i+1;
			if ($CI->Setting->get_front('slider_img_'.$a, $company_id) != '' || $CI->Setting->get_front('slider_img_'.$a, $company_id) != NULL) {
				$result[$no] = (object)array(
				'img'=>$CI->Setting->get_front('slider_img_'.$a, $company_id),
				'title'=>$CI->Setting->get_front('slider_title_'.$a, $company_id),
				'text'=>$CI->Setting->get_front('slider_text_'.$a, $company_id),
				'text_url'=>$CI->Setting->get_front('slider_text_url_'.$a, $company_id),
				'url'=>$CI->Setting->get_front('slider_url_'.$a, $company_id),
				);
				$no++;
			}
		}
		return $result;
		// $result = (object)array($slider1,$slider2,$slider3,$slider4,$slider5);
	}
}