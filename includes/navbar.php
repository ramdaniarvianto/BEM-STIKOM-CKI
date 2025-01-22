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
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/navbar.css">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <a href="<?= $basePath; ?>index.php" class="nav-logo">
            <img src="<?= $basePath; ?>assets/images/logo/logobem-home.png" alt="Logo BEM Home">
            <span>BEM STIKOM CKI</span>
        </a>
        <ul class="nav-menu">
            <li><a href="<?= $basePath; ?>index.php">Home</a></li>
            <ul class="nav-dropdown">
                <li><a class="nav-d nav-d-ml">Tentang<svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></a></li>
                <ul class="nav-dropdown-content">
                    <li><a href="<?= $basePath; ?>pages/proker.php">Program Kerja</a></li>
                    <li><a href="<?= $basePath; ?>pages/filosofi.php">Filosofi Logo</a></li>
                </ul>
            </ul>
            <ul class="nav-dropdown">
                <li><a class="nav-d">Struktur Organisasi<svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></a></li>
                <ul class="nav-dropdown-content">
                    <li><a href="">Sekretaris</a></li>
                    <li><a href="">Bendahara</a></li>
                    <li><a href="">Humas</a></li>
                    <li><a href="">Adkesma</a></li>
                    <li><a href="">Depkominfo</a></li>
                    <li><a href="">Regional UKM</a></li>
                </ul>
            </ul>
        </ul>
        <!-- CHECKBOX FOR SIDEBAR -->
        <input type="checkbox" name="sidebar-active" id="sidebar-active">
        <!-- OPEN SIDEBAR BUTTON -->
        <label for="sidebar-active">
            <svg id="open-sidebar-button" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </label>
        <!-- SIDEBAR -->
        <div class="sidebar">
            <!-- CLOSE SIDEBAR BUTTON -->
            <div class="sidebar-head">
                <span>Menu</span>
                <label for="sidebar-active">
                    <svg id="close-sidebar-button" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </label>
            </div>
            <ul class="sidebar-menu">
                <li><a href="<?= $basePath; ?>index.php">Home</a></li>
                <ul class="sidebar-dropdown">
                    <li><a class="sidebar-d">Tentang <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></a></li>
                    <ul class="sidebar-dropdown-content">
                        <li><a href="<?= $basePath; ?>pages/proker.php">Program Kerja</a></li>
                        <li><a href="<?= $basePath; ?>pages/filosofi.php">Filosofi Logo</a></li>
                    </ul>
                </ul>
                <ul class="sidebar-dropdown">
                    <li><a class="sidebar-d">Struktur Organisasi <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></a></li>
                    <ul class="sidebar-dropdown-content">
                        <li><a href="">Sekretaris</a></li>
                        <li><a href="">Bendahara</a></li>
                        <li><a href="">Humas</a></li>
                        <li><a href="">Adkesma</a></li>
                        <li><a href="">Depkominfo</a></li>
                        <li><a href="">Regional UKM</a></li>
                    </ul>
                </ul>
            </ul>
        </div>
        <!-- CLOSE SIDEBAR -->
        <label for="sidebar-active" id="overlay"></label>
    </nav>
</body>
</html>