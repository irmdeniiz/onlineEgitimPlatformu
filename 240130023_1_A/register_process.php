<?php
include 'config.php'; 


// hata ayıklayabilmem için için tüm hataları göster
error_reporting(E_ALL); //tüm hata, uyarı ve bildirimleri raporla
ini_set('display_errors', 1);//hataları tarayıcıda göster 1=açık hata göster,  0=kapalı hata gizle

echo "<pre>POST Verileri:\n"; //formdan POST ile gönderilen tüm verileri içeren diziyi yazdır
print_r($_POST); // diziyi okunabilir yazdırma işlemi
echo "</pre>"; 

// Zorunlu alan kontrolü
$required = ['first_name', 'last_name', 'email', 'password', 'gender', 'birth_place', 'birth_date'];
foreach ($required as $field) { //her zorunlu alan için kontrol yap
    if (empty($_POST[$field])) { //boş mu????
        die("HATA: $field alanı boş olamaz!"); 
    }
}


error_log(print_r($_POST, true)); // parantez içi:POST verilerini string dönder,  error_log(): Bu verileri debug için sunucu error log'una yaz 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $required = ['first_name', 'last_name', 'email', 'password', 'gender', 'birth_place', 'birth_date'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            die("$field alanı boş olamaz!");
        }
    }


$first_name   = $_POST['first_name'] ?? '';
$last_name    = $_POST['last_name'] ?? '';
$email        = $_POST['email'] ?? '';
$password     = $_POST['password'] ?? '';
$gender       = $_POST['gender'] ?? '';
$birth_place  = $_POST['birth_place'] ?? '';
$birth_date   = $_POST['birth_date'] ?? '';



    error_log("Doğum Tarihi: ".$_POST['birth_date']); 

   
    $sql = "INSERT INTO users (first_name, last_name, email, password, gender, birth_place, birth_date) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$gender', '$birth_place', '$birth_date')";
    
    if ($baglanti->query($sql)) {
        header("Location: members.php?success=1");
        exit();
    } else {
        die("Kayıt hatası: " . $baglanti->error);
    }
}
?>