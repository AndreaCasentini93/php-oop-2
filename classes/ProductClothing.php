<?php
    require_once __DIR__ . '/Product.php';

    class ProductClothing extends Product {
        private $color;
        private $size;
        private $season;

        public function __construct($name, $price, $image, $description = "", $vote = 0, $reviews_number = 0, $expedition_price = 0, $color = "", $size = "", $season = "") {
            parent::__construct($name, $price, $image, $description, $vote, $reviews_number, $expedition_price);
            $this->color = $color;
            $this->size = $size;
            $this->season = $season;
        }
    }

?>