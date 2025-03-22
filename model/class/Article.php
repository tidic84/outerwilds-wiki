<?php
class Article {
    private $title;
    private $content;
    private $date_created;
    private $date_updated;
    private $history;
    
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->date_created = date('Y-m-d H:i:s');
        $this->date_updated = date('Y-m-d H:i:s');
        $this->history = array();
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
?>