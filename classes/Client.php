<?php
    require_once __DIR__ . '/Person.php';

    class Client extends Person {
        private $username;
        private $email;
        private $password;

        public function __construct($name, $surname, $username = "Utente" , $address, $email, $password, $age) {
            parent::__construct($name, $surname, $address, $age);
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }

        public function getDiscount($price) {
            if ($this->age >=60) {
                return $price = ($price * 20) / 100;
            }
        }
    }
?>