<?php

/**
 * Article model
 */
class Article extends CI_Model {

  public $articles = array('primero' => "Primer articulo", 'segundo' => "Segundo articulo" );

  public function getArticle($value=1) {
    $query = $this->db->get_where('news', array('id' => $value));
    return $query->row_array();
  }

  public function getArticles() {
    $query = $this->db->get('news');
    return  $query->result_array();
  }
}
