<?php include 'header.php'; ?>
<div class="container auth-container">
    <div class="auth-card">
        <h2 class="auth-title">Hoş Geldiniz</h2>
        <p class="auth-subtitle">Lütfen hesabınıza giriş yapın</p>
        <form action="login_process.php" method="POST" class="auth-form">
            <div class="form-group">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required class="form-input">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Şifre" required class="form-input">
            </div>
            <button type="submit" class="btn auth-btn">Giriş Yap</button>
        </form>
        <div class="auth-link">
            Hesabınız yok mu? <a href="register.php" class="link">Kayıt Olun</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
