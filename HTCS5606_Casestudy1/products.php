<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dog</title>
    <link rel="stylesheet" href="CSS/index_style.css">
    <script src="JS/pet_foods_script.js"></script>
</head>
<body>
<?php
include_once "header.php";
?>
<div id="main">
    <table id = "main_table">
        <tr>
            <td id="middle_content">



                <?php

                $categoryID = $_GET["categoryID"];
                echo $user->show_category_name($categoryID);
                $products = $user->show_products_by_category($categoryID);
                $i = 0;
                while ($i<sizeof($products)){
                    $product = $products[$i];
                    ?>

                    <div class="product_div">
                        <img class="product" src="IMG/<?php echo $product->picture; ?>"/>
                        <p> $<?php echo $product->price; ?></p>
                        <p>Select Quantity:<input class="quantity" type="number" id="dog_food_quantity"/></p>
                        <p><button class="add_button" id="add_dog_food" onclick="add_to_cart(this)">Buy</button></p>
                    </div>
                    <?php
                    $i = $i + 1;
                }
                ?>
            </td>
            <td id="right_content">
                <p>Cart</p>
                <div id="cart_div"></div>
                <p>
                </p>
                <button id="show_invoice_button">Invoice</button>
            </td>
        </tr>
    </table>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
