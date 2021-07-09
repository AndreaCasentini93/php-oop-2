<?php

    class Person {
        private $name;
        private $surname;
        private $address;
        private $fiscal_code;
        protected $age;

        public function __construct($name, $surname, $address, $age) {
            $this->name = $name;
            $this->surname = $surname;
            $this->address = $address;
            $this->age = $age;
        }

        public function setFiscalCode($fiscal_code) {
            $this->fiscal_code = $fiscal_code;
        }

        public function getFullName() {
            return $this->name . " " . $this->surname;
        }
    }

?>