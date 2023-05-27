<?php

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $res = $config->fetch_all_product();

        $allProducts = [];

        while($record = mysqli_fetch_assoc($res)){
            array_push($allProducts,$record);
        }

        $arr['data'] = $allProducts;

    }else{
        $arr['data'] = "Only GET request method is allowed...";
    }

    echo json_encode($arr);
?>