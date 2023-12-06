<?php
class Client{
    private $numclient;
    private $nomclient;
    private $prenomclient;
    private $adresse1client;
    private $adresse2client;
    private $codepostalclient;
    private $villeclient;
    private $numtel1client;
    private $numtel2client;
    private $emailclient;

    
    public function __construct($nomclient,$prenomclient,$adresse1client,$adresse2client,$codepostalclient,$villeclient,$numtel1client,$numtel2client,$emailclient)
    {
        $this->numclient = 0;
        $this->nomclient = $nomclient;
        $this->prenomclient = $prenomclient;
        $this->adresse1client = $adresse1client;
        $this->adresse2client = $adresse2client;
        $this->codepostalclient = $codepostalclient;
        $this->villeclient = $villeclient;
        $this->numtel1client = $numtel1client;
        $this->numtel2client = $numtel2client;
        $this->emailclient = $emailclient;
    }
    public function enregistrerClient()
    {
        global $db;
        $result = false;

        $nomclient = $this->nomclient;
        $prenomclient = $this->prenomclient;
        $adresse1client = $this->adresse1client;
        $adresse2client = $this->adresse2client;
        $codepostalclient = $this->codepostalclient;
        $villeclient = $this->villeclient;
        $numtel1client = $this->numtel1client;
        $numtel2client = $this->numtel2client;
        $emailclient = $this->emailclient;

        $requete = "INSERT INTO client (nomclient, prenomclient, adresse1client, adresse2client, codepostalclient, villeclient, numtel1client, numtel2client, emailclient) VALUES (:nomclient, :prenomclient, :adresse1client, :adresse2client, :codepostalclient, :villeclient, :numtel1client, :numtel2client, :emailclient)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':nomclient' => $nomclient,
                ':prenomclient' => $prenomclient,
                ':adresse1client' => $adresse1client,
                ':adresse2client' => $adresse2client,
                ':codepostalclient' => $codepostalclient,
                ':villeclient' => $villeclient,
                ':numtel1client' => $numtel1client,
                ':numtel2client' => $numtel2client,
                ':emailclient' => $emailclient
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getClients(){
        global $db;
        $requete = 'SELECT * FROM client WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $clients = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $client = new Client($data['nomClient'],$data['prenomClient'],$data['adresse1Client'],$data['adresse2Client'],$data['codePostalClient'],$data['villeClient'],$data['numTel1Client'],$data['numTel2Client'],$data['emailClient']);
                $client = $client->setNumclient($data['numClient']);
                array_push($clients,$client);
            }
            return $clients;
        }
        else return [];
    }


    /**
     * Get the value of numclient
     */ 
    public function getNumclient()
    {
        return $this->numclient;
    }

    /**
     * Set the value of numclient
     *
     * @return  self
     */ 
    public function setNumclient($numclient)
    {
        $this->numclient = $numclient;

        return $this;
    }

    /**
     * Get the value of nomclient
     */ 
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set the value of nomclient
     *
     * @return  self
     */ 
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get the value of prenomclient
     */ 
    public function getPrenomclient()
    {
        return $this->prenomclient;
    }

    /**
     * Set the value of prenomclient
     *
     * @return  self
     */ 
    public function setPrenomclient($prenomclient)
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    /**
     * Get the value of adresse1client
     */ 
    public function getAdresse1client()
    {
        return $this->adresse1client;
    }

    /**
     * Set the value of adresse1client
     *
     * @return  self
     */ 
    public function setAdresse1client($adresse1client)
    {
        $this->adresse1client = $adresse1client;

        return $this;
    }

    /**
     * Get the value of adresse2client
     */ 
    public function getAdresse2client()
    {
        return $this->adresse2client;
    }

    /**
     * Set the value of adresse2client
     *
     * @return  self
     */ 
    public function setAdresse2client($adresse2client)
    {
        $this->adresse2client = $adresse2client;

        return $this;
    }

    /**
     * Get the value of codepostalclient
     */ 
    public function getCodepostalclient()
    {
        return $this->codepostalclient;
    }

    /**
     * Set the value of codepostalclient
     *
     * @return  self
     */ 
    public function setCodepostalclient($codepostalclient)
    {
        $this->codepostalclient = $codepostalclient;

        return $this;
    }

    /**
     * Get the value of villeclient
     */ 
    public function getVilleclient()
    {
        return $this->villeclient;
    }

    /**
     * Set the value of villeclient
     *
     * @return  self
     */ 
    public function setVilleclient($villeclient)
    {
        $this->villeclient = $villeclient;

        return $this;
    }

    /**
     * Get the value of numtel1client
     */ 
    public function getNumtel1client()
    {
        return $this->numtel1client;
    }

    /**
     * Set the value of numtel1client
     *
     * @return  self
     */ 
    public function setNumtel1client($numtel1client)
    {
        $this->numtel1client = $numtel1client;

        return $this;
    }

    /**
     * Get the value of numtel2client
     */ 
    public function getNumtel2client()
    {
        return $this->numtel2client;
    }

    /**
     * Set the value of numtel2client
     *
     * @return  self
     */ 
    public function setNumtel2client($numtel2client)
    {
        $this->numtel2client = $numtel2client;

        return $this;
    }

    /**
     * Get the value of emailclient
     */ 
    public function getEmailclient()
    {
        return $this->emailclient;
    }

    /**
     * Set the value of emailclient
     *
     * @return  self
     */ 
    public function setEmailclient($emailclient)
    {
        $this->emailclient = $emailclient;

        return $this;
    }
}
?>