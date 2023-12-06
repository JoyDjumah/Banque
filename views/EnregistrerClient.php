<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregistrement d'un Client</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
    <?php include '../includes/assets.php';
?>
</head>
<body>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeClients.php" ?>
    <div class="text-center"><h1>AJOUTER UN CLIENT</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/enregistrerClient.php" method="POST">
                <section class="row" style="margin: 15px;">
                    <div class="col-sm-6">
                        <!-- <label class="form-label">Num du Client</label>
                        <input name="numClient" type="number" class="form-control" required> -->
                        <label for="">Nom</label>
                        <input name="nomClient" type="text" class="form-control" required>
                        <label class="form-label">Prenom</label>
                        <input name="prenomClient" type="text" class="form-control" required>
                        <label class="form-label">Adresse 1</label>
                        <input name="adresse1Client" type="text" class="form-control" required>
                        <label class="form-label">Adresse 2</label>
                        <input name="adresse2Client" type="text" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Ville</label>
                        <input name="villeClient" type="text" class="form-control" required>
                        <label for="">Numero telephone 1</label>
                        <input name="numTel1Client" type="number" class="form-control" required>
                        <label for="">Numero telephone 2</label>
                        <input name="numTel2Client" type="number" class="form-control" >
                        <label class="form-label">Email</label>
                        <input name="emailClient" type="email" class="form-control" required>
                        <label class="form-label">Code Postal</label>
                        <input name="codePostalClient" type="text" class="form-control" required>
                    </div>
                </section>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button type="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>
        </div> 
        <div class="col-2"></div>
    </div>
    <br>
    <div class="mx-3">
        <h2 class="text-center"> NOS CLIENTS</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Num</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse 1</th>
                    <th>Adresse 2</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Numero Tel 1</th>
                    <th>Numero Tel 2</th>
                    <th>Email</th>
                </tr>
                <?php
                $Clients = getListeClients();
                for ($i = 0; $i < count($clients); $i++)  {
                    echo "<tr>";
                    // echo "<th scope =\"row\">".$Clients[$i]->getNumlocation()."</th>";
                    echo "<td>" .$clients[$i]->getNumclient()."</td>";
                    echo "<td>" .$clients[$i]->getNomclient()."</td>";
                    echo "<td>" .$clients[$i]->getPrenomclient()."</td>";
                    echo "<td>" .$clients[$i]->getAdresse1client()."</td>";
                    echo "<td>" .$clients[$i]->getAdresse2client()."</td>";
                    echo "<td>" .$clients[$i]->getCodepostalclient()."</td>";
                    echo "<td>" .$clients[$i]->getVilleclient()."</td>";
                    echo "<td>" .$clients[$i]->getNumtel1client()."</td>";
                    echo "<td>" .$clients[$i]->getNumtel2client()."</td>";
                    echo "<td>" .$clients[$i]->getEmailclient()."</td>";
                }            
                ?>
            </thead>
        </table>
    </div>
</body>

</html>