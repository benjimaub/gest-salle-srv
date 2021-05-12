<?php
require_once("bddfonction.php");
session_start();

$req= bdd_select("SELECT id_utilisateur,mdp from utilisateur WHERE nom= :nom ",[
    "nom" => $_POST["user"]
]);


if (password_verify($_POST["pass"], $req[0]["mdp"])){
    session_start();
    $_SESSIONS["id"]= $req["id"];
    $_SESSION["name"]=$_POST["user"];
    $_SESSION['erreur'] = 0;
    header('Location: ../../dashboard.php');
}
else {
    $_SESSION['erreur'] = 1;
    echo $_SESSION['erreur'];
    header('Location: ../../index.php');
}
?>
