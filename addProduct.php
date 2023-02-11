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
        <!-- LOCAL STYLE -->
        <link rel="stylesheet" href="style.css">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Product Add</h2>

                    <div class="headerBtns">
                        <button type="button" class="btn btn-primary" id="save">Save</button>
                        <button type="button" id="delete-product-btn" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
                <hr className="my-2" />
            </div>
        </div>

        <div class="main">
            <div class="container">

                <form id="product_form">
                    <div>
                        <label for="sku">SKU:</label>
                        <input type="text" id="sku" name="sku">
                    </div>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div>
                        <label for="price">Price ($):</label>
                        <input type="text" id="price" name="price">
                    </div>
                    <div>
                        <label for="productType">Type switcher:</label>
                        <select id="productType" name="productType" placeholder="Type switcher">
                            <option>Type switcher</option>
                            <option value="DVD">DVD</option>
                            <option value="Book">Book</option>
                            <option value="Furniture">Furniture</option>
                        </select>
                    </div>
                    <div id="dvdAttributes">
                        <label for="size">Size (MB):</label>
                        <input type="text" id="size" name="size"><br>
                        <span>Please, provide size</span>
                    </div>
                    <div id="bookAttributes">
                        <label for="weight">Weight (KG):</label>
                        <input type="text" id="weight" name="weight"><br>
                        <span>Please, provide weight</span>
                    </div>
                        
                    <div id="furnitureAttributes">
                        <div>
                            <label for="height">Height (CM):</label>
                            <input type="text" id="height" name="height">
                        </div>
                        <div>
                            <label for="width">Width (CM):</label>
                            <input type="text" id="width" name="width">
                        </div>
                        <div>
                            <label for="length">Length (CM):</label>
                            <input type="text" id="length" name="length">
                        </div>
                        <span>Please, provide dimensions</span>
                    </div>
                </form>

            </div>
        </div>

        <?php
        $b1 = new Book(123, 233, "aaa", 1234, 800);

        $b1->addToDatabase();
        ?>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $("#productType").change(function() {
                    var selected = $(this).children("option:selected").val();
                    if (selected == "DVD") {
                        $("#dvdAttributes").show();
                        $("#bookAttributes").hide();
                        $("#furnitureAttributes").hide();
                    } else if (selected == "Book") {
                        $("#dvdAttributes").hide();
                        $("#bookAttributes").show();
                        $("#furnitureAttributes").hide();
                    } else if (selected == "Furniture") {
                        $("#dvdAttributes").hide();
                        $("#bookAttributes").hide();
                        $("#furnitureAttributes").show();
                    } else if (selected == "Type switcher"){
                        $("#dvdAttributes").hide();
                        $("#bookAttributes").hide();
                        $("#furnitureAttributes").hide();
                    }  
                });

                const form = document.getElementById("product_form");
                const submitButton = document.getElementById("save");

                submitButton.addEventListener("click", function() {
                    form.submit();

                
                })
            });
        </script>
    </body>
</html>