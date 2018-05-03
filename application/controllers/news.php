<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function article()	{
		$this->load->model('article');
    $res = $this->article->getArticle();

		$data['title'] = 'News Article';
    $data['article'] = $res;
		$this->load->view('news/details_view', $data);
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
		$this->load->view('news/articles_view', $data);
  }
}
