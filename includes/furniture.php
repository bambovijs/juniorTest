<?php 
    class Furniture extends Product {
        private $height;
        private $width;
        private $length;
    // private $attributes = array();

        public function __construct($sku, $name, $price, $height, $width, $length) {
            parent::__construct($sku, $name, $price);
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
        }

        // GETTERS AND SETTERS

        function getAttributes(){
            return array($this->height, $this->width, $this->length);
        }

        function setAttributes(array $attributes){
            $this->height = $attributes[0];
            $this->width = $attributes[1];
            $this->length = $attributes[2];
        }

        // ADDING FURNITURE PRODUCT TO DATABASE 
        public function addToDatabase(){

        }
    }
?>