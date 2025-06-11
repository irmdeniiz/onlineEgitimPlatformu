
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>
<body>
    <?php include 'header.php'; ?>

 

<section class="hero">
    <div class="hero-content">
        <h1>Online Eğitim Platformuna Hoş Geldiniz</h1>
        <p>Uzman eğitmenlerden öğren, kariyerini şekillendir!</p>
        <div class="cta-buttons">
            <a href="courses.php" class="btn btn-primary">Kursları Keşfet</a>
            <a href="register.php" class="btn btn-secondary">Ücretsiz Kaydol</a>
        </div>
    </div>
</section>




<section class="featured-courses">
    <div class="container">
        <h2>Öne Çıkan Kurslar</h2>
        <div class="course-grid">
            <!-- Kurs 1 -->
            <div class="course-card">
                <div class="course-thumbnail">
                    <img src="img/web_development.jpg" alt="Web Geliştirme Kursu">
                    <span class="course-badge">Popüler</span>
                </div>
                <div class="course-details">
                    <div class="course-info">
                        <h3>Web Geliştirme 101</h3>
                        <p class="course-description">HTML5, CSS3 ve JavaScript ile modern web siteleri oluşturun</p>
                        <div class="course-meta">
                            <span class="difficulty beginner">Başlangıç</span>
                            <span class="duration">⏱ 8 Saat</span>
                            <span class="rating">★★★★☆ (4.5)</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline">Kursa Git</a>
                </div>
            </div>

            <!-- Kurs 2 -->
            <div class="course-card">
                <div class="course-thumbnail">
                    <img src="img/python.jpeg" alt="Python Kursu">
                    <span class="course-badge">Yeni</span>
                </div>
                <div class="course-details">
                    <div class="course-info">
                        <h3>Python ile Veri Bilimi</h3>
                        <p class="course-description">Pandas, NumPy ve Matplotlib kütüphanelerini öğrenin</p>
                        <div class="course-meta">
                            <span class="difficulty intermediate">Orta</span>
                            <span class="duration">⏱ 12 Saat</span>
                            <span class="rating">★★★★★ (4.9)</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline">Kursa Git</a>
                </div>
            </div>

            <!-- Kurs 3 -->
            <div class="course-card">
                <div class="course-thumbnail">
                    <img src="img/mobile_developer.jpeg" alt="Mobil Geliştirme Kursu">
                </div>
                <div class="course-details">
                    <div class="course-info">
                        <h3>Mobil Uygulama Geliştirme</h3>
                        <p class="course-description">React Native ile cross-platform uygulamalar yapın</p>
                        <div class="course-meta">
                            <span class="difficulty advanced">İleri</span>
                            <span class="duration">⏱ 15 Saat</span>
                            <span class="rating">★★★★☆ (4.3)</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline">Kursa Git</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features">
    <div class="container">
        <div class="feature-card">
            <div class="feature-icon">🎓</div>
            <h3>Uzman Eğitmenler</h3>
            <p>Alanında deneyimli profesyonellerden öğrenin</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📅</div>
            <h3>Esnek Program</h3>
            <p>7/24 erişim ile kendi hızınızda öğrenin</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🎯</div>
            <h3>Proje Temelli</h3>
            <p>Gerçek dünya projeleriyle deneyim kazanın</p>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
</body>
</html>


