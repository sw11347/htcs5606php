<?php

    $greeting = "hello"; //$ is the syntax for variable in php.
    $who = "Simon";

    echo $greeting;
    echo $who;

    echo "<h1>".$greeting." ".$who."</h1>"; //dot means merge strings.
$x = 4;
$y = 5;
echo " x = ".$x;
echo " y = ".$y;
echo " z = x + y = ".($x + $y);


$greeting = "Hello World";
//length of string
echo "<br>".strlen($greeting)."<br>";
// word count -- count number of words in that string
echo str_word_count($greeting)."<br>";
// string reverse
echo strrev($greeting)."<br>";
// string word position
echo strpos($greeting,"hello")."word position<br>";
//string replace
echo str_replace($greeting, "hello", "bye bye")."word replace<br>";
//to uppercase
echo strtoupper($greeting)."To Uppercase<br>";
