<?php
/**
 * Author: Simon Woods
 * Date: 26th May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "dbconnection.php";
//    I will use my login function
    if(login($username,$password)){
        session_start();
        $_SESSION["username"] = $username;
    }
}else {

    echo "Wrong username or password";
    }

?>