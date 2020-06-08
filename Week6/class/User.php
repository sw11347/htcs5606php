<?php
/**
 * Class User
 * Author: Simon Woods
 * Version: 1.0
 * Purpose: for User
 */

include_once "DB.php";
include_once "Category.php";

class User
{
    //They are my attributes
    public $id;
    private $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }
    // They are my methods
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username; //This means his
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function view_categories(){
        $conn = (new DB())->connection; // create connection from DB class
        $sql = "select * from Category"; // my query
        $categories = array(); //my categories is an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $category = new Category($row["id"],$row["name"],$row["picture"]); // each row in table is one category.
                array_push($categories,$category);
            }
        }
        $conn->close(); //close connection.
        return $categories;
    }

}