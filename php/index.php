<?php

$host = 'db';//db_host in case of using aws give aws public ip
$user = 'dev';//db_user
$password = 'devpass';//db_password
$db = 'test_db'; //db_name


$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully Connected to Mysql';
?>