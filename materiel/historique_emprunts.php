<?php

$pagetitle = "Historique des emprunts";

$pagelocation = "../";
include("../asset/include/head.php");

?>

    <table class="table table-striped text-light" style="text-align: center; margin-top: 3em;">
        <thead>
        <tr >
            <th style="width: 33%;" scope="col">Materiel</th>
            <th style="width: 33%;" scope="col">Utilisateur</th>
            <th style="width: 33%;" scope="col">Date, Heure</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Ecran</td>
            <td>Jean Toto</td>
            <td>12/12/2020, 14:12</td>
        </tr>
        <tr>
            <td>Cable</td>
            <td>Gerard</td>
            <td>23/01/2021, 15:28</td>
        </tr>
        <tr>
            <td>Marteau</td>
            <td>René</td>
            <td>15/02/2021, 10:34</td>
        </tr>
        </tbody>
    </table>


<?php include("../asset/include/footer.php");?>