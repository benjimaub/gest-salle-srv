<?php

$pagetitle = "Historique accès";

$pagelocation = "";
include("asset/include/head.php");

?>

<div style ="background-color: #F7F7F7; width: 100%;box-shadow: 11px 12px 20px -7px rgba(0,0,0,0.21);margin-top: 2em;margin-bottom: 2em; border-radius: 10px" class="p-2";>
    <form class="form-inline m-0 p-0">
        <div class="form-group mx-sm-3" >
            <label for="inputPassword2" class="sr-only">Rechercher</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder="Rechercher">
        </div>
        <button type="submit" class="btn btn-primary mr-3"><i class="fas fa-search"></i> Rechercher</button>
    </form>
</div>
<table  class="table text-light" style="text-align: center">
    <thead>
    <tr>
        <th style="width: 50%" scope="col"><i class="fas fa-clock"></i> Date et l'heure</th>
        <th style="width: 50%" scope="col"><i class="fas fa-user"></i> Utilisateurs</th>
    </tr>
    </thead>
    <tbody>
    <tr style="/*border: 4px solid magenta">
        <td>21/12/2012 12:00</td>
        <td>Toto</td>
    </tr>
    </tbody>
</table>



<?php include("asset/include/footer.php");?>
