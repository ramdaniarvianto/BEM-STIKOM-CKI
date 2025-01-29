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
    <link rel="stylesheet" href="../assets/css/filosofi.css">
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
            <!-- FILOSOFI LOGO -->
            <div class="content">
                <h2>Filosofi Logo</h2>
                <div class="logo-wrap">
                    <!-- LOGO | HEWAN GURITA -->
                    <div class="logo">
                        <div class="logo-image">
                            <img src="../assets/images/logo/logobem-home.png" alt="Filosofi Logo Hewan Gurita">
                        </div>
                        <strong>Hewan Gurita</strong>
                        <div class="logo-deskripsi">Gurita digambarkan sebagai entitas yang tangguh, inovatif, dan mampu beradaptasi dengan perubahan, serta memiliki kecerdaan dalam mencari solusi saat penanganan masalah.</div>
                    </div>
                    <!-- LOGO | SEGITIGA -->
                    <div class="logo">
                        <div class="logo-image">
                            <img src="../assets/images/logo/logobem-segitiga.png" alt="Filosofi Logo Segitiga">
                        </div>
                        <strong>Segitiga</strong>
                        <div class="logo-deskripsi">Segitiga memiliki makna kebenaran, baik dari segi kesempurnaan struktural maupun keseimbangan, juga mencerminkan komitmen, terhadap kejujuran, integritas dan pencarian kebenaran yansag berkelanjutan.</div>
                    </div>
                    <!-- LOGO | ORANG MENGANGKAT TANGAN -->
                    <div class="logo">
                        <div class="logo-image">
                            <img src="../assets/images/logo/logobem-angkat.png" alt="Filosofi Logo Orang Mengangkat Tangan">
                        </div>
                        <strong>Orang Mengangkat Tangan</strong>
                        <div class="logo-deskripsi">Simbol diatas menggambarkan orang yang menyuarakan, komunikatif dan responsif tentang permasalahan yang berhubungan dengan keadilan.</div>
                    </div>
                    <!-- LOGO | DUA TANGAN MENGEPAL -->
                    <div class="logo">
                        <div class="logo-image">
                            <img src="../assets/images/logo/logobem-kepal.png" alt="Filosofi Logo Dua Tangan Mengepal">
                        </div>
                        <strong>Dua Tangan Mengepal</strong>
                        <div class="logo-deskripsi">Kepalan tangan melambangkan kekuatan keteguhan. Ini menunjukkan bahwa organisasi memiliki kekuatan untuk menghadapi tantangan dan berkomitmen untuk mencapai tujuannya. Juga menjadi simbol keberanian dan tekad dalam menghadapi tantangan.</div>
                    </div>
                </div>
            </div>
            <!-- FILOSOFI NAMA KABINET -->
            <div class="content">
                <h2>Filosofi Nama Kabinet</h2>
                <div class="nama-wrapper">
                    <div class="nama-logo">
                        <img src="../assets/images/logo/logo-nama-bem.png" class="nama-logo-img width-full" alt="">
                    </div>
                    <!-- NAMA KABINET | DHARMA -->
                    <div class="nama-kabinet">
                        <div class="nama">
                            <p>DHARMA</p>
                        </div>
                        <div class="nama-arti">
                            <p>Kebenaran dan Kewajiban, melambangkan tanggung jawab dan amanah.</p>
                        </div>
                    </div>
                    <!-- NAMA KABINET | SATVAVIRA -->
                    <div class="nama-kabinet">
                        <div class="nama">
                            <p>SATVAVIRA</p>
                        </div>
                        <div class="nama-arti">
                            <p>Pemberani, Kuat dan Tangguh, melambangkan keteguhan hati dan kekuatan.</p>
                        </div>
                    </div>
                    <!-- NAMA KABINET | DIALEKTIKA -->
                    <div class="nama-kabinet">
                        <div class="nama">
                            <p>DIALEKTIKA</p>
                        </div>
                        <div class="nama-arti">
                            <p>Pendekatan keorganisasian dengan berbagai cara untuk mendapatkan solusi terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FILOSOFI WARNA LOGO -->
            <div class="content">
                <h2>Filosofi Warna Logo</h2>
                <div class="logo-wrapper">
                    <div class="logo-image"><img src="../assets/images/logo/logobem-home.png" alt="Logo BEM"></div>
                    <div class="logo-warna">
                        <!-- WARNA LOGO | PEACH -->
                        <div class="warna">
                            <img src="../assets/images/logo/logo-warna-peach.png" alt="Filosofi Warna Logo Peach">
                            <p>Warna gradasi peach berfokus pada hubungan antar manusia, inovasi, dan pendekatan yang inklusif. Warna ini mencerminkan keseimbangan antara kreativitas dan keterbukaan, serta membawa kesan yang menyenangkan dan positif.</p>
                        </div>
                        <!-- WARNA LOGO | PURPLE -->
                        <div class="warna">
                            <img src="../assets/images/logo/logo-warna-purple.png" alt="Filosofi Warna Logo Peach">
                            <p>Kombinasi gradasi ungu dan putih mengharapkan organisasi yang berwawasan luas, transparan dan memiliki integritas tinggi sekaligus tetap kreatif dan visioner.</p>
                        </div>
                    </div>
                </div>
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