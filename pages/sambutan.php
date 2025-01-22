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
    <link rel="stylesheet" href="../assets/css/sambutan.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../includes/navbar.php"; ?>

    <div class="breadcrumbs">
        <p><a href="<?= $basePath; ?>index.php">Home</a></p>
        <span>|</span>
        <p class="breadcrumbs-active">Sambutan</p>
    </div>

    <header>
        <h1>Sambutan dari Presiden dan Wakil Presiden Mahasiswa STIKOM CKI Kabinet Dharma Satvavira Dialektika</h1>
        <p>Kamis, 20 Novemer 2024</p>
    </header>

    <main>
        <div class="left">
            <!-- SAMBUTAN PRESIDEN MAHASISWA -->
            <div class="content">
                <h2>Danendra Satriyohadi Notonegoro</h2>
                <img src="../assets/images/ketuwakil/presma-raja-transparent.png" alt="Presiden Mahasiswa | Danendra Satriyohadi Notonegoro">
                <strong>Presiden Mahasiswa</strong>
                <div class="content-text">
                    <p>Salam Perubahan!</p>
                    <p>Mahasiswa sekalian, di tangan kita, perubahan adalah sebuah kepastian. Dalam setiap langkah dan suara yang kita lantangkan, terletak tanggung jawab besar untuk masa depan yang kita cita-citakan. Bersama, kita adalah kekuatan yang tak tergoyahkan—sebuah bara yang terus menyala, membakar semangat untuk terus belajar, bergerak, dan mengabdi.</p>
                    <p>Sebagai Presiden Mahasiswa, saya berdiri di sini bukan hanya sebagai pemimpin, tetapi sebagai kawan seperjuangan. Mari jadikan BEM ini bukan sekedar organisasi, melainkan sebuah ruang hidup, tempat kita memupuk ide-ide segar, memperjuangkan aspirasi, dan bersama-sama menciptakan perubahan nyata. Karena di balik setiap kunjungan dan aksi kita, terukir sejarah yang akan diwariskan.</p>
                    <p>Kepada setiap jiwa yang haus akan kemajuan, teruslah bergerak dan menginspirasi. Hidup Mahasiswa!</p>
                </div>
            </div>
            <!-- SAMBUTAN | WAKIL PRESIDEN MAHASISWA -->
            <div class="content">
                <h2>Rafi Bowo Raharjo</h2>
                <img src="../assets/images/ketuwakil/wapresma-bowo-transparent.png" alt="Wakil Presiden Mahasiswa | Rafi Bowo Raharjo">
                <strong>Wakil Presiden Mahasiswa</strong>
                <div class="content-text">
                    <p>Selamat datang di website resmi Badan Eksekutif Mahasiswa STIKOM Cipta Karya Informatika tahun 2024/2025! Kami sangat bangga dan bersemangat menyambut Anda di sini.</p>
                    <p>Sebagai wakil ketua BEM, kami berkomitmen untuk menghadirkan lingkungan kampus yang dinamis, inspiratif, dan mendukung pengembangan potensi setiap mahasiswa. Website ini adalah wujud dari komitmen kami untuk keterbukaan informasi dan sebagai sarana interaksi antara BEM, mahasiswa, dan seluruh civitas akademika STIKOM Cipta Karya Informatika.</p>
                    <p>Di sini, Anda akan menemukan berbagai informasi mengenai kegiatan, program kerja, serta wadah untuk menyalurkan ide dan aspirasi. Mari kita bersama-sama menciptakan suasana kampus yang produktif, kolaboratif, dan penuh inovasi untuk STIKOM Cipta Karya Informatika yang lebih maju.</p>
                </div>
            </div>
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
                            <strong>Adkesma CKI</strong>
                            <strong class="terlaksana">Terlaksana</strong>
                        </div>
                        <p>Advokasi dan Kesejahteraan Mahasiswa</p>
                        <img src="<?= $basePath; ?>assets/images/bem/proker-adkesma.png" alt="Adkesma CKI">
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
</body>
</html>