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

        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getVote() {
            return $this->vote;
        }
        public function getExpeditionPrice() {
            return $this->expedition_price;
        }
    }

?>