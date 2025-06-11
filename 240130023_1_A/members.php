<?php 
include 'header.php';
include 'config.php';

$result = mysqli_query($baglanti, "SELECT * FROM users");
if (!$result) {
    die("Sorgu hatası: " . mysqli_error($baglanti));
}
?>

<div class="container">
    <h2>Kayıtlı Üyeler</h2>
    <div class="members-list">
        <?php 
        while($user = mysqli_fetch_assoc($result)) {  //Sorgu sonucunu satır satır dizi olarak alır
            $birth_place = $user['birth_place'] ?? 'Belirtilmemiş';
            $birth_date = $user['birth_date'] ? date('d.m.Y', strtotime($user['birth_date'])) : 'Belirtilmemiş';
            $gender = $user['gender'] ?? 'Belirtilmemiş';
            
        ?>
        
            <div class="member-card">
                <h3><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></h3>
                <p><strong>E-posta:</strong> <?= htmlspecialchars($user['email']) ?></p>
                <p><strong>Doğum Yeri:</strong> <?= htmlspecialchars($birth_place) ?></p>
                <p><strong>Doğum Tarihi:</strong> <?= $birth_date ?></p>
                <p><strong>Cinsiyet:</strong> <?= htmlspecialchars($gender) ?></p>
                
            </div>
        <?php } ?>

        
    </div>
</div>



<?php include 'footer.php'; ?>