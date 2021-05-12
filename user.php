<?php

$pagetitle = "Utilisateurs";

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
            <th style="width: 30%" scope="col">Utilisateurs</th>
            <th style="width: 30%" scope="col">Statut</th>
            <th style="width: 30%" scope="col">Badge</th>
            <th style="width: 10%" scope="col"> </th>

        </thead>
        <tbody>
        <tr>
            <td>Benji le bg</td>
            <td>Super admin</td>
            <td>1234 <button type="button" class="btn btn-outline-light" style="vertical-align: baseline; margin-left: 10px"><i class="fas fa-pause"></i></button></td>
            <td><button type="button" class="btn btn-outline-light" style="vertical-align: baseline" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"><i class="fas fa-times"></i></button>
            </td>
        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        </tbody>
    </table>




<?php include("asset/include/footer.php");?>