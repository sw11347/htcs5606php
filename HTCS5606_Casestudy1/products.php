<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dog</title>
    <link rel="stylesheet" href="CSS/index_style.css">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

    <script src="JS/pet_foods_script.js"></script>

</head>
<body>
<?php
include_once "header.php";
?>
<div id="main">
    <h1> <?php
    $categoryID = $_GET["categoryID"];
    echo $user->show_category_name($categoryID);
    ?></h1>
    <table id = "main_table">
        <tr>
            <td id="middle_content">



                <?php


                $products = $user->show_products_by_category($categoryID);
                print_r($products);
                $i = 0;
                while ($i<sizeof($products)){
                    $product = $products[$i];
                    ?>

                    <div class="product_div">
                        <img class="product" src="IMG/<?php echo $product->picture; ?>"/>
                        <p> $<?php echo $product->price; ?></p>
                       Select Quantity:<input placeholder="qty" type="number"/>
                        <br>
                        <button name="<?php echo $product->name; ?>"
                                   price="<?php $product->price?>"
                                   onclick="add_to_cart(this)">Add to cart</button>
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
