<?php

$server = "tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "tm99sruc6jy9h74t";
$pwd = "hhu7pv1bfy5lbr6b";
$database = "binwf1dyl1cixxwb";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error) {
    echo $connection->connect_error;
} else {
    echo "Connection Created";
}
$sql = "select * from Users where username = 'something'";
$result = $connection->query($sql);
if ($result-> num_rows == 1){
    while ($row = $result->fetch_assoc()){
        echo "<p>".$row["id"]."</p>";
        echo "<p>".$row["username"]."</p>";
        echo "<p>".$row["password"]."</p>";
        echo "<p>".$row["name"]."</p>";
    }
}