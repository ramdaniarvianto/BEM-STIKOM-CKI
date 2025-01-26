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
        <p class="breadcrumbs-active">Adkesma</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Adkesma</h2>
                <div class="content-text">
                    <p>Kementerian Koordinator Adkesma merupakan sebuah bidang yang bertugas untuk membantu mahasiswa atau mahasiswa dalam advokasi mengenai fasilitas, akademis dan finansial untuk memenuhi kesejahteraan serta cepat tanggap terhadap permasalahan yang terdapat pada lingkungan civitas akademik. Berikut tugas dan fungsi Adkesma:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Menjembatani hubungan antara mahasiswa dengan STIKOM CKI, dalam mendukung kesejahteraan akademik dan non-akademik seluruh civitas akademika.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Membawa dan menindaklanjuti aspirasi yang timbul dari mahasiswa STIKOM CKI dengan meneruskan hasil analisis dari data dan atau informasi yang diterimanya kepada pihak yang berwenang yaitu pihak BEM STIKOM CKI dan/atau manajemen STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Menghimpun aspirasi yang timbul dari mahasiswa STIKOM CKI dan menghimpun data dan informasi dari pihak manajemen terkait dengan kebijakan atau perkembangan yang berhubungan dengan kepentingan mahasiswa untuk dijadikan pusat data dan informasi.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Melakukan pelayanan dan pengadvokasian terhadap permasalahan yang di alami mahasiswa STIKOM CKI terkait akademik, relasi sosial, sarana dan prasarana, serta kekerasan,pelecehan maupun pembullyan di lingkungan STIKOM CKI guna meningkatkan kesejahteraan mahasiswa STIKOM CKI.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Mewujudkan kesejahteraan mahasiswa yang inklusif, tanggap, dan berdaya guna melalui advokasi yang berkelanjutan dan berbasis partisipasi aktif.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Membangun sistem advokasi yang responsif dan profesional.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Memperkuat hubungan komunikasi antara mahasiswa, BEM, dan manajemen STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Mengedukasi mahasiswa mengenai hak dan kewajiban mereka di lingkungan kampus.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Menyediakan wadah yang aman dan nyaman untuk menyampaikan aspirasi dan keluhan mahasiswa.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Mendukung pengembangan keterampilan mahasiswa melalui program-program pendukung akademik dan non-akademik.</td>
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
                            <td><b>Adkesmas CKI</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Kolaborasi antara Adkesma dan Divisi Humas BEM dengan perwakilan setiap kelas dari semua angkatan aktif untuk memantau kondisi mahasiswa/i dari sisi akademis, ekonomi, maupun kemahasiswaan.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>Advocare CKI</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Program kerja ini berkolaborasi dengan Departemen Komunikasi dan Informasi BEM (DEPKOMINFO) sebagai tempat menyampaikan pendapat, usulan, atau aspirasi mahasiswa/i melalui hotline yang dikelola via media sosial.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td><b>Merdeka Belajar</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Program yang menyediakan informasi mengenai Kampus/Magang Merdeka, workshop, dan event dari Kemendikbud.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td><b>POSKAD (Pertemuan Ketua Kelas dan Wakil)</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Diskusi terbuka antara ketua kelas dan wakil per semester untuk menyampaikan saran, kritikan, dan harapan terkait kebijakan pelayanan akademik maupun fasilitas kampus.</td>
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