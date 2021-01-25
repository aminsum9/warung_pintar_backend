<?php 

// $db_conn = mysqli_connect('localhost', 'root', '', 'warung_pintar');

$db_host        = '127.0.0.1';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'warung_pintar'; 
$db_port        = '3306';

$db_conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);