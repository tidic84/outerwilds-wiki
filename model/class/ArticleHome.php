<?php namespace home;
    require_once 'model/class/Article.php';
    class Article extends \Article {
        private $planet;
        public function __construct($title, $content, $planet) {
            parent::__construct($title, $content);
            $this->planet = $planet;
        }

    }
?>