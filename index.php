<?php
session_start();
if (!isset($_SESSION["erreur"]))
{
    echo "nop";
    $_SESSION['erreur'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/styleperso.css" rel="stylesheet">
    <link href="asset/css/menu.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/2bdd874a67.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">

<section class="bg-light truc-a-centrer " style="overflow: hidden; border-radius: 10% 10% 10% 10%; width: 30em;height: 30em; box-shadow: 5px 5px 5px black;">
   <div class="bg-success">
        <h1 style="text-align: center; color: white;">Accès serveur</h1>
    </div>
    <div class="m-2">
        <form action="asset/fonction/verificationmdp.php" method="post">
            <div class="form-group ">

                <label for="utilisateur" style="font-size: 1.4em;">Utilisateur</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>

                    <?php
                    if ($_SESSION["erreur"] == 1)
                    {
                        echo '
                            <input type="text" class="form-control is-invalid" name="user" id="inlineFormInputGroupUsername2" placeholder="Utilisateur">
                        <div class="invalid-feedback">
                            Nom d\'utilisateur ou mot de passe invalide
                        </div> <br>';
                    }
                    else
                    {
                        echo '<input type="text" class="form-control" name="user" id="inlineFormInputGroupUsername2" placeholder="Utilisateur">';
                    }
                    ?>

                </div>
            </div>

            <div class="form-group">
                <label for="Mot de passe" style="font-size: 1.4em;">Mot de passe</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <?php
                    if ($_SESSION["erreur"] == 1)
                    {
                        echo '
                               <input type="password" class="form-control is-invalid" name="pass" id="inlineFormInputGroupUsername2" placeholder="Mot de passe">';
                    }
                    else
                    {
                        echo '<input type="password" class="form-control" name="pass" id="inlineFormInputGroupUsername2" placeholder="Mot de passe">';
                    }
                    ?>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>

        </form>
    </div>
    <div>
        <img  class="displayed" src="asset/img/logo/logo.PNG" style="height: 30%;width: 30%;display:block; margin: auto;">
    </div>
</section>




</body>
</html>