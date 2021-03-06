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
    <script src="JS/pet_foods_script.js"></script>

</head>
<body onload="move_logo">
<!--This is the header that holds the logo and logo animation-->
<?php
include_once "header.php";
?>

<div id="main">
    <table id="main_table">
        <tr>
            <td id="middle_content">
                <h2>Welcome to Pet Foods Online Store!</h2>
                <h2 id="index_product_heading">Popular purchases</h2>
                <!--                Below are all the products and prices-->
                <?php


                $products = $user->show_all_products();

                $i = 0;
                while ($i < sizeof($products)) {
                    $product = $products[$i];
                    ?>

                    <div class="product_div">
                        <img class="product" src="IMG/<?php echo $product->picture; ?>"/>
                        <p> $<?php echo $product->price; ?></p>
                        Select Quantity:<input placeholder="qty" type="number"/>
                        <br>
                        <button name="<?php echo $product->name; ?>"
                                price="<?php echo $product->price; ?>"
                                onclick="add_to_cart(this)">Add to cart
                        </button>
                    </div>
                    <?php
                    $i = $i + 1;
                }
                ?>
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

<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="invoicePlace">Invoice</div>
    </div>


</div>

<!--Footer that contains contact information of Pet Foods-->
<?php
include_once "footer.php";
?>

</body>
</html>