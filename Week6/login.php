<?php
/**
 * Author: Simon Woods
 * Date: 26th May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {


    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $server = "tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "tm99sruc6jy9h74t";
    $pwd = "hhu7pv1bfy5lbr6b";
    $database = "eq8apmg97080j54s";

    $connection = new mysqli($server, $user, $pwd, $database); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        echo "Connection Created";
        $sql = "select * username from Users where username = '$username'"; //This is our query
        $result = $connection->query($sql); //run query on this connection through method query()
        if ($result->num_rows == 1) { // means user exists in database
            while ($row = $result->fetch_assoc()) {
                if ($row["password"] == $password) {
                    echo "access granted";
                }
            }
        } else {
            echo "wrong username";
        }
    }
} else {
    ?>
    <script>
        window.open("loginform.html", "_self")
    </script>
    <?php
}
