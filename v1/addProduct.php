<?php

require '../db_connect.php';

$data = json_decode(file_get_contents("php://input"));


if(isset($data->name)){
    $name = mysqli_real_escape_string($db_conn, trim($data->name));
    $price = mysqli_real_escape_string($db_conn, trim($data->price));

    
    $addUser = mysqli_query($db_conn, "INSERT INTO product(id,name,price) VALUES(0,'$name','$price')");

    echo $addUser;
    
    if($addUser){
        echo json_encode(["success" => 1, "message" => 'success add product']);
    } else {
        echo json_encode(["success" => 0, "message" => 'failed add product']);
    }
} else {
    echo json_encode(["success" => 0, "message" => "Mohon mengisi data yang dibutuhkan!"]);
}