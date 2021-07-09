<?php
    require_once __DIR__ . '/Person.php';

    class Client extends Person {
        private $username;
        private $email;

        public function __construct($name, $surname, $username = "Utente" , $address, $email, $age = "") {
            parent::__construct($name, $surname, $address, $age = "");
            $this->username = $username;
            $this->email = $email;
        }
    }

?>