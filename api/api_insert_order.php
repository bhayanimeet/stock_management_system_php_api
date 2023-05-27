<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $id = $_POST['id'];
        $product_id = $_POST['product_id'];
        // $stock = $_POST['stock'];

        // $number = $stock -1;

        $res = $config->insert_order($product_id);

        if ($res) {
            // $stock = $config->update_product($company_id, $series_id, $model_id, $color_id, $ram_id, $storage_id, $processor_id, $price, $number,$id);

            $arr['data'] = "Order inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Order insertion failed...";
        }
    } else {
        $arr['data'] = "Only POST request method is allowed...";
    }

    echo json_encode($arr);
