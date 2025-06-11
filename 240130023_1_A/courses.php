
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>
<body>
    

<?php 
include 'header.php'; 
include 'config.php'; 

$sorgu = "SELECT * FROM courses";
$sonuc = mysqli_query($baglanti, $sorgu); 
?>

<div class="container">
    <h2>Tüm Kurslarımız</h2>

    <div class="course-grid">
        <?php while($kurs = mysqli_fetch_assoc($sonuc))
        //her kurs kaydını dizi olarak al 
        { ?>
            <div class="course-card">
                <div class="course-details">
                    <h3><?php echo htmlspecialchars($kurs['course_name']); ?></h3>
                    <p><?php echo htmlspecialchars($kurs['description']); ?></p>
                </div>
                <form method="POST" action="kayit-ol.php">
                    <input type="hidden" name="course_id" value="<?php echo $kurs['id']; ?>">
                    <button type="submit" class="btn">Kursa Katıl</button>
                </form>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>