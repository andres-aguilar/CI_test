<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todos extends CI_Controller {

	private $error = array('message' => 'error');
  private $ok = array('message' => 'OK');

	private function message($msg) {
  /* Return a JSON message

     Params
        $msg : Array with a message to encode as a JSON response
  */
		$this->output->set_content_type('application/json')
								 ->set_output(json_encode($msg));
	}

	public function index()	{
		$data['title'] = 'TODO';
		$this->load->view('todos/todo_view', $data);
	}

	public function registerTask() {
		// $msg = $this->input->post() ? $this->ok : $this->error;
		// $this->message($msg);

		if ($this->input->post()) {
			$title   = $this->input->post("title", true);
			$id      = $this->input->post("id", true);
			$comment = $this->input->post("comment", true);

			$this->message(array("id"=>$id, "title"=>$title, "comment"=>$comment));
		} else {
			$this->message($this->error);
		}
	}
}
