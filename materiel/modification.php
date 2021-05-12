<?php

$pagetitle = "Modification";

$pagelocation = "../";
include("../asset/include/head.php");

?>

<div style ="background-color: #F7F7F7; width: 100%;box-shadow: 11px 12px 20px -7px rgba(0,0,0,0.21);margin-top: 2em;margin-bottom: 2em; border-radius: 10px" class="p-2";>
    <form class="form-inline m-0 p-0">
        <div class="form-group mx-sm-3" >
            <label for="inputPassword2" class="sr-only">Rechercher ou ajouter</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder="Rechercher ou ajouter">
        </div>
        <button type="submit" class="btn btn-primary mr-3"><i class="fas fa-search"></i> Rechercher</button>
        <button type="submit" class="btn btn-outline-dark"><i class="fas fa-plus"></i> Ajouter</button>
    </form>
</div>
<table  class="table text-light">
    <thead>
    <tr>
        <th style="width: 70%" scope="col">Matériel</th>
        <th style="width: 30%" scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr style="/*border: 4px solid magenta">
        <td class="" style="/*border: 4px solid purple">Ecran</td>
        <td class="" style="/*border: 4px solid red">

                <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-times"></i></button>
                <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-qrcode"></i></button>

        </td>
    </tr>
    <tr>
        <td>cable</td>
        <td>
            <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-times"></i></button>
            <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-qrcode"></i></button> </td>
    </tr>
    <tr>
        <td>marteau</td>
        <td>
            <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-times"></i></button>
            <button type="button" class="btn btn-outline-light" style="vertical-align: baseline"> <i class="fas fa-qrcode"></i></button></td>
    </tr>
    </tbody>
</table>



<?php include("../asset/include/footer.php");?>
