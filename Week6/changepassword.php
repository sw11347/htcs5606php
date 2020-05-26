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
$sql = "select password from Users where username = 'something'";
$result = $connection->query($sql);
if ($result->num_rows == 1){
    while ($row = $result->fetch_assoc()){
        $oldpassworddata = $row["password"];
    }
}

if (isset($_POST["oldpassword"])) { // isset check if variable exists.
    if ($_POST["oldpassword"] == $oldpassworddata) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpassword"];
        $sql .= "'where username = 'something'";
        $result = $connection->query($sql);
        echo "password changed";
    }
    else{
        echo "Go back and retry";
    }
}
$connection->close();