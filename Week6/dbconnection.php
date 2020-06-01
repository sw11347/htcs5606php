<?php
$server = "tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "tm99sruc6jy9h74t";
$pwd = "hhu7pv1bfy5lbr6b";
$database = "binwf1dyl1cixxwb";

/**
 * @return mysqli
 */
function dbconn()
{
    $connection = new mysqli($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['pwd'], $GLOBALS['database']); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection;
    }
}


function login($username, $password)
{
    //return true/false gives result back and jumps out of function. Any code after return ignored.
    $connection = dbconn();

    $sql = "select * from Users where username = '$username'"; //This is our query
   echo $sql;
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1) { // means user exists in database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) {
                $connection->close();
                return true;
            } else {
                $connection->close();
                return false;
            }
        }

    } else {

        $connection->close();
        return false;
    }

}