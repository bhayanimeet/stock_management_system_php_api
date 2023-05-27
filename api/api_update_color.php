<?php

    header("Access-Control-Allow-Methods: PUT, PATCH");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {
        parse_str(file_get_contents('php://input'), $_UPDATE);

        $res = $config->update_color($_UPDATE['color'], $_UPDATE['id']);

        if ($res == 1) {
            $arr['data'] = "Color updated successfully...";
        } else {
            $arr['data'] = "Color updation failed...";
        }
    } else {
        $arr['data'] = "Only PUT or PATCH request method is allowed...";
    }

    echo json_encode($arr);
