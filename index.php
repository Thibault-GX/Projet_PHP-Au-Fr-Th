<?php include 'controllerTitle.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Cinzel|Orbitron" rel="stylesheet">
         <link rel="icon" type="image/x-icon" href="assets/img/logo.png" /><link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <title><?= $tab; ?></title>
    </head>
    <body>
           <!--Navbar -->
            <nav class="navbar fixed-top navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
            <a href="index.php"><img class="logo" src="assets/img/logo.png" alt="logo ocordo" title="logo Ocordo"/></a>
                   
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Navbar fin-->
            <?php
// appel du controller php
            include 'index_controller.php';
            ?>
                    </div>
                </div>
            </nav>
        <!-- Mise en place de l'intro video -->
        <div class="container content-page">
            <?= $xml->page[$page]->content; ?>
            <?php if (isset($_POST['send']) && (count($formError) == 0)) { ?>
                <?php include('sendMail.php') ?>
            <?php } else { ?>
                <p><?= !empty($formError['your-name']) ? $formError['your-name'] : '' ?></p>
                <p><?= !empty($formError['your-tel-615']) ? $formError['your-tel-615'] : '' ?></p>
                <p><?= !empty($subjectError) ? $subjectError : '' ?></p>
                <p><?= !empty($countryError) ? $countryError : '' ?></p>
                <p><?= !empty($formError['your-message']) ? $formError['your-message'] : '' ?></p>
                <p><?= !empty($emailError) ? $emailError : '' ?></p>
            <?php } ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <div>
            <?php
            include 'controlFooter.php';
            ?>
        </div>
</body>
</html>