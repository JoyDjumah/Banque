<?php

include '../configuration/configuration.php';
include '../models/Client.php';

$nomClient = $_POST['nomClient'];
$prenomClient = $_POST['prenomClient'];
$adresse1Client = $_POST['adresse1Client'];
$adresse2Client = $_POST['adresse2Client'];
$codePostalClient = $_POST['codePostalClient'];
$villeClient = $_POST['villeClient'];
$numTel1Client = $_POST['numTel1Client'];
$numTel2Client = $_POST['numTel2Client'];
$emailClient = $_POST['emailClient'];

$Client = new Client($nomClient, $prenomClient, $adresse1Client,$adresse2Client,$codePostalClient,$villeClient,$numTel1Client,$numTel2Client,$emailClient);
if ($Client -> enregistrerClient()){
    header("Location:../views/enregistrerClient.php");
}