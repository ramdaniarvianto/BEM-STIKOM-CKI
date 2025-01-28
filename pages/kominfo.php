<?php 
$titlebar = "BEM STIKOM CKI " . date("Y");
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages/') !== false ) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kominfo - <?= $titlebar; ?></title>
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
        <p class="breadcrumbs-active">Kominfo</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Kementerian Komunikasi dan Informasi</h2>
                <div class="content-text">
                    <p>Kominfo adalah kementerian yang bertugas mengelola sistem komunikasi dan informasi BEM. Tujuannya adalah memfasilitasi penyebaran informasi melalui media sosial dan mading kampus, serta mengembangkan konten digital di platform resmi BEM agar mahasiswa tetap terinformasi dengan baik mengenai kegiatan dan isu terkini di kampus. Berikut tugas dan fungsi Kominfo:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Mengaktifkan mading kampus agar teratur, rapi, dan informatif sebagai wadah informasi.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Memfasilitasi penyebaran informasi dari UKM, Hari Nasional, dan artikel melalui akun media sosial resmi BEM STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Membuat sistem publikasi dan penyebaran informasi BEM STIKOM CKI.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Mengerjakan desain website resmi dan sosial media BEM, seperti meng-update konten dan memperbaiki fitur yang diperlukan.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Menjadi kementerian yang inovatif dalam komunikasi dan informasi untuk mendukung transparansi dan akuntabilitas BEM.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Meningkatkan efektivitas penyebaran informasi melalui berbagai media.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Mengoptimalkan penggunaan platform digital untuk mendukung transparansi organisasi.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Berkolaborasi dengan divisi lain untuk menciptakan konten informatif dan menarik.</td>
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
                            <td><b>Social Media Creation</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Program kerja yang bisa menjadikan sosial media BEM STIKOM CKI terlihat kreatif, terstruktur, konsisten dan profesional. Menyusun dan menyiapkan desain konten media sosial BEM jauh hari sebelum dipublikasikan. Supaya terstruktur, sesuai tema dan konsisten. Program ini akan dilakukan kerjasama dengan divisi HUMAS perihal brief, topik konten dan timeline hari besar nasional.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>PlaDin (Platform Digital Informasi)</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Di era digital saat ini, Badan Eksekutif Mahasiswa (BEM) sebagai organisasi mahasiswa harus memiliki platform yang mampu memberikan informasi terkait program, kegiatan, dan pencapaian BEM secara real-time dan transparan.</td>
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