<?php 
$array = [
    "userId" => 1,
    "id" => 1,
    "title" => "delectus aut autem",
    "completed" => false
];
header('Content-type: application/json');
echo json_encode($array);