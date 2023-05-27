<?php

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $res = $config->fetch_all_storage();

        $allStorages = [];

        while ($record = mysqli_fetch_assoc($res)) {
            array_push($allStorages, $record);
        }

        $arr['data'] = $allStorages;
    } else {
        $arr['data'] = "Only GET request method is allowed...";
    }

    echo json_encode($arr);
?>