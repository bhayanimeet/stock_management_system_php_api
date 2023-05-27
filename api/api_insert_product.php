<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $company_id = $_POST['company_id'];
        $series_id = $_POST['series_id'];
        $model_id = $_POST['model_id'];
        $color_id = $_POST['color_id'];
        $ram_id = $_POST['ram_id'];
        $storage_id = $_POST['storage_id'];
        $processor_id = $_POST['processor_id'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $res = $config->insert_product($company_id,$series_id,$model_id,$color_id,$ram_id,$storage_id,$processor_id,$price,$stock);

        if ($res) {
            $arr['data'] = "Product inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Product insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
