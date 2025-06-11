<?php
include 'config.php';

$baglanti = mysqli_connect("localhost", "kullanici_adin", "sifren", "veritabani_adi");

if (!$baglanti) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}

// Sabit 
$user_id = 1;

// formdan gelen course_id al
$course_id = $_POST['course_id'];


$sorgu = "INSERT INTO user_courses (user_id, course_id) VALUES ($user_id, $course_id)";
mysqli_query($baglanti, $sorgu);

echo "Kayıt yapıldı.";
?>