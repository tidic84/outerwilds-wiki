<?php
    class User {
        private $username;
        private $password;
        private $email;
        private $date_created;
        private $date_updated;
        private $history;
        private $admin;
        private $picture;
        
        public function __construct($username, $password, $email, $admin, $picture) {
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->date_created = date('Y-m-d H:i:s');
            $this->date_updated = date('Y-m-d H:i:s');
            $this->history = array();
            $this->admin = $admin ? true : false;
            $this->picture = $picture;
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