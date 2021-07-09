<?php

    class Person {
        private $name;
        private $surname;
        private $address;
        private $age;
        private $fiscal_code;

        public function __construct($name, $surname, $address, $age = "", $fiscal_code = "") {
            $this->name = $name;
            $this->surname = $surname;
            $this->address = $address;
            $this->age = $age;
            $this->fiscal_code = $fiscal_code;
        }

        public function getFullName() {
            return $this->name . $this->surname;
        }
    }

?>