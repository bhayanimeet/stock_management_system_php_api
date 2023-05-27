<?php

    header("Access-Control-Allow-Methods: PUT, PATCH");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    if ($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {
        parse_str(file_get_contents('php://input'), $_UPDATE);

        $res = $config->update_product($_UPDATE['company_id'],$_UPDATE['series_id'], $_UPDATE['model_id'], $_UPDATE['color_id'], $_UPDATE['ram_id'], $_UPDATE['storage_id'], $_UPDATE['processor_id'], $_UPDATE['price'], $_UPDATE['stock'], $_UPDATE['id']);

        if ($res == 1) {
            $arr['data'] = "Product detail updated successfully...";
        } else {
            $arr['data'] = "Product detail updation failed...";
        }
    } else {
        $arr['data'] = "Only PUT or PATCH request method is allowed...";
    }

    echo json_encode($arr);
?>