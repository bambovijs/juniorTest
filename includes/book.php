<?php
    class Book extends Product {
        private $weight;

        public function __construct($product_id, $sku, $name, $price, $weight) {
            parent::__construct($sku, $name, $price);
            $this->setAttributes($weight);
        }

        // GETTERS AND SETTERS
        public function getAttributes(){
            return $this->weight;
        }

        public function setAttributes($weight){
            $this->weight = $weight;
        }

        // ADDING PRODUCT TO DATABASE
        public function addToDatabase(){
            try {
                $conn = $this->db->getConnetion();
                $conn->beginTransaction();
                $query = $conn->prepare("INSERT INTO products (sku, name, price) VALUES (?, ?, ?)");
                $query->execute(array($this->getSku(), $this->getName(), $this->getPrice()));
                $product_id = $conn->lastInsertId();
        
                $weight_query = $conn->prepare("INSERT INTO weights (product_id, value) VALUES (?, ?)");
                $weight_query->execute(array($product_id, $this->getAttributes()));
                $conn->commit();
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                $conn->rollBack();
            }
        }
    }
?>  