<?php
$res = $_POST["mark"];
if($res > 100 || $res < 0) {
    echo "Wrong Input";
}
elseif ($res > 90){
    echo "A";
}
elseif ($res > 80){
    echo "B";
}
elseif ($res >=50){
    echo "C";
}elseif ($res <50){
    echo "D";
}