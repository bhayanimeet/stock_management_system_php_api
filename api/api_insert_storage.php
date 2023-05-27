<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $storage = $_POST['storage'];

        $res = $config->insert_storage($storage);

        if ($res) {
            $arr['data'] = "Storage detail inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Storage detail insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
?>