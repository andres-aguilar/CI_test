<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()	{
		$data['title'] = 'Nuestro contenido:';

		$this->layout->view("index_view", $data);
	}
}
