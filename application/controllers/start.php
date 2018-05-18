<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()	{
		$data['title'] = 'Nuestro contenido:';

		$this->layout->view("index_view", $data);
	}

	public function upload() {
		$this->load->helper(array('form', 'url'));

		$data['error'] = '';
		$data['upload_data'] = array();

		$this->load->view('start/upload', $data);
	}

	function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10024';
		$config['max_height']  = '7068';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('start/upload', $error);
		} else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('start/upload', $data);
		}
	}
}
