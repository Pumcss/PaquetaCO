<?php

namespace BO;

class MaitreEntrepriseBO
{
    private int $idMaitre;
    private string $nomMaitre;
    private string $prenomMaitre;
    private string $telMaitre;
    private string $mailMaitre;

    public function __construct($idMaitre, $nomMaitre, $prenomMaitre, $telMaitre, $mailMaitre) {
        $this->idMaitre = $idMaitre;
        $this->nomMaitre = $nomMaitre;
        $this->prenomMaitre = $prenomMaitre;
        $this->telMaitre = $telMaitre;
        $this->mailMaitre = $mailMaitre;}

    public function ToString() {
        return "MaitreEntreprise - ID: $this->idMaitre, Nom: $this->nomMaitre, Prenom: $this->prenomMaitre, Tel: $this->telMaitre, Mail: $this->mailMaitre";
    }
}