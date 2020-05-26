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

    $server = "tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "tm99sruc6jy9h74t";
    $pwd = "hhu7pv1bfy5lbr6b";
    $database = "binwf1dyl1cixxwb";

    $connection = new mysqli($server, $user, $pwd, $database); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        echo "Connection Created";
        $sql = "select * from Users where username = '$username'"; //This is our query
        $result = $connection->query($sql); //run query on this connection through method query()
        if ($result->num_rows == 1) { // means user exists in database
            while ($row = $result->fetch_assoc()) {
                if ($row["password"] == $password) {
                    echo "access granted";
                }
                ?>
                <p><a href="profile.php"></a>Profile</p>
                <p><a href="changepassword.php"></a>Change Password</p>
                <?php
            }
        } else {
            echo "wrong username";
        }
        $connection->close(); // close my connection
    }
} else {
    ?>
    <script>
        window.open("loginform.html", "_self")
    </script>
    <?php
}
