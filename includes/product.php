<?php
    include('database.php');
    abstract class Product{
        private $product_id;
        private $sku;
        private $name;
        private $price;
        // private $attributes = array();
        protected $db;
        
        public function __construct($sku, $name, $price){
            $this->db = new Database();

            // $this->product_id = $product_id;
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
            // $this->attributes = $attributes;
        }

        // GETTERS AND SETTERS
        abstract function getAttributes();
        // public function setAttributes(array $attributes) {
        //     $this->attributes = $attributes;
        // }

        public function getProductId(){
            return $this->product_id;
        }

        public function setProductId($value){
            $this->product_id = $value;
        }

        public function getSku(){
            return $this->sku;
        }

        public function setSku($value){
            $this->sku = $value;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($value){
            $this->name = $value;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($value){
            $this->price = $value;
        }

        // ABSTRACT CLASS FOR ADDINGIND PRODUCT TO DATABASE
        abstract function addToDatabase();

    }
?>