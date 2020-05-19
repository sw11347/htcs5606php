<?php
if (isset($_POST["width"]))
{
    $w = $_POST["width"];
    $h = $_POST["height"];
    $a = calculate_area($w, $h);
    echo "Area: ".$a;
}else{
    echo "Go back to form page";
}
//isset means check if there is post data
function calculate_area ($width, $height){
    $area = $width * $height;
    return $area;
}