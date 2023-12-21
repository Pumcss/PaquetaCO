<?php

namespace BO;


class EtudiantBO
{
    private int $idEtu;
    private string $nomEtu;

    private string $prenomEtu;
    private string $photoEtu;
    private string $mailEtu;
    private string $telEtu;
    private string $loginEtu;
    private string $mdpEtu;
    private string $speEtu;
    private int $idClasse;
    private int $idTut;
    /**
     * @return int
     */
    public function getIdEtu(): int
    {
        return $this->idEtu;
    }

    /**
     * @param int $idEtu
     */
    public function setIdEtu(int $idEtu): void
    {
        $this->idEtu = $idEtu;
    }

    /**
     * @return string
     */
    public function getNomEtu(): string
    {
        return $this->nomEtu;
    }

    /**
     * @param string $nomEtu
     */
    public function setNomEtu(string $nomEtu): void
    {
        $this->nomEtu = $nomEtu;
    }

    /**
     * @return string
     */
    public function getPrenomEtu(): string
    {
        return $this->prenomEtu;
    }

    /**
     * @param string $prenomEtu
     */
    public function setPrenomEtu(string $prenomEtu): void
    {
        $this->prenomEtu = $prenomEtu;
    }

    /**
     * @return string
     */
    public function getPhotoEtu(): string
    {
        return $this->photoEtu;
    }

    /**
     * @param string $photoEtu
     */
    public function setPhotoEtu(string $photoEtu): void
    {
        $this->photoEtu = $photoEtu;
    }

    /**
     * @return string
     */
    public function getMailEtu(): string
    {
        return $this->mailEtu;
    }

    /**
     * @param string $mailEtu
     */
    public function setMailEtu(string $mailEtu): void
    {
        $this->mailEtu = $mailEtu;
    }

    /**
     * @return string
     */
    public function getTelEtu(): string
    {
        return $this->telEtu;
    }

    /**
     * @param string $telEtu
     */
    public function setTelEtu(string $telEtu): void
    {
        $this->telEtu = $telEtu;
    }

    /**
     * @return string
     */
    public function getLoginEtu(): string
    {
        return $this->loginEtu;
    }

    /**
     * @param string $loginEtu
     */
    public function setLoginEtu(string $loginEtu): void
    {
        $this->loginEtu = $loginEtu;
    }

    /**
     * @return string
     */
    public function getMdpEtu(): string
    {
        return $this->mdpEtu;
    }

    /**
     * @param string $mdpEtu
     */
    public function setMdpEtu(string $mdpEtu): void
    {
        $this->mdpEtu = $mdpEtu;
    }

    /**
     * @return string
     */
    public function getSpeEtu(): string
    {
        return $this->speEtu;
    }

    /**
     * @param string $speEtu
     */
    public function setSpeEtu(string $speEtu): void
    {
        $this->speEtu = $speEtu;
    }

    /**
     * @return int
     */
    public function getIdClasse(): int
    {
        return $this->idClasse;
    }

    /**
     * @param int $idClasse
     */
    public function setIdClasse(int $idClasse): void
    {
        $this->idClasse = $idClasse;
    }

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


    function __construct(?array $datas = null){
        if(!is_null($datas)){

            (isset($datas["idEtu"]))?$this->setIdEtu($datas["idEtu"]):$this->idEtu = null;
            (isset($datas["nomEtu"]))?$this->getNomEtu($datas["nomEtu"]):$this->nomEtu = null;
            (isset($datas["preEtu"]))?$this->getPreEtu($datas["preEtu"]):$this->preEtu = null;
            (isset($datas["photoEtu"]))?$this->setPhotoEtu($datas["photoEtu"]):$this->photoEtu = null;
            (isset($datas["nomEtu"]))?$this->getNomEtu($datas["nomEtu"]):$this->nomEtu = null;
            (isset($datas["preEtu"]))?$this->getPreEtu($datas["preEtu"]):$this->preEtu = null;
            (isset($datas["idEtu"]))?$this->setIdEtu($datas["idEtu"]):$this->idEtu = null;
            (isset($datas["nomEtu"]))?$this->getNomEtu($datas["nomEtu"]):$this->nomEtu = null;
            (isset($datas["preEtu"]))?$this->getPreEtu($datas["preEtu"]):$this->preEtu = null;

        }
    }
    public function ToStringO() {
        return "Etudiant - ID: $this->idEtu, Nom: $this->nomEtu, Prenom: $this->preEtu, Mail: $this->mailEtu, Tel: $this->telEtu, Login: $this->loginEtu, Specialite: $this->speEtu";

    }
}