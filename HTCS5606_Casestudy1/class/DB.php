<?php

class DB
{
    private $server = " tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "tm99sruc6jy9h74t";
    private $pwd = "hhu7pv1bfy5lbr6b";
    private $database = "binwf1dyl1cixxwb";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}