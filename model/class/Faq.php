<?php
    class Faq {
        private $question;
        private $answer;
        private $date_created;
        private $date_updated;
        
        public function __construct($question, $answer) {
            $this->question = $question;
            $this->answer = $answer;
            $this->date_created = date('Y-m-d H:i:s');
            $this->date_updated = date('Y-m-d H:i:s');
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