<?php
/**
 * Author: Simon Woods
 * Date: 26th May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {


    $username = $_POST["username"];
    $password = $_POST["passwordd"];

    include_once "dbconnection.php";

    $sql = "select * from Users where username = '$username'"; //This is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1) { // means user exists in database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) {
                echo "access granted";
                session_start();
                $_SESSION["username"] = $username;
            } else {
                echo "wrong password";
                ?>
                <script>
                    setTimeout(function () {
                        window.open("loginform.php.", "_self");
                    }, 3000);
                </script>
                <?php
            }
        }

    } else {
        echo "wrong username";
        ?>
        <script>
            setTimeout(function () {
                window.open("loginform.php.", "_self");
            }, 3000);
        </script>
        <?php

    }
    $connection->close(); // close my connection
}
else {


    }
    ?>