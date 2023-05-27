<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $model = $_POST['model'];

        $res = $config->insert_model($model);

        if ($res) {
            $arr['data'] = "Model detail inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Model detail insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
?>