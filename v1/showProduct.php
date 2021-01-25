<?php

require  "../db_connect.php";

$all_product = mysqli_query($db_conn,'SELECT id,name, price FROM product');

if(mysqli_num_rows($all_product) > 0){
    $allProduct = mysqli_fetch_all($all_product, MYSQLI_ASSOC);

    echo json_encode(['success' => 1, 'users' => $allProduct]);
} else {
    echo json_encode(['success' => 0]);
}