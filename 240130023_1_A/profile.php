<?php
include 'header.php';
include 'config.php';

$user_id = 1;  // Örnek sabit kullanıcı 

// Kullanıcının bilgilerini çek
$user_query = "SELECT username, created_at FROM users WHERE id = $user_id";
$user_result = mysqli_query($baglanti, $user_query);
$user = mysqli_fetch_row($user_result);  // username = $user[0], created_at = $user[1]

// Kullanıcının kurs kayıtlarını çek
$sql = "SELECT courses.course_name, user_courses.enrollment_date 
        FROM user_courses 
        JOIN courses ON user_courses.course_id = courses.id 
        WHERE user_id = $user_id";
$result = mysqli_query($baglanti, $sql);
?>

<div class="container">
  <div class="profile-header">
    <h2>Profilim</h2>
    <div class="user-info">
      <div class="avatar"><?php echo strtoupper(substr($user[0], 0, 1)); ?></div>
      <div class="details">
        <p><strong>Kullanıcı Adı:</strong> <?php echo htmlspecialchars($user[0]); ?></p>
        <p><strong>Kayıt Tarihi:</strong> <?php echo date('d/m/Y', strtotime($user[1])); ?></p>
      </div>
    </div>
  </div>

  <div class="enrolled-courses">
    <h3>Kayıtlı Kurslarım</h3>
    <?php 
    // Döngü için kurs varsa kontrol etmek için ilk satırı çek
    $first_course = mysqli_fetch_row($result);
    if ($first_course) { 
        // İlk kursu yazdır döngüyle devam et
    ?>
      <div class="course-grid">
        <div class="course-card">
          <h4><?php echo htmlspecialchars($first_course[0]); ?></h4>
          <p class="meta">Kayıt Tarihi: <?php echo date('d/m/Y', strtotime($first_course[1])); ?></p>
        </div>
        <?php 
        while ($course = mysqli_fetch_row($result)) { 
        ?>
          <div class="course-card">
            <h4><?php echo htmlspecialchars($course[0]); ?></h4>
            <p class="meta">Kayıt Tarihi: <?php echo date('d/m/Y', strtotime($course[1])); ?></p>
          </div>
        <?php } ?>
      </div>
    <?php } else { ?>
      <div class="alert alert-info">Henüz hiç kursa kaydolmadınız.</div>
    <?php } ?>
  </div>
</div>

<?php include 'footer.php'; ?>