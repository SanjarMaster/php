<?php

require_once './ClassJson.php';
$array = array(
    "res_id" => 0,
    "mess" => "success",
    "data" =>
        array(
            "name" => "name",
            "age" => 12
        )
);

echo ClassJson::json_EncodeStatic($array);
