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
                <h2>Dog Products</h2>

                <div class="product_div">
                    <img class="product" src="IMG/dogfood.png"/>
                    <p>$6.50</p>
                    <p>Select Quantity:<input class="quantity" type="number" id="dog_food_quantity"/></p>
                    <p><button class="add_button" id="add_dog_food" onclick="add_to_cart(this)">Buy</button></p>
                </div>
                <div class="product_div">
                    <img class="product" src="IMG/dogmeat.png" height="512" width="512"/>
                    <p>$10.00</p>
                    <p>Select Quantity:<input class="quantity" type="number" id="dog_meat_quantity"/></p>
                    <p><button class="add_button" id="add_dog_meat" onclick="add_to_cart(this)">Buy</button> </p>
                </div>
                <div class="product_div">
                    <img class="product" src="IMG/pettoypack.jpg" height="822" width="822"/>
                    <p>14.99</p>
                    <p>Select Quantity:<input class="quantity" type="number" id="pet_toys_quantity"/></p>
                    <p><button class="add_button" id="add_toys" onclick="add_to_cart(this)">Buy</button> </p>
                </div>

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
