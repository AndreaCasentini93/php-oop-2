<?php

    class Product {
        public $name;
        public $price;
        public $description;
        public $vote;
        public $expedition_price;

        public function __construct($name, $price, $description = "", $vote = 0, $expedition_price = 0) {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->vote = $vote;
            $this->expedition_price = $expedition_price;
        }
    }

?>