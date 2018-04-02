<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()	{
		$data['title'] = 'Index';
		$this->load->view('index_view', $data);
	}
}
