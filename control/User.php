<?php

class user {
    private $name;
    private $email;
    private $admin;
    private $date_created;

    public function __construct($name, $email, $admin) {
        $this->name = $name;
        $this->email = $email;
        $this->admin = $admin;
        $this->date_created = date('Y-m-d H:i:s');
    }
}

?>