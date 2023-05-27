<?php

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $res = $config->fetch_all_series();

        $allSeries = [];

        while($record = mysqli_fetch_assoc($res)){
            array_push($allSeries,$record);
        }

        $arr['data'] = $allSeries;

    }else{
        $arr['data'] = "Only GET request method is allowed...";
    }

    echo json_encode($arr);
?>