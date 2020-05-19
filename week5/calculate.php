<?php
if (isset($_POST["width"]))
{
    $w = $_POST["width"];
    $h = $_POST["height"];
    $area = $w * $h;
    echo "Area: ".$area;
}else{
    echo "Go back to form page";
}
//isset means check if there is post data
