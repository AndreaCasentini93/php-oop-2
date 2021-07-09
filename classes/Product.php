<?php
    class Product {
        private $name;
        private $price;
        private $image;
        private $description;
        private $vote;
        private $reviews_number;
        private $expedition_price;

        public function __construct($name, $price, $image, $description = "", $vote = 0, $reviews_number = 0, $expedition_price = 0) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description;
            $this->vote = $vote;
            $this->reviews_number = $reviews_number;
            $this->expedition_price = $expedition_price;
        }

        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getImage() {
            return $this->image;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getVote() {
            return $this->vote;
        }
        public function getReviewsNumber() {
            return $this->reviews_number;
        }
        public function getExpeditionPrice() {
            return $this->expedition_price;
        }
    }

?>