<?php
include_once 'connection.php';

class persona extends DB{
    function getProduct(){
        $query = $this->connect()->query("select *from tblProducto ");
        return $query;
    }
}