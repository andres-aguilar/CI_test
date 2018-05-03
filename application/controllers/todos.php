<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todos extends CI_Controller {

	public function index()	{
		$data['title'] = 'TODO';
		$this->load->view('todos/todo_view', $data);
	}
}
