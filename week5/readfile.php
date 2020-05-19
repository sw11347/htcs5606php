<?php
$file = fopen("hellow_world.txt", 'r');
while(!feof()){
    echo fgets($file)."<br>";
}
fclose($file);