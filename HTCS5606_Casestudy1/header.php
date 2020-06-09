<div id="header">

    <img id="logo" src="IMG/Pet%20Food.png" height="260" width="325" id="logo"/>
</div>
<!--Navigation bar-->
<div id="nav">

    <a href="index.php">Home</a>
<!--    <a href="dog.html">Dog Products</a>-->
<!--    <a href="cat.html">Cat Products</a>-->
<!--    <a href="horse.html">Horse Products</a>-->
    <?php
    include_once "class/User.php";
    $user = new User(null, "", "", "");
    $categories = $user->view_categories();
    $i = 0;
    while ($i < sizeof($categories)){
        $category = $categories[$i];
        echo "<li><a href='products.php?categoryID=".$category->id."'>".$category->name."</a></li>";
        $i = $i + 1;
    }
    ?>
    <a href="about_us.php">About Us</a>

</div>
