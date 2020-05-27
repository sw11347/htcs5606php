<?php
include_once "dbconnection.php";
session_start();
$_SESSION["username"] = $username;

$sql = "select password from Users where username = '$username'";
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
        $sql .= "'where username = '$username'";
        $result = $connection->query($sql);
        echo "password changed";
    }
    else{
        echo "Go back and retry";
    }
}
$connection->close();