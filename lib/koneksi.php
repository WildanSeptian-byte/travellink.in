<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "travellink";

$db = mysqli_connect($server, $user, $password, $nama_database);

if($db->connect_error){
    echo 'error';
}else {
    echo 'Berhasil';
}
