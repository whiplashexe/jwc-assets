<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/core/MY_API.php';
class Mail extends MY_API {

    protected $mail_config;

    public function __construct()
    {
        parent::__construct();
		//Load Dependencies
		$this->load->model('Model');
		$this->load->library('Mathcaptcha');
      $this->mathcaptcha->init();

	}

    public function hello(){
        echo"its work!";
        }

    public function check_captcha($input='')
    {
        if($this->mathcaptcha->check_answer($input->captcha)){
        	return true;
        }else{
        	return false;
        }
    }

	// cURL Post
	public function postServer($url='',$count='',$fields_string='')
	{
		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, $count);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

		//execute post
		$response = curl_exec($ch);

		//close connection
		curl_close($ch);

		return $response;
	}

	// Booking
	public function index()
	{
		$input = (object) $this->input->post(NULL);

		if($this->check_captcha($input)){
			// Send it to Server DB
			$url_server = str_replace('api/', '', URL_API);
			$store_booking =URL_API.'booking';
			$mail_booking = 'https://cpanel.gotrasoft.com/mail/booking';
			$company_id = $this->Model->get_companyID();
			$data = array();
			foreach ($input as $key => $value) {
				$data[$key] = $value;
			}
			$mix = array('company_id'=>$company_id,'web'=>base_url());
			$result = $this->Model->mix($data,$mix);
			$fields_string = '';
			$count = count($result);
			$no = 1;
			//url-ify the data for the POST
			foreach($result as $key=>$value) {
				$fields_string .= $key.'='.$value;
				if($no < $count){
					$fields_string .= '&';
				}
				$no++;
			 }

			$this->postServer($mail_booking,$count,$fields_string); // Send via Mail
			$this->session->set_flashdata('status','Request sent successfully!');
			$this->session->set_flashdata('mail_sent',true);
			echo "Success";

		}else{
			$this->session->set_flashdata('status','Please fill the Answer Correctly.');
			$this->session->set_flashdata('mail_sent',false);
			echo "Failed";
		}



		 // Check Recaptcha
		 // if (GR_SECRET_KEY != '') {
		 	# code...
			// $dataString = "secret=".GR_SECRET_KEY."&response=".$this->input->post('g-recaptcha-response');
			// $human = json_decode($this->postServer("https://www.google.com/recaptcha/api/siteverify",2,$dataString));
			// if ($human->success == true) {
				//$this->postServer($store_booking,$count,$fields_string); // store to DB
				// $this->postServer($mail_booking,$count,$fields_string); // Send via Mail
				// $this->session->set_flashdata('status','Request sent successfully!');
				// $this->session->set_flashdata('mail_sent',true);
				// echo "Success";
			// }else{
			// 	$this->session->set_flashdata('status','Please fill the captcha.');
			// 	$this->session->set_flashdata('mail_sent',false);
			// 	echo "Failed";
			// }
		 // }else{
		 	//$this->postServer($store_booking,$count,$fields_string); // store to DB
			// $this->postServer($mail_booking,$count,$fields_string); // Send via Mail
			// $this->session->set_flashdata('status','Request sent successfully!');
			// $this->session->set_flashdata('mail_sent',true);
			// echo "Success";
		 // }
		return redirect($input->link.'#booknow','refresh');
	}

	// send email from contact page
	public function contact()
	{
		$input = (object) $this->input->post(NULL);
        

		if($this->check_captcha($input)){
			// Send it to Server DB
			$url_server = str_replace('api/', '', URL_API);
			$mail_contact = 'https://cpanel.gotrasoft.com/mail/contact';
			$company_id = $this->Model->get_companyID();
			$data = array();
			foreach ($input as $key => $value) {
				$data[$key] = $value;
			}
			$mix = array('company_id'=>$company_id,'web'=>base_url());
			$result = $this->Model->mix($data,$mix);
			$fields_string = '';
			$count = count($result);
			$no = 1;
			//url-ify the data for the POST
			foreach($result as $key=>$value) {
				$fields_string .= $key.'='.$value;
				if($no < $count){
					$fields_string .= '&';
				}
				$no++;
			 }
          var_dump($fields_string);
        echo"its work!";
      exit;
			 $this->postServer($mail_contact,$count,$fields_string); // Send via Mail
			$this->session->set_flashdata('status','Message sent successfully!');
			$this->session->set_flashdata('mail_sent',true);
			echo "Success";
		}else{
			$this->session->set_flashdata('mail_sent',false);
			$this->session->set_flashdata('status','Please fill the Answer Correctly.');
			echo "Failed";
		}



		 // Check Recaptcha
		// if (GR_SECRET_KEY != '') {
		// 	$dataString = "secret=".GR_SECRET_KEY."&response=".$this->input->post('g-recaptcha-response');
		// 	$human = json_decode($this->postServer("https://www.google.com/recaptcha/api/siteverify",2,$dataString));
		// 	if ($human->success == true) {
		// 		$this->postServer($mail_contact,$count,$fields_string); // Send via Mail
		// 		$this->session->set_flashdata('status','Message sent successfully!');
		// 		$this->session->set_flashdata('mail_sent',true);
		// 		echo "Success";
		// 	}else{
		// 		$this->session->set_flashdata('mail_sent',false);
		// 		$this->session->set_flashdata('status','Please fill the captcha.');
		// 		echo "Failed";
		// 	}
		// }else{
		// 	$this->postServer($mail_contact,$count,$fields_string); // Send via Mail
		// 	$this->session->set_flashdata('status','Message sent successfully!');
		// 	$this->session->set_flashdata('mail_sent',true);
		// 	echo "Success";
		// }
		$redirect_page = (isset($input->redirect_page) || @$input->redirect_page != '')? @$input->redirect_page : 'contact' ;
		//return redirect(base_url($redirect_page),'refresh');
	}
}

/* End of file Mail.php */
/* Location: ./application/controllers/Mail.php */
