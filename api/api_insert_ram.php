<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ram = $_POST['ram'];

        $res = $config->insert_ram($ram);

        if ($res) {
            $arr['data'] = "RAM detail inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "RAM detail insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);
?>