
<?php

$pagetitle = "Dashboard";
$pagelocation = "";
include("asset/include/head.php");


?>


<div class="d-flex flex-row justify-content-between" style="border: magenta 1px solid; height: 35em; ">
    <div class="p-2" style="border: red 1px solid">
        <a href="histo_acces.php">
            <div class="card " style="width: 25em; height: 4S0em; margin-top: 2em;">
                <div class="card-body">
                    <p class="card-text">
                    <table  class="table text-primary" style="text-align: center">
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
                    </p>
                </div>
            </div>
        </a>
    </div>

    <div class="p-2" style="border: blueviolet 1px solid; margin-bottom: 6em">
        <a href="materiel/emprunts_en_cours.php">
            <div class="card" style="width: 55em; margin-top: 2em; border: orange 1px solid">
                <div class="card-body">
                    <p class="card-text">
                    <table class="table table-striped text-primary" style="text-align: center">
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
                    </p>
                </div>
            </div>
        </a>

        <div class="test">
            <a class="test" href="materiel/emprunts_en_cours.php" >
                <div class="card test" style="width: 55em; margin-top: 2em; border: orange 1px solid">
                    <div class="card-body">
                        <p class="card-text">
                        <table class="table table-striped text-primary" style="text-align: center">
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
                        </p>
                    </div>
                </div>
            </a>


        </div>


    </div>
</div>







<?php include("asset/include/footer.php");?>
