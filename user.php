<?php

class user {
    private $name;
    private $email;
    private $admin;

    public function __construct($name, $email, $admin) {
        $this->name = $name;
        $this->email = $email;
        $this->admin = $admin;
    }
}

?>