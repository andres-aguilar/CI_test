<?php

/**
 * Article model
 */
class Article extends CI_Model {

  public $articles = array('primero' => "Primer articulo", 'segundo' => "Segundo articulo" );

  public function getArticle($value=1) {
    return $this->articles[$value];
  }

  public function getArticles() {
    return  $this->articles;
  }
}
