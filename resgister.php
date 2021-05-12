<?php
require_once("asset/fonction/bddfonction.php");

$mdp_hache = password_hash($_POST["mdp"], PASSWORD_DEFAULT);


echo $_POST["mdp"]."<br>";
echo $mdp_hache."<br>";

$bdd = bdd_insert("INSERT INTO utilisateur( nom ,mdp ) VALUE (:nom,:mdphash)", [
    "nom" => $_POST["name"],
    "mdphash" => $mdp_hache

    ]);
?>



<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">

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
<body>

<form action="resgister.php" method="post">

    <div>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="name">mdp: </label>
        <input type="text" name="mdp" id="mdp" required>
    </div>

    <div class="form-example">
        <input type="submit" value="Subscribe!">
    </div>


</form>


</body>

</html>