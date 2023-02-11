<?php

    class Dvd extends Product {
        protected $size;

        public function __construct($product_id, $sku, $name, $price, $size) {
            parent::__construct($sku, $name, $price);
            $this->setAttributes($size);
        }

        function getAttributes(){
            return $this->size;
        }

        function setAttributes($size){
            $this->size = $size;
        }

        // // ADD DVD PRODUCT TO DATABASE 
        public function addToDatabase(){
            
        }

    }
?>