<?php

    class Product {
        private $name;
        private $description;
        private $vote;
        private $price;
        private $expedition_price;

        public function __construct($name, $description = "", $vote = 0, $price, $expedition_price = 0) {
            $this->name = $name;
            $this->description = $description;
            $this->vote = $vote;
            $this->price = $price;
            $this->expedition_price = $expedition_price;
        }
    }

?>