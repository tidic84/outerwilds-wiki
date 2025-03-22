<?php
    class History {
        private $date;
        private $action;
        private $title;
        private $user;
        
        public function __construct($date, $action, $title, $user) {
            $this->date = $date;
            $this->action = $action;
            $this->title = $title;
            $this->user = $user;
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