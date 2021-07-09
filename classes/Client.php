<?php
    require_once __DIR__ . '/Person.php';

    class Client extends Person {
        private $username;
        private $email;
        private $password;
        private $credit_card;

        public function __construct($name, $surname, $username = "Utente" , $address, $email, $password, $age) {
            parent::__construct($name, $surname, $address, $age);
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }

        public function getDiscount($price) {
            if ($this->age >= 60) {
                return round($price = ($price * 25) / 100, 2);
            } elseif($this->age < 18) {
                return round($price = ($price * 10) / 100, 2);
            } else {
                return round($price, 2);
            }
        }

        public function setCreditCard($code) {
            if ($code != "") {
                $this->credit_card = $code;
            }
        }
    }
?>