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
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/style.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "includes/navbar.php"; ?>

    <header>
        <h1>Selamat Datang di Website <span class="h-bem">BEM STIKOM CKI</span> Kabinet <span class="h-kabinet">Dharma Satvavira Dialektika</span></h1>
        <img src="assets/images/bem/raker.png" alt="BEM STIKOM CKI 2024/2025">
    </header>

    <main>
        <div class="sambutan">
            <div class="sambutan-image">
                <img src="assets/images/ketuwakil/rajabowo.png" alt="Presiden dan Wakil Presiden Mahasiswa BEM STIKOM CKI">
            </div>
            <div class="sambutan-text">
                <h2>
                    Presiden dan Wakil Presiden <br>
                    Mahasiswa STIKOM CKI
                </h2>
                <p><a href="pages/sambutan.php">Sambutan</a></p>
            </div>
        </div>
    </main>
</body>
</html>