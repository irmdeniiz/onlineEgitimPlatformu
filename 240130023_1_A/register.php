<?php 
include 'header.php'; 
include 'config.php'; // Veritabanı bağlantısı
?>

<div class="container">
    <h2>Üyelik Kayıt Formu</h2>
    <form class="register-form" action="register_process.php" method="POST">
        
        <div class="form-group">
            <label for="first_name">Adınız</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Soyadınız</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>

        <div class="form-group">
            <label for="email">E-posta Adresiniz</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group" >
            <label for="password">Şifreniz</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Cinsiyetiniz</label>
            <div class="gender-selection">
                <div class="gender-option">
                    <input type="radio" id="gender_male" name="gender" value="Erkek" required>
                    <label for="gender_male">Erkek</label>
                </div>
                <div class="gender-option">
                    <input type="radio" id="gender_female" name="gender" value="Kadın">
                    <label for="gender_female">Kadın</label>
                </div>
                <div class="gender-option">
                    <input type="radio" id="gender_other" name="gender" value="Diğer">
                    <label for="gender_other">Diğer</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="birth_place">Doğum Yeriniz</label>
            <input type="text" id="birth_place" name="birth_place" required>
        </div>

        <div class="form-group">
            <label for="birth_date">Doğum Tarihiniz</label>
            <input type="date" id="birth_date" name="birth_date" required style="appearance: auto;">
        </div>

        <button type="submit" class="btn btn-primary">Kaydı Tamamla</button>
    </form>
</div>
<?php include 'footer.php'; ?>