<?php

namespace BO;

class MaitreEntrepriseBO
{
    private int $idMaitre;
    private string $nomMaitre;
    private string $prenomMaitre;
    private int $telMaitre;
    private string $mailMaitre;

    /**
     * @return int
     */
    public function getIdMaitre(): int
    {
        return $this->idMaitre;
    }

    /**
     * @param int $idMaitre
     */
    public function setIdMaitre(int $idMaitre): void
    {
        $this->idMaitre = $idMaitre;
    }

    /**
     * @return string
     */
    public function getNomMaitre(): string
    {
        return $this->nomMaitre;
    }

    /**
     * @param string $nomMaitre
     */
    public function setNomMaitre(string $nomMaitre): void
    {
        $this->nomMaitre = $nomMaitre;
    }

    /**
     * @return string
     */
    public function getPrenomMaitre(): string
    {
        return $this->prenomMaitre;
    }

    /**
     * @param string $prenomMaitre
     */
    public function setPrenomMaitre(string $prenomMaitre): void
    {
        $this->prenomMaitre = $prenomMaitre;
    }

    /**
     * @return int
     */
    public function getTelMaitre(): int
    {
        return $this->telMaitre;
    }

    /**
     * @param int $telMaitre
     */
    public function setTelMaitre(int $telMaitre): void
    {
        $this->telMaitre = $telMaitre;
    }

    /**
     * @return string
     */
    public function getMailMaitre(): string
    {
        return $this->mailMaitre;
    }

    /**
     * @param string $mailMaitre
     */
    public function setMailMaitre(string $mailMaitre): void
    {
        $this->mailMaitre = $mailMaitre;
    }



    public function __construct($idMaitre, $nomMaitre, $prenomMaitre, $telMaitre, $mailMaitre) {
        $this->idMaitre = $idMaitre;
        $this->nomMaitre = $nomMaitre;
        $this->prenomMaitre = $prenomMaitre;
        $this->telMaitre = $telMaitre;
        $this->mailMaitre = $mailMaitre;}

    public function ToString(): string
    {
        return "MaitreEntreprise - ID: $this->idMaitre, Nom: $this->nomMaitre, Prenom: $this->prenomMaitre, Tel: $this->telMaitre, Mail: $this->mailMaitre";
    }
}