<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function article()	{
    $data['title'] = 'Article';
		$this->load->view('details_view', $data);
	}

  public function all() {
    $data['title'] = 'News';
		$this->load->view('index_view', $data);
  }

  public function index() {
    $this->load->model('article');

    $articles = $this->article->getArticles();

    $data['title'] = 'News';
    $data['articles'] = $articles;
		$this->load->view('articles_view', $data);
  }
}
