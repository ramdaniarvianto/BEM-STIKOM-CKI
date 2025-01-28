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
    <link rel="icon" href="assets/images/ico/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "includes/navbar.php"; ?>

    <header>
        <h1>
            Selamat Datang,<br>
            <span>
                Website BEM STIKOM CKI <br>
                Kabinet Dharma Satvavira Dialektika
            </span>
        </h1>
        <img src="assets/images/bem/raker.png" alt="BEM STIKOM CKI 2024/2025">
    </header>

    <main>
        <div class="jumbotron">
            <div class="jumbotron-image">
                <img src="assets/images/ketuwakil/rajabowo.png" alt="Presiden dan Wakil Presiden Mahasiswa BEM STIKOM CKI">
            </div>
            <div class="jumbotron-text">
                <h2>
                    Presiden dan Wakil Presiden <br>
                    Mahasiswa STIKOM CKI
                </h2>
                <p><a href="#sambutan">Sambutan</a></p>
            </div>
        </div>

        <div class="sambutan-wrapper" id="sambutan">
            <!-- SAMBUTAN PRESIDEN MAHASISWA -->
            <div class="sambutan">
                <div class="sambutan-image">
                    <img src="assets/images/ketuwakil/presma-raja-transparent.png" alt="Presiden Mahasiswa | Danendra Satriyohadi Notonegoro">
                    <h2>Danendra Satriyohadi Notonegoro</h2>
                    <strong>Presiden Mahasiswa</strong>
                </div>
                <div class="sambutan-text">
                    <p>Salam Perubahan!</p>
                    <p>Mahasiswa sekalian, di tangan kita, perubahan adalah sebuah kepastian. Dalam setiap langkah dan suara yang kita lantangkan, terletak tanggung jawab besar untuk masa depan yang kita cita-citakan. Bersama, kita adalah kekuatan yang tak tergoyahkan—sebuah bara yang terus menyala, membakar semangat untuk terus belajar, bergerak, dan mengabdi.</p>
                    <p>Sebagai Presiden Mahasiswa, saya berdiri di sini bukan hanya sebagai pemimpin, tetapi sebagai kawan seperjuangan. Mari jadikan BEM ini bukan sekedar organisasi, melainkan sebuah ruang hidup, tempat kita memupuk ide-ide segar, memperjuangkan aspirasi, dan bersama-sama menciptakan perubahan nyata. Karena di balik setiap kunjungan dan aksi kita, terukir sejarah yang akan diwariskan.</p>
                    <p>Kepada setiap jiwa yang haus akan kemajuan, teruslah bergerak dan menginspirasi. Hidup Mahasiswa!</p>
                </div>
            </div>
            <!-- SAMBUTAN WAKIL PRESIDEN MAHASISWA -->
            <div class="sambutan">
                <div class="sambutan-image">
                    <img src="assets/images/ketuwakil/wapresma-bowo-transparent.png" alt="Wakil Presiden Mahasiswa | Rafi Bowo Raharjo">
                    <h2>Rafi Bowo Raharjo</h2>
                    <strong>Wakil Presiden Mahasiswa</strong>
                </div>
                <div class="sambutan-text">
                    <p>Selamat datang di website resmi Badan Eksekutif Mahasiswa STIKOM Cipta Karya Informatika tahun 2024/2025! Kami sangat bangga dan bersemangat menyambut Anda di sini.</p>
                    <p>Sebagai wakil ketua BEM, kami berkomitmen untuk menghadirkan lingkungan kampus yang dinamis, inspiratif, dan mendukung pengembangan potensi setiap mahasiswa. Website ini adalah wujud dari komitmen kami untuk keterbukaan informasi dan sebagai sarana interaksi antara BEM, mahasiswa, dan seluruh civitas akademika STIKOM Cipta Karya Informatika.</p>
                    <p>Di sini, Anda akan menemukan berbagai informasi mengenai kegiatan, program kerja, serta wadah untuk menyalurkan ide dan aspirasi. Mari kita bersama-sama menciptakan suasana kampus yang produktif, kolaboratif, dan penuh inovasi untuk STIKOM Cipta Karya Informatika yang lebih maju.</p>
                </div>
            </div>
        </div>

        <div class="kementerian">
            <div class="kementerian-head">
                <h2>Kementerian</h2>
                <p>Kementerian di Kabinet Dharma Satvavira Dialektika yang memiliki peran penting dengan tugas, fokus, program kerja, dan visi misi tersendiri.</p>
            </div>
            <div class="kementerian-divisi">
                <!-- SEKRETARIS -->
                <details>
                    <summary class="sekretaris">Sekretaris <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Sekretaris adalah kementerian yang bertanggung jawab atas seluruh administrasi kesekretariatan BEM, mulai dari pengelolaan surat-menyurat, proposal, dan laporan kegiatan, hingga pengarsipan dokumen. Kementerian ini juga mengelola persiapan rapat, serta memastikan informasi tersampaikan kepada seluruh anggota BEM.</p>
                </details>
                <!-- BENDAHARA -->
                <details>
                    <summary>Bendahara <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Bendahara adalah kementerian yang bertugas mengelola keuangan BEM secara transparan dan akuntabel. Kementerian ini menyusun laporan keuangan berkala, mengelola bukti transaksi, memantau kegiatan Dana Usaha, serta mengawasi aliran pemasukan dan pengeluaran untuk memastikan kelancaran finansial organisasi.</p>
                </details>
                <!-- HUMAS -->
                <details>
                    <summary>Humas <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Humas (Hubungan Masyarakat) adalah kementerian yang berperan sebagai penghubung antara BEM dan mahasiswa serta pihak eksternal. Tugas utama Humas adalah menyebarluaskan informasi kegiatan BEM, membangun citra positif organisasi, serta mengelola komunikasi dan interaksi dengan masyarakat kampus agar terjalin partisipasi aktif dan dukungan yang kuat.</p>
                </details>
                <!-- ADKESMA -->
                <details>
                    <summary>Adkesma <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Adkesma (Advokasi Kesejahteraan Mahasiswa) adalah kementerian yang mengadvokasi kepentingan dan kesejahteraan mahasiswa di lingkungan kampus. Kementerian ini mendengarkan aspirasi mahasiswa, menyampaikan isu-isu kesejahteraan kepada pihak terkait, serta memberikan pelayanan advokasi dalam hal akademik, sosial, dan fasilitas kampus untuk memastikan terciptanya lingkungan yang nyaman dan mendukung bagi seluruh mahasiswa.</p>
                </details>
                <!-- DEPKOMINFO -->
                <details>
                    <summary>Depkominfo <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Depkominfo (Departemen Komunikasi dan Informasi) adalah kementerian yang mengelola sistem komunikasi dan informasi BEM. Kementerian ini bertugas memfasilitasi penyebaran informasi melalui media sosial dan mading kampus, serta mengembangkan konten digital di platform resmi BEM agar mahasiswa tetap terinformasi dengan baik mengenai kegiatan dan isu terkini di kampus.</p>
                </details>
                <!-- REGIONAL UKM -->
                <details>
                    <summary class="regional-ukm">Regional UKM <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></summary>
                    <p>Regional UKM (Unit Kegiatan Mahasiswa) adalah kementerian yang menjembatani komunikasi dan koordinasi antara UKM di kampus. Kementerian ini berperan dalam memonitor dan mengevaluasi kegiatan UKM, mendukung promosi dan rekrutmen anggota baru, serta membangun jaringan kerja sama dengan pihak eksternal untuk mendukung kelancaran program UKM.</p>
                </details>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>
</html>