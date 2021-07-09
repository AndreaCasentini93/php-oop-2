<?php
    require_once __DIR__ . '/Product.php';

    class ProductSport extends Product {
        private $weight;
        private $color;
        private $materials;

        public function __construct($name, $price, $image, $description = "", $vote = 0, $reviews_number = 0, $expedition_price = 0, $weight = "", $color = "", $materials = "") {
            parent::__construct($name, $price, $image, $description, $vote, $reviews_number, $expedition_price);
            $this->weight = $weight;
            $this->color = $color;
            $this->materials = $materials;
        }
    }

?>