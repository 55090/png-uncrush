<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
		// $out=$this->pnguncrusher->decode_("uploads/Icon@2x.png", "uploads/out11.png");
		// print_r($out);
// $processor = new pnguncrusher("uploads/n.png");
		// $this->pnguncrusher->decode("uploads/n.png","uploads/n_new.png");
	}

	function generate_token()
	{
		$token = md5(uniqid() . microtime() . rand());
		return $token;
	}
	public function upload()
	{
		$upload_success = false;
		//============IMAGE HANDLER==========

		//image upload form
		//incase of an image

		if (!empty($_FILES["userfile"]['name'])) {
//uploaded a file

//file validation
			//image upload
			$config['upload_path'] = './uploads/';

			$config['allowed_types'] = 'png';
			$extension = '.' . end(explode(".", $_FILES["userfile"]["name"]));
			$fileName = $this->generate_token() . $extension;
			$config['file_name'] = $fileName;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile')) {
				$data = $this->upload->data();
				//upload success
				$upload_success = true;
			}
		}

		//image upload form
		//============IMAGE HANDLER==========

		if ($upload_success) {
			//add image to the db
		$this->pnguncrusher->decode("uploads/".$fileName,"results/".$fileName);
		$data['link']=base_url("results/".$fileName);
		$this->load->view('success',$data);

		}else{
			//upload failed

		$this->load->view('fail');

		}



	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */