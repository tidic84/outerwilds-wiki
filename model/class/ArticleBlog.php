<?php namespace blog;
    require_once 'model/class/Article.php';
    class Article extends \Article {
        private $abstract;
        private $tags;
        private $category;
        private $author;
        private $banner;

        public function __construct($title, $content, $abstract, $tags, $category, $author, $banner) {
            parent::__construct($title, $content);
            $this->abstract = $abstract;
            $this->tags = $tags;
            $this->category = $category;
            $this->author = $author;
            $this->banner = $banner;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }
    }
?>