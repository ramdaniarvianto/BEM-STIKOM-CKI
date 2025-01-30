<?php 
$titlebar = "BEM STIKOM CKI " . date("Y");
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages/') !== false ) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filosofi Logo - <?= $titlebar; ?></title>
    <link rel="icon" href="<?= $basePath; ?>assets/images/ico/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/strukturorganisasi.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="breadcrumbs">
        <p><a href="<?= $basePath; ?>index.php">Home</a></p>
        <span>|</span>
        <p class="breadcrumbs-active">Tentang</p>
        <span>|</span>
        <p class="breadcrumbs-active">Struktur Organisasi</p>
    </div>

    <main>
        <div class="left">
            <!-- STRUKTUR ORGANISASI -->
            <div class="content">
                <h2>Struktur Organisasi</h2>
                <p>Pengurus Badan Eksekutif Mahasiswa Sekolah Tinggi Ilmu Komputer Cipta Karya Informatika Periode 2024/2025</p>
                <a href="<?= $basePath; ?>assets/images/kementerian/stuktur-organisasi.png" target="_blank"><img src="<?= $basePath; ?>assets/images/kementerian/stuktur-organisasi.png" alt="Struktur Organisasi" title="Struktur Organisasi Badan Ekstekutif Mahasiswa Kabinet Dharma Satvavira Dialektika"></a>
            </div>
        </div>
        <div class="right">
            <div class="sticky">
                <div class="content">
                    <p>
                        Ada undangan, kolaborasi, atau urusan penting sama BEM?
                        <br>
                        Langsung aja hubungi Humas!
                    </p>
                    <a href="https://wa.me/6282247963895" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?>
</body>
</html>