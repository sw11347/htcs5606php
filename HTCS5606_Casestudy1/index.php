<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon Assessment 1 Home page</title>
    <link rel="stylesheet" href="CSS/index_style.css">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>


</head>
<body onload="move_logo">
<!--This is the header that holds the logo and logo animation-->
<?php
include_once "header.php";
?>

<div id="main">
    <table id = "main_table">
        <tr>
            <td id="middle_content">
    <h2>Welcome to Pet Foods Online Store!</h2>
            <h2 id="index_product_heading">Popular purchases</h2>
<!--                Below are all the products and prices-->
            <div class="product_div">
                <img class="product" src="IMG/dogfood.png"/>
                <p>$6.50</p>
                <p>Select Quantity:<input class="quantity" type="number" id="dog_food_quantity"/></p>
                <p><button class="add_button" id="add_dog_food" onclick="add_to_cart(this)">Buy</button></p>
            </div>
              <div class="product_div">
                  <img class="product" src="IMG/horsesaddle.jpg"/>
                  <p>$49.99</p>
                  <p>Select Quantity:<input class="quantity" type="number" id="saddle_quantity"/></p>
                  <p><button class="add_button" id="add_saddle" onclick="add_to_cart(this)">Buy</button> </p>
              </div>
            <div class="product_div">
                <img class="product" src="IMG/pettoypack.jpg"/>
                <p>$14.99</p>
                <p>Select Quantity:<input class="quantity" type="number" id="toys_quantity"/></p>
                <p><button class="add_button" id="add_toys" onclick="add_to_cart(this)">Buy</button></p>
            </div>
            </td>
<!--            Add to cart section of the page-->
            <td id="right_content">
                <p>Cart</p>
                <div id="cart_div"></div>
                <p></p>
                <button id="show_invoice_button" onclick="invoice()">Invoice</button>
            </td>
        </tr>
    </table>
</div>
<div id="invoice_page" class="invoice">

    <!-- Modal content -->
    <div id="invoice_content">
        <span class="close">&times;</span>
        <p>Your invoice</p>
    </div>

</div>

<!--Footer that contains contact information of Pet Foods-->
<?php
include_once "footer.php";
?>

</body>
</html>