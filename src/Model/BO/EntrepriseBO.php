<?php

namespace BO;

class EntrepriseBO
{
    private int $idEntre;
    private string $nomEntre;
    private string $adresseEntre;
    private string $villeEntre;
    private int $codePostEntre;

    /**
     * @return int
     */
    public function getIdEntre(): int
    {
        return $this->idEntre;
    }

    /**
     * @param int $idEntre
     */
    public function setIdEntre(int $idEntre): void
    {
        $this->idEntre = $idEntre;
    }

    /**
     * @return string
     */
    public function getNomEntre(): string
    {
        return $this->nomEntre;
    }

    /**
     * @param string $nomEntre
     */
    public function setNomEntre(string $nomEntre): void
    {
        $this->nomEntre = $nomEntre;
    }

    /**
     * @return string
     */
    public function getAdresseEntre(): string
    {
        return $this->adresseEntre;
    }

    /**
     * @param string $adresseEntre
     */
    public function setAdresseEntre(string $adresseEntre): void
    {
        $this->adresseEntre = $adresseEntre;
    }

    /**
     * @return string
     */
    public function getVilleEntre(): string
    {
        return $this->villeEntre;
    }

    /**
     * @param string $villeEntre
     */
    public function setVilleEntre(string $villeEntre): void
    {
        $this->villeEntre = $villeEntre;
    }

    /**
     * @return int
     */
    public function getCodePostEntre(): int
    {
        return $this->codePostEntre;
    }

    /**
     * @param int $codePostEntre
     */
    public function setCodePostEntre(int $codePostEntre): void
    {
        $this->codePostEntre = $codePostEntre;
    }


    public function __construct($idEntre, $nomEntre, $adresseEntre, $villeEntre, $codePostEntre) {
        $this->idEntre = $idEntre;
        $this->nomEntre = $nomEntre;
        $this->adresseEntre = $adresseEntre;
        $this->villeEntre = $villeEntre;
        $this->codePostEntre = $codePostEntre;}


    public function ToString(): string
    {
        return "Entreprise - ID: $this->idEntre, Nom: $this->nomEntre, Adresse: $this->adresseEntre, Ville: $this->villeEntre, Code Postal: $this->codePostEntre";
    }
}