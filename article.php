<?php
class article {
    private $title;
    private $content;
    private $date_created;
    private $date_updated;
    
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
}
?>