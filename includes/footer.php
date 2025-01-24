<?php 
$titlebar = "BEM STIKOM CKI " . date("Y");
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages/') !== false ) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlebar; ?></title>
    <link rel="icon" href="<?= $basePath; ?>assets/images/ico/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/footer.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <footer>
        <div class="footer-info">
            <a href="<?= $basePath; ?>index.php" class="foot-logo">
                <img src="<?= $basePath; ?>assets/images/logo/logobem-home.png" alt="Logo BEM Home">
                <span>BEM STIKOM CKI</span>
            </a>
            <p>Website Resmi BEM STIKOM CKI 2024-2025 Kabinet Dharma Satvavira Dialektika. Hadir Sebagai Ruang dan Wadah Aspirasi dan Realisasi Untuk Transformasi STIKOM CKI dan Indonesia.</p>
            <div class="foot-socmed">
                <!-- INSTAGRAM -->
                <a href="https://www.instagram.com/bemstikomcki_/" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <!-- FACEBOOK -->
                <a href="https://www.facebook.com/bemstikomcki" target="_blank" class="facebook"><i class="fa-brands fa-square-facebook"></i> Facebook</a>
                <!-- EMAIL -->
                <a href="https://mail.google.com/mail/?view=cm&to=bemstikomcki2024@gmail.com" target="_blank" class="email"><i class="fa-solid fa-envelope"></i> Email</a>
                <!-- WHATSAPP -->
                <a href="https://wa.me/6282247963895" target="_blank" class="whatsapp"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
        </div>
        <div class="footer-copy">
            <p>Copyright © BEM STIKOM CKI <?= date("Y"); ?> | Kabinet Dharma Satvavira Dialektika</p>
        </div>
    </footer>
</body>
</html>