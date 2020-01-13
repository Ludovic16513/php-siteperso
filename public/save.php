<?php


$array = array(
    "lastName" => $_POST["lastName"],
);


$jsonArray = json_encode($array);
file_put_contents("../data/last_message.json",$jsonArray);

