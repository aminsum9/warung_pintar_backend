<?php 

// $db_conn = mysqli_connect('localhost', 'root', '', 'warung_pintar');

//local
// $db_host        = '127.0.0.1';
// $db_user        = 'root';
// $db_pass        = '';
// $db_database    = 'warung_pintar'; 
// $db_port        = '3306';

//remote
$db_host        = 'remotemysql.com';
$db_user        = 'rqVWI5GSIR';
$db_pass        = 'xyNrCK4VzR';
$db_database    = 'rqVWI5GSIR';
$db_port        = '3306';

$db_conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);