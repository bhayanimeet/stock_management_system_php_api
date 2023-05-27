<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $processor = $_POST['processor'];

        $res = $config->insert_processor($processor);

        if ($res) {
            $arr['data'] = "Processor detail inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Processor detail insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
