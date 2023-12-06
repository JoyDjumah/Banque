CREATE TABLE IF NOT EXISTS Client (
    numClient INT  NOT NULL AUTO_INCREMENT,
    nomClient VARCHAR (120) NOT NULL,
    prenomClient VARCHAR (120) NOT NULL,
    adresse1Client VARCHAR (120) NOT NULL,
    adresse2Client VARCHAR (120),
    codePostalClient VARCHAR (50) NOT NULL,
    villeClient VARCHAR (60) NOT NULL,
    numTel1Client INT NOT NULL,
    numTel2Client INT,
    emailClient VARCHAR(150) NOT NULL,
    PRIMARY KEY (numClient)
);