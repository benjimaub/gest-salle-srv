<?php
if ($pagetitle == "")
{
  $pagetitle = "dashboard";
}
if ($pagelocation == "")
{
    $pagelocation = "";
}


?>

<head>
    <meta charset="UTF-8">
    <title><?= $pagetitle ?></title>
    <link href="<?= $pagelocation ?>asset/css/style.css" rel="stylesheet">
    <link href="<?= $pagelocation ?>asset/css/styleperso.css" rel="stylesheet">
    <link href="<?= $pagelocation ?>asset/css/menu.css" rel="stylesheet">


    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/2bdd874a67.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-light">
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav class="bg-primary" id="sidebar">
        <div class="sidebar-header text-center">
            <h3><a href="././dashboard.php" class="menuhover">Menu</a></h3>
        </div>


        <ul class="list-unstyled components bg-primary">
            <li class="active">
                <a href="<?= $pagelocation ?>dashboard.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                <a href="<?= $pagelocation ?>histo_acces.php"><i class="fas fa-history"></i> Historique d'accès</a>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-toolbox"></i> Matériel</a>
                <ul class="collapse list-unstyled bg-warning" id="homeSubmenu">
                    <li>
                        <a href="<?= $pagelocation ?>materiel/emprunts_en_cours.php">Emprunt en cours</a>
                    </li>
                    <li>
                        <a href="<?= $pagelocation ?>materiel/historique_emprunts.php">Historique d'emprunt</a>
                    </li>
                    <li>
                        <a href="<?= $pagelocation ?>materiel/modification.php">Modification</a>
                    </li>
                </ul>
            </li>
            <li>
            <a href="<?= $pagelocation ?>user.php"><i class="fas fa-users"></i> Utilisateur</a>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="border-radius: 10px">
            <div class="d-flex flex-row w-100">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex flex-row justify-content-between w-100">
                        <div class="m-0">
                            <button type="button" id="sidebarCollapse" class="navbar-btn bg-primary" style="margin-right: 5em;">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                         <div>
                            <h2 class="m-0"> <?=$pagetitle ?></h2>
                         </div>

                        <div class=" d-flex flex-row" >
                            <h3 class="mr-2">Jean Toto</h3>
                            <p class="m-0 p-0"><button type="button" class="btn btn-outline-light" style="vertical-align: baseline";><i class="fas fa-sign-out-alt"></i> Déconnexion</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

