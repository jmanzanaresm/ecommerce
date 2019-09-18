<?php

require('db.php');

class Users {

    private $db = NULL;
    
    function __construct() {
        $this->db = get_db();
    }

    public function list() {
        return $this->db->getReference('users')->getValue();
    }

    public function create(string $name, string $email, string $password) {
        $this->db->getReference('users')
        ->push([
            'name' => $name,
            'email' => $email,
            'password' => $password
            ]);

    }
}
