<?php

require '../db_connect.php';

$id = $_POST['id'];

if(isset($id)){
    $deleteUser = mysqli_query($db_conn, "DELETE FROM product WHERE id = $id");

    if($deleteUser){
        echo json_encode(["success" => 1, "Product success deleted!"]);
    } else {
        echo  json_encode(["success" => 0, "Product failed deleted!"]);
    }
} else {
    echo json_encode(["success" => 0, "Mohon mengisi data yang dibutuhkan!"]);
}