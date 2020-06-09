<?php
/**
 * Class User
 * Author: Simon Woods
 * Version: 1.0
 * Purpose: for User
 */

class Product
{
    public $id;
    public $name;
    public $price;
    public $picture;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $picture
     * @param $discription
     * @param $categoryID
     */

    public function __construct($id, $name, $price, $picture, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->categoryID = $categoryID;
    }


}