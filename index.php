<?php
include_once('includes/product.php');
include_once('includes/dvd.php');
include_once('includes/book.php');
include_once('includes/furniture.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Product List</h2>

                    <div class="headerBtns">
                        <button type="button" class="btn btn-primary">Add</button>
                        <button type="button" id="delete-product-btn" class="btn btn-primary">Mass Delete</button>
                    </div>
                </div>
                <hr className="my-2" />
            </div>
        </div>


        <?php
        $p1 = new Dvd(12, 23, "Product1", 23.44, 700);
        echo "Product ID: " . $p1->getProductId() . "<br>";
        echo "SKU: " . $p1->getSku() . "<br>";
        echo "Name: " . $p1->getName() . "<br>";
        echo "Price: " . $p1->getPrice() . "<br>";
        echo "Attributes: " . $p1->getAttributes() . "<br><br>";


        echo "". $p1->getProductId() . " " . $p1->getSku() . " " . $p1->getName() . " " . $p1->getPrice() . " " . $p1->getAttributes() . "<br> ";


        // $p1->addToDatabase();
        ?>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="" async defer></script>
    </body>
</html>