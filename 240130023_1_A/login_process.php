<?php
$baglanti = mysqli_connect("localhost", "kullanici_adin", "sifren", "veritabani_adi");

// Formdan gelen verileri çek
$username = $_POST['username'];
$password = $_POST['password'];


$sorgu = "SELECT id, password FROM users WHERE username = '$username'";
$sonuc = mysqli_query($baglanti, $sorgu); //calistir

while ($satir = mysqli_fetch_array($sonuc)) {
    $dogruSifre = $satir['password'];
    
    if (password_verify($password, $dogruSifre)) {
        echo "Giriş başarılı!";
    } else {
        echo "Şifre yanlış!";
    }
    exit(); // Sadece ilk kullanıcıyı kontrol et
}


echo "Kullanıcı bulunamadı.";
?>