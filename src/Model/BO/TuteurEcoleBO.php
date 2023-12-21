<?php

namespace BO;

class TuteurEcoleBO
{
    private int $idTut;
    private string $nomTut;
    private string $prenomTut;
    private string $numTut;
    private string $mailTut;
    private string $nbalterTut;
    private string  $loginTut;
    private string $mdpTut;
    private string $roleTut;

    /**
     * @return int
     */
    public function getIdTut(): int
    {
        return $this->idTut;
    }

    /**
     * @param int $idTut
     */
    public function setIdTut(int $idTut): void
    {
        $this->idTut = $idTut;
    }

    /**
     * @return string
     */
    public function getNomTut(): string
    {
        return $this->nomTut;
    }

    /**
     * @param string $nomTut
     */
    public function setNomTut(string $nomTut): void
    {
        $this->nomTut = $nomTut;
    }

    /**
     * @return string
     */
    public function getPrenomTut(): string
    {
        return $this->prenomTut;
    }

    /**
     * @param string $prenomTut
     */
    public function setPrenomTut(string $prenomTut): void
    {
        $this->prenomTut = $prenomTut;
    }

    /**
     * @return string
     */
    public function getNumTut(): string
    {
        return $this->numTut;
    }

    /**
     * @param string $numTut
     */
    public function setNumTut(string $numTut): void
    {
        $this->numTut = $numTut;
    }

    /**
     * @return string
     */
    public function getMailTut(): string
    {
        return $this->mailTut;
    }

    /**
     * @param string $mailTut
     */
    public function setMailTut(string $mailTut): void
    {
        $this->mailTut = $mailTut;
    }

    /**
     * @return string
     */
    public function getNbalterTut(): string
    {
        return $this->nbalterTut;
    }

    /**
     * @param string $nbalterTut
     */
    public function setNbalterTut(string $nbalterTut): void
    {
        $this->nbalterTut = $nbalterTut;
    }

    /**
     * @return string
     */
    public function getLoginTut(): string
    {
        return $this->loginTut;
    }

    /**
     * @param string $loginTut
     */
    public function setLoginTut(string $loginTut): void
    {
        $this->loginTut = $loginTut;
    }

    /**
     * @return string
     */
    public function getMdpTut(): string
    {
        return $this->mdpTut;
    }

    /**
     * @param string $mdpTut
     */
    public function setMdpTut(string $mdpTut): void
    {
        $this->mdpTut = $mdpTut;
    }

    /**
     * @return string
     */
    public function getRoleTut(): string
    {
        return $this->roleTut;
    }

    /**
     * @param string $roleTut
     */
    public function setRoleTut(string $roleTut): void
    {
        $this->roleTut = $roleTut;
    }

    public function __construct($idTut, $nomTut, $prenomTut, $numTut, $mailTut, $nbalterTut, $loginTut, $mdpTut, $roleTut) {
        $this->idTut = $idTut;
        $this->nomTut = $nomTut;
        $this->prenomTut = $prenomTut;
        $this->numTut = $numTut;
        $this->mailTut = $mailTut;
        $this->nbalterTut = $nbalterTut;
        $this->loginTut = $loginTut;
        $this->mdpTut = $mdpTut;
        $this->roleTut = $roleTut;
    }

    public function ToString(): string
    {
        return "TuteurEcole - ID: $this->idTut, Nom: $this->nomTut, Prenom: $this->prenomTut, Numéro: $this->numTut, Mail: $this->mailTut, Alternances: $this->nbalterTut, Login: $this->loginTut, Role: $this->roleTut";
    }
}