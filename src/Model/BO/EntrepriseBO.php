<?php

namespace BO;

class EntrepriseBO
{
    private $idEntre;
    private $nomEntre;
    private $adresseEntre;
    private $villeEntre;
    private $codePostEntre;

    public function __construct($idEntre, $nomEntre, $adresseEntre, $villeEntre, $codePostEntre) {
        $this->idEntre = $idEntre;
        $this->nomEntre = $nomEntre;
        $this->adresseEntre = $adresseEntre;
        $this->villeEntre = $villeEntre;
        $this->codePostEntre = $codePostEntre;}


    public function ToString() {
        return "Entreprise - ID: $this->idEntre, Nom: $this->nomEntre, Adresse: $this->adresseEntre, Ville: $this->villeEntre, Code Postal: $this->codePostEntre";
    }
}