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
        <p class="breadcrumbs-active">Sekretaris</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Sekretaris</h2>
                <div class="content-text">
                    <p>Sekretaris adalah kementerian yang bertanggung jawab atas seluruh administrasi kesekretariatan BEM, mulai dari pengelolaan surat-menyurat, proposal, dan laporan kegiatan, hingga pengarsipan dokumen. Kementerian ini juga mengelola persiapan rapat, serta memastikan informasi tersampaikan kepada seluruh anggota BEM. Berikut tugas dan fungsi Sekretaris:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Bertanggung jawab penuh terhadap administrasi kesekretariatan, meliputi surat-menyurat, proposal, laporan pertanggungjawaban (LPJ), dan arsip lainnya.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Membuat laporan notulensi rapat dan menyebarluaskan hasilnya kepada anggota BEM.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Melakukan pengelolaan surat masuk dan keluar serta mencatat dokumen kelembagaan BEM.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Menyusun dan merapikan arsip serta aset kelembagaan BEM STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Mengatur dan memanajemen waktu rapat, termasuk persiapan surat peminjaman tempat dan alat.</td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <td>Menyusun jadwal kegiatan kelembagaan seperti acara, rapat, dan agenda UKM.</td>
                        </tr>
                        <tr>
                            <th>7.</th>
                            <td>Menyampaikan informasi dan masukan kepada ketua BEM terkait persoalan internal dan eksternal.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Total dalam kesekretariatan, rapi dalam pengarsipan, dan loyal dalam kepengurusan.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Total dalam menjalankan fungsi sekretaris secara umum.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Menciptakan rasa kekeluargaan tinggi untuk menjaga solidaritas antar anggota BEM.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Berperan sebagai sentral data dalam kegiatan administrasi dan menyediakan kebutuhan kesekretariatan.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Menunjang serta meningkatkan kinerja dan semangat kerja rekan-rekan BEM.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Membentuk internal organisasi yang memiliki loyalitas tinggi terhadap kenyamanan sekretariat.</td>
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
                            <td><b>Pembuatan Struktur Organisasi</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Membuat dan memperbarui struktur organisasi BEM secara visual untuk memudahkan pengenalan setiap posisi kepada civitas akademika.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>Pengelolaan Surat Masuk dan Keluar</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Mengatur pendataan dan dokumentasi surat masuk serta keluar untuk memastikan transparansi administrasi.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td><b>Pengarsipan Dokumen Kesekretariatan</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Menyusun dan merapikan semua dokumen organisasi, termasuk laporan, izin, dan peraturan, untuk memudahkan akses saat dibutuhkan.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td><b>Penyusunan Jadwal Kegiatan</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Menyusun jadwal rapat, acara BEM, dan kegiatan UKM, memastikan koordinasi dan manajemen waktu yang efektif.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td><b>Notulen Rapat</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Membuat laporan notulensi pada setiap rapat pengurus dan menyebarluaskan hasilnya untuk memastikan informasi sampai ke semua anggota.</td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <td><b>Absensi</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Mengelola daftar hadir untuk setiap kegiatan resmi BEM, memastikan kehadiran anggota terdokumentasi dengan baik.</td>
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