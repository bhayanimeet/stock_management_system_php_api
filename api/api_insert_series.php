<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $series = $_POST['series'];
        $company_id = $_POST['company_id'];

        $res = $config->insert_series($series,$company_id);

        if ($res) {
            $arr['data'] = "Series name inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Series name insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
?>