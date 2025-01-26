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
        <p class="breadcrumbs-active">Bendahara</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Bendahara</h2>
                <div class="content-text">
                    <p>Bendahara adalah kementerian yang bertugas mengelola keuangan BEM secara transparan dan akuntabel. Kementerian ini menyusun laporan keuangan berkala, mengelola bukti transaksi, memantau kegiatan Dana Usaha, serta mengawasi aliran pemasukan dan pengeluaran untuk memastikan kelancaran finansial organisasi. Berikut tugas dan fungsi Bendahara:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Bertanggung jawab atas administrasi keuangan BEM STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Membuat laporan keuangan BEM STIKOM CKI secara berkala sehingga dapat diperiksa bila diperlukan.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Menandatangani bukti-bukti pengeluaran dan penerimaan uang.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Membuat dan mengumpulkan bukti-bukti tertulis pengeluaran uang yang berupa kuitansi dan lain sebagainnya.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Menerima dan menyimpan uang milik BEM STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>6.</th>
                            <td>Membuat laporan keuangan dan surat menyurat mengenai keuangan yang meliputi permintaan, permintaan mendadak, dan pengembalian.</td>
                        </tr>
                        <tr>
                            <th>7.</th>
                            <td>Me-monitor jalannya semua kegiatan Danus, serta mengontrol cashflow pemasukan dan pengeluaran.</td>
                        </tr>
                        <tr>
                            <th>8.</th>
                            <td>Membuat laporan keuangan BEM STIKOM CKI setiap bulan dan membuat LPJ keuangan pada akhir tahun bersama dengan pengurus BEM yang lain.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Mewujudkan pengelolaan keuangan BEM STIKOM CKI yang transparan, akuntable, dan efisien. Untuk mendukung tercapainya tujuan.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Mengelola pemasukan dan pengeluaran dengan jujur, professional , dan sesuai aturan yang berlaku.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Membuat laporan keuangan yang jelas, tepat waktu, dan mudah dipahami.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Mengoptimalkan alokasi dana untuk mendukung kegiatan organisasi secara efektif.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Menjaga kepercayaan anggota melalui transparansi dan komunikasi yang baik.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Memastikan pengunaan anggaran sesuai dengan prioritas dan kebutuhan organisasi.</td>
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
                            <td><b>Pembukuan</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Membuat laporan keuangan BEM STIKOM CKI secara berkala. Sehingga, dapat diperiksa bila diperlukan. Menandatangani bukti-bukti pengeluaran dan penerimaan uang. Membuat dan mengumpulkan bukti-bukti tertulis pengeluaran uang. Berupa kuitansi dan lain sebagainya. Menerima dan menyimpan keuangan milik BEM STIKOM CKI. Membuat laporan keuangan dan surat menyurat mengenai keuangan yang meliputi permintaan, permintaan mendadak, dan pengembalian.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>Penerbitan Laporan Keuangan</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Bertanggung jawab atas administrasi keuangan BEM STIKOM CKI. Membuat laporan keuangan BEM STIKOM CKI setiap bulan dan membuat LPJ keuangan pada akhir tahun bersama dengan pengurus BEM yang lain.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td><b>Iuran Wajib Pengurus (IWU)</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Uang kas anggota ini dipergunakan untuk pemasukan BEM dan sebagai dana tak terduga atau acara tertentu Meminta dana rutin yang berasal dari anggota BEM setiap bulan senilai Rp. 20.000 Jika telat membayar dalam 4-hari diawal bulan, maka akan di kenakan denda senilai Rp. 5.000.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td><b>Mengadakan Kegiatan Danus</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Kegiatan ini dilakukan agar BEM memiliki pemasukan tambahan yang nantinya bisa digunakan sebagai kas BEM. Untuk menutupi kekurangan dana ketika akan melaksanakan kegiatan. Me-monitor jalannya semua kegiatan Danus Bazar Ramadhan pada tanggal 14 Maret 2025 serta mengontrol cashflow pemasukan dan pengeluaran. Dana berasal dari hasil jualan Makanan & Minuman Senilai Rp.5000.00,- 1 pcs makanan : Manggo Cheese Pudding Minuman : Lemon Tea.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td><b>Pembuatan PDL</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Kegiatan ini dilakukan sebagai identitas dan ciri khas pengenal anggota BEM PDH berguna untuk kegiatan organisasi, baik formal maupun non-formal Dengan adanya PDH BEM menampilkan citra organisasi yang professional dan kekompakan, serta menciptakan rasa persatuan dan kebersamaan diantara anggota BEM. Anggaran dana pembuatan PDH berasal dari tabungan anggota BEM senilai Rp.195.000.</td>
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