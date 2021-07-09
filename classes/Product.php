<?php

    class Product {
        private $name;
        private $price;
        private $description;
        private $vote;
        private $expedition_price;

        public function __construct($name, $price, $description = "", $vote = 0, $expedition_price = 0) {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->vote = $vote;
            $this->expedition_price = $expedition_price;
        }
    }

    $product = new Product("Maglietta", 13);
    var_dump($product)

?>