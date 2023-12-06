<?php

include '../configuration/configuration.php';
include '../models/client.php';


function getListeClients(){
     return Client :: getClients();
}
?>