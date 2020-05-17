<?php
    echo "hello world";
    echo "<h1>Hello in Heading</h1>";
    echo "<p>Hello in Paragraph</p>";
    echo "<p style='font-family: Bahnschrift'>Hello in Paragraph with style.</p>";

//https://htcs5606php.herokuapp.com/

$i = 0; //set counter
while ($i < 100){ //set condition
    echo "<p>Hello</p>"; //set action if condition true
    $i = $i + 1; //update counter
}