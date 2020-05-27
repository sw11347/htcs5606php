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
            }
            ?>
            <p><a href="profile.php"></a>Profile</p>
            <p><a href="changepasswordform.php"></a>Change Password</p>
            <?php
        }
    } else {
        echo "wrong username";
    }
    $connection->close(); // close my connection


} else {
    ?>
    <script>
        window.open("loginform.html", "_self")
    </script>
    <?php
}
