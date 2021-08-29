<?php
error_reporting(0);
require_once "classes/UserService.php";
$user = new UserService();

if($_SESSION['loggedIn']) {
    $Avatar =  $_SESSION['managername'];
}
?>

<header class="header">
<div class="container-fluid bg-light shadow-sm ">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img height="40" src="img/logo.png" alt="logo" title="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-4 py-1">
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="index.php">Főoldal</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="boatlist.php">Csónakok</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="gallery.php">Képgaléria</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="aboutrib.php">Bemutatkozó</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="contact.php">Kapcsolat</a>
                        </li>
                        <?php  if($_SESSION['loggedIn']) {?>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="orderlist.php"><i class="icons fas fa-user mr-2"></i>
                                <?=$Avatar?></a>
                        </li>
                        <li class="nav-item">
                            <a class="text-uppercase nav-link" href="logout.php">Kilépés</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
