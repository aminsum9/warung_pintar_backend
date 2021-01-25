<?php

require '../db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

if(isset($id) && isset($name) && isset($price)){
    $updateUser = mysqli_query($db_conn, "UPDATE product SET name = '$name' , price = '$price' WHERE id = $id");
    
    if($updateUser){
       echo json_encode(["success" => 1, "Product $name updated successfully"]);
    } else {
       echo json_encode(["success" => 0, "Product $name failed updated!"]);
    }
} else {
    echo  json_encode(["success" => 0, "Mohon mengisi semua data!"]);
}