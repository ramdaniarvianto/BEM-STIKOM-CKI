<?php 
$titlebar = "BEM STIKOM CKI " . date("Y");
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages/') !== false ) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humas - <?= $titlebar; ?></title>
    <link rel="icon" href="<?= $basePath; ?>assets/images/ico/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/kementerian.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="breadcrumbs">
        <p><a href="<?= $basePath; ?>index.php">Home</a></p>
        <span>|</span>
        <p class="breadcrumbs-active">Tentang</p>
        <span>|</span>
        <p class="breadcrumbs-active">Humas</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Kementerian Hubungan Masyarakat</h2>
                <div class="content-text">
                    <p>Humas adalah kementerian yang berperan sebagai penghubung antara BEM dan mahasiswa serta pihak eksternal. Tugas utama Humas adalah menyebarluaskan informasi kegiatan BEM, membangun citra positif organisasi, serta mengelola komunikasi dan interaksi dengan masyarakat kampus agar terjalin partisipasi aktif dan dukungan yang kuat. Berikut tugas dan fungsi Humas:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Mengkomunikasikan kegiatan, program, dan kebijakan BEM kepada mahasiswa, dosen, dan pihak eksternal dengan menggunakan informasi lisan, tertulis, maupun media sosial.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Menciptakan dan memelihara citra positif BEM di mata mahasiswa dan pihak luar kampus.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Menjadi penghubung antara BEM dengan mahasiswa dan pihak eksternal, memastikan komunikasi dua arah yang efektif.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Mengajak mahasiswa untuk terlibat aktif dalam kegiatan dan program yang diinisiasi oleh BEM.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Mengelola dan menanggapi isu-isu atau krisis yang bisa mempengaruhi reputasi BEM.</td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <td>Memanfaatkan media sosial untuk memperkenalkan kualitas BEM STIKOM CKI sehingga dapat menciptakan ketertarikan juga simpati kepada masyarakat.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Menjadi jembatan komunikasi yang profesional dan inovatif antara BEM dengan masyarakat kampus dan pihak eksternal, serta menciptakan citra positif organisasi.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Menyediakan informasi yang akurat, menarik, dan relevan kepada civitas akademika.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Mengoptimalkan media sosial dan mading sebagai media komunikasi utama.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Menjalin hubungan baik dengan pihak eksternal untuk mendukung program kerja BEM.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Mengedukasi mahasiswa tentang pentingnya partisipasi dalam kegiatan organisasi.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Membangun rasa kepedulian terhadap isu-isu sosial dan lingkungan.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- PROGRAM KERJA -->
            <div class="content" id="proker">
                <h2>Program Kerja</h2>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td><b>Content Weekly</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Memberikan update terbaru di akun media sosial BEM STIKOM CKI dari setiap kegiatan BEM, termasuk hari-hari nasional, dan informasi pengetahuan umum.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>CKI Cares</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Program penggalangan dana untuk korban bencana alam dan berita duka, yang melibatkan seluruh civitas akademika kampus.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td><b>Adkesmas (Advokasi Kesejahteraan Masyarakat)</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Bekerja sama dengan pihak terkait untuk meningkatkan kesejahteraan mahasiswa melalui program advokasi.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td><b>Mading STIKOM CKI</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Mengisi mading kampus dengan berbagai informasi, baik tentang kegiatan BEM maupun pengetahuan umum, sebagai alternatif selain media sosial.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td><b>Hot News</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Menyebarkan informasi terkini tentang keadaan di Indonesia yang relevan dan pantas dibagikan untuk meningkatkan kesadaran masyarakat kampus.</td>
                        </tr>
                    </table>
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