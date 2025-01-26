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
        <p class="breadcrumbs-active">Regional UKM</p>
    </div>

    <main>
        <div class="left">
            <!-- KEMENTERIAN -->
            <div class="content" id="kementerian">
                <h2>Regional UKM</h2>
                <div class="content-text">
                    <p>Regional UKM (Unit Kegiatan Mahasiswa) adalah kementerian yang menjembatani komunikasi dan koordinasi antara UKM di kampus. Kementerian ini berperan dalam memonitor dan mengevaluasi kegiatan UKM, mendukung promosi dan rekrutmen anggota baru, serta membangun jaringan kerja sama dengan pihak eksternal untuk mendukung kelancaran program UKM. Berikut tugas dan fungsi Regional UKM:</p>
                </div>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Komunikasi Antar UKM, menjadi jembatan komunikasi antara UKM kampus atau organisasi terkait.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Monitoring dan Evaluasi, mengawasi pelaksanaan kegiatan UKM untuk memastikan kelancaran dan keberhasilan program. Mereka juga melakukan evaluasi atas kegiatan yang telah berlangsung.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Promosi dan Rekrutmen, Regional UKM juga biasanya terlibat dalam promosi kegiatan UKM kepada mahasiswa baru, serta mengorganisir rekrutmen anggota baru.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Membangun Jaringan dan Kolaborasi: Mereka juga bertugas menjalin kerja sama dengan pihak eksternal seperti komunitas, kampus lain, atau sponsor untuk mendukung kegiatan UKM.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- VISI & MISI -->
            <div class="content" id="visimisi">
                <h2>Visi dan Misi</h2>
                <strong>Visi</strong>
                <p>Menjadi wadah yang inspiratif dan produktif bagi mahasiswa untuk mengembangkan potensi diri, kreativitas, dan kepedulian sosial, serta berkontribusi terhadap pembangunan masyarakat.</p>
                <strong>Misi</strong>
                <div class="content-text">
                    <table>
                        <tr>
                            <th>1.</th>
                            <td>Pengembangan Potensi, menyediakan program dan kegiatan yang mendukung pengembangan keterampilan dan pengetahuan mahasiswa.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td>Kreativitas dan Inovasi, mendorong mahasiswa untuk berinovasi dan berkreasi dalam berbagai bidang.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td>Kepedulian Sosial, melaksanakan kegiatan yang berdampak positif bagi masyarakat dan lingkungan sekitar.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td>Kolaborasi dan Jaringan, membangun jaringan kerja sama dengan berbagai pihak, baik internal kampus maupun eksternal.</td>
                        </tr>
                        <tr>
                            <th>5.</th>
                            <td>Peningkatan Kualitas, meningkatkan kualitas sumber daya manusia melalui pelatihan, seminar, dan workshop.</td>
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
                            <td><b>Studi Banding</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Studi Banding merupakan kegiatan pertukaran informasi antara suatu organisasi ke organisasi. Dalam kegiatan ini, suatu organisasi membahas tentang bagaimana proses organisasi mereka terjadi, yang terbagi sesuai divisinya masing-masing.</td>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <td><b>Seminar IT</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Seminar IT adalah sebuah acara atau pertemuan yang fokus pada berbagai topik terkait teknologi informasi. Dalam seminar ini, para ahli, praktisi, dan akademisi berbagi pengetahuan, pengalaman, dan penelitian terbaru di bidang IT.</td>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <td><b>Donor Darah</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Donor Darah adalah proses di mana seseorang secara sukarela memberikan darahnya untuk disimpan dan digunakan dalam transfusi atau untuk keperluan medis lainnya. Donor darah sangat penting untuk membantu pasien yang membutuhkan, seperti mereka yang menjalani operasi, pasien dengan penyakit kronis, atau mereka yang mengalami kecelakaan.</td>
                        </tr>
                        <tr>
                            <th>4.</th>
                            <td><b>Monitoring dan Evaluasi UKM</b></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Melakukan pemantauan terhadap progress keaktifan ukm, perkembangan program kerja , merekap hasil  kegiatan dari masing masing UKM.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="ukm">
                <h2>Unit Kegiatan Mahasiswa</h2>
                    <div class="ukm-image">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-cpc.png" alt="UKM CPC">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-it.png" alt="UKM IT">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-koker.png" alt="UKM KOKER">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-kwh.png" alt="UKM KWH">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-ldk.png" alt="UKM LDK">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-matras.png" alt="UKM MATRAS">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-olahraga.png" alt="UKM OLAHRAGA">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-pcr.png" alt="UKM PCR">
                    <img src="<?= $basePath; ?>assets/images/ukm/ukm-ssiktif.png" alt="UKM SSIKTIF">
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