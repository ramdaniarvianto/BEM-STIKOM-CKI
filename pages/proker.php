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
    <link rel="stylesheet" href="../assets/css/proker.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="breadcrumbs">
        <p><a href="<?= $basePath; ?>index.php">Home</a></p>
        <span>|</span>
        <p class="breadcrumbs-active">Tentang</p>
        <span>|</span>
        <p class="breadcrumbs-active">Program Kerja</p>
    </div>

    <main>
        <div class="left">
            <!-- VISI & MISI -->
            <div class="content">
                <h2>Visi & Misi</h2>
                <strong>Visi</strong>
                <div class="content-text">
                    <p>Menjadi wadah pengembangan bakat dan minat mahasiswa yang berintegritas, inklusif, dan proaktif dalam mewujudkan kemajuan dan kesejahteraan bersama.</p>
                </div>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Membangun hubungan internal yang didasarkan pada rasa kekeluargaan dan profesionalisme.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Memperkuat sarana komunikasi sebagai alat untuk memberikan solusi atas masalah yang dihadapi mahasiswa.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Menjaga komunikasi yang harmonis dengan unit kegiatan Mahasiswa baik di dalam maupun di luar organisasi untuk mencapai visi dan misi bersama.</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Melakukan kegiatan sosial yang berdampak positif terhadap lingkungan sekitar.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- PROGRAM KERJA -->
            <div class="content">
                <h2>Program Kerja</h2>
                <div class="proker-wrap">
                    <!-- PROKER | PASWA -->
                    <div class="proker">
                        <div class="proker-tags">
                            <strong>Paswa</strong>
                            <strong class="terlaksana">Terlaksana</strong>
                        </div>
                        <p>Pengenalan Studi Wawasan dan Almamater Kampus dengan tema "Synergize Towards a Stronger Character For The Next Golden Generation".</p>
                        <p>
                            📅 Waktu: 13 - 15 Desember 2024
                            <br>
                            📍 Tempat: Kampus STIKOM CKI & Citra Alam
                        </p>
                        <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/paswa.jpg" alt="Paswa 2024">
                    </div>
                    <!-- PROKER | ADKESMA CKI --><hr>
                    <div class="proker">
                        <div class="proker-tags">
                            <strong>Adkesmas CKI</strong>
                            <strong class="terlaksana">Terlaksana</strong>
                        </div>
                        <p>Advokasi dan Kesejahteraan Mahasiswa</p>
                        <img src="<?= $basePath; ?>assets/images/bem/proker-adkesma.png" alt="Adkesma CKI" class="proker-border">
                        <div class="content-text">
                            <table>
                                <tr>
                                    <th>1.</th>
                                    <td>Mefasilitasi komunikasi antara Mahasiswa, organisasi dan kampus.</td>
                                </tr>
                                <tr>
                                    <th>2.</th>
                                    <td>Memenuhi iklmin diskusi dan penjaringan aspirasi Mahasiswa.</td>
                                </tr>
                                <tr>
                                    <th>3.</th>
                                    <td>Menghubungkan mahasiswa dengan birokrasi untuk mendapatkan informasi yang mendukung kesejahteraan mereka.</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Menyediakan kanal informasi seputar advokasi dan kesejahteraan mahasiswa.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- PROKER | CKI CARES --><hr>
                    <div class="proker">
                        <div class="proker-tags">
                            <strong>CKI Cares</strong>
                            <strong class="terlaksana">Terlaksana</strong>
                        </div>
                        <p>Cipta Karya Informatika Cares</p>
                        <p>Kegiatan peduli sosial ketika adanya berita belasungkawa dari keluarga besar STIKOM CKI ataupun berita musibah yang berdampak bagi sekelompok orang atau perorangan dengan bantuan berupa uang tunai ataupun lainnya.</p>
                        <img src="<?= $basePath; ?>assets/images/bem/proker-cki-cares.jpg" alt="CKI Cares">
                    </div>
                    <!-- PROKER | STIKOM COLLABORATION --><hr>
                    <div class="proker">
                        <div class="proker-tags">
                            <strong>STIKOM Collaboration</strong>
                        </div>
                        <p>Program Kerja Sama antar Civitas STIKOM CKI (BEM, UKM dan KAMPUS) ataupun Kampus lain.</p>
                        <!-- PROKER COLLAB WRAP -->
                        <div class="proker-collab">
                            <!-- PROGRAM KERJA | SEMINAR IT -->
                            <div class="collab">
                                <div class="proker-tags">
                                    <strong>STIKOM Collaboration</strong>
                                    <strong class="sub-proker">Seminar IT</strong>
                                    <strong class="terlaksana">Terlaksana</strong>
                                </div>
                                <p>Seminar IT: Pemanfaatan Teknologi AI dalam Perkuliahan</p>
                                <p>
                                    📅 Tanggal: 18 Januari 2025
                                    <br>
                                    🕒 Waktu: 09:00 - 12:00
                                    <br>
                                    📍 Tempat: Aula Kampus STIKOM CKI
                                </p>
                                <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/proker-seminar-it.jpg" alt="Seminar IT">
                                <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/proker-seminar-it-bem.jpg" alt="Seminar IT">
                            </div>
                            <!-- PROGRAM KERJA | DONOR DARAH -->
                            <div class="collab">
                                <div class="proker-tags">
                                    <strong>STIKOM Collaboration</strong>
                                    <strong class="sub-proker">Donor Darah</strong>
                                </div>
                                <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/proker-donor-darah.png" alt="Donor Darah">
                            </div>
                            <!-- PROGRAM KERJA | STUDI BANDING -->
                            <div class="collab">
                                <div class="proker-tags">
                                    <strong>STIKOM Collaboration</strong>
                                    <strong class="sub-proker">Studi Banding</strong>
                                </div>
                                <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/proker-studi-banding.png" alt="Studi Banding">
                            </div>
                            <!-- PROGRAM KERJA | BAZAR RAMADHAN -->
                            <div class="collab">
                                <div class="proker-tags">
                                    <strong>STIKOM Collaboration</strong>
                                    <strong class="sub-proker">Bazar Ramadhan</strong>
                                </div>
                                <img class="proker-image" src="<?= $basePath; ?>assets/images/bem/proker-bazar.png" alt="Bazar Ramadhan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="content">
                <p>
                    Ada undangan, kolaborasi, atau urusan penting sama BEM?
                    <br>
                    Langsung aja hubungi Humas!
                </p>
                <a href="https://wa.me/6282247963895" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?>
</body>
</html>