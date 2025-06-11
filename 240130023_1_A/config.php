<?php
$host = "127.0.0.1"; 
$username = "root"; 
$password = "irem12345"; 
$dbname = "courses_db";
$port = 3306; 

$baglanti = new mysqli($host, $username, $password, $dbname, $port);


if ($baglanti->connect_error) {
    die("Veritabanı bağlantı hatası: " . $baglanti->connect_error);
}
 
?>