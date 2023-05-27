<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $company = $_POST['company'];

        $res = $config->insert_company($company);

        if ($res) {
            $arr['data'] = "Company name inserted successfully...";
            http_response_code(201);
        } else {
            $arr['data'] = "Company name insertion failed...";
        }
    
    } else {
        $arr['data'] = "Only POST request method is allowed...";
   }

    echo json_encode($arr);

?>