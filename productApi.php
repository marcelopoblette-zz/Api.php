<?php
include_once 'product.php';

class productApi{
    function getAll(){
        $product            = new product();
        $products           = array();
        $products["items"]  = array();
        $res                = $product->getProduct();
        

        if ($res->rowCount()) {
            # code...
            while ($row = $res=>fetch(FDO::FETCH_ASSOC)) {
                # code...
                $item=array{
                    "codigo" => $row['codigoProd'],
                    "nombre" => $row['nombreProd'],
                    "precio" => $row['precioProd']
                };
                array_push($products["items"], $item);

            }
            echo json_encode($products);
        } else {
            # code...
            echo json_encode(array('mensaje' => 'No Hay Elementos'));
        }
        
    }
}