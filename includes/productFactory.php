<?php
include('product.php');

class ProductFactory{
    public static function create($type, $sku, $name, $price, $data)
    {
        switch ($type) {
            case 'DVD':
                return new DVD($sku, $name, $price, $data['size']);
                break;
            case 'Book':
                return new Book($sku, $name, $price, $data['weight']);
                break;
            case 'Furniture':
                return new Furniture($sku, $name, $price, $data['height'], $data['width'], $data['length']);
                break;
            default:
                throw new Exception("Invalid product type");
        }
    }
}

?>