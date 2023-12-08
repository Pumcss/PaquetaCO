<?php

namespace BO;

class EtudiantBO
{
    private int $idEtu;
    private string $nomEtu;
    private string $preEtu;
    private string $photoEtu;
    private string $mailEtu;
    private string $telEtu;
    private string $loginEtu;
    private string $mapEtu;
    private string $speEtu;

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
    public function getPreEtu(): string
    {
        return $this->preEtu;
    }

    /**
     * @param string $preEtu
     */
    public function setPreEtu(string $preEtu): void
    {
        $this->preEtu = $preEtu;
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
    public function getMapEtu(): string
    {
        return $this->mapEtu;
    }

    /**
     * @param string $mapEtu
     */
    public function setMapEtu(string $mapEtu): void
    {
        $this->mapEtu = $mapEtu;
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



    public function __construct($idEtu, $nomEtu, $preEtu, $photoEtu, $mailEtu, $telEtu, $loginEtu, $mapEtu, $speEtu) {
        $this->idEtu = $idEtu;
        $this->nomEtu = $nomEtu;
        $this->preEtu = $preEtu;
        $this->photoEtu = $photoEtu;
        $this->mailEtu = $mailEtu;
        $this->telEtu = $telEtu;
        $this->loginEtu = $loginEtu;
        $this->mapEtu = $mapEtu;
        $this->speEtu = $speEtu;}
    public function ToStringO() {
        return "Etudiant - ID: $this->idEtu, Nom: $this->nomEtu, Prenom: $this->preEtu, Mail: $this->mailEtu, Tel: $this->telEtu, Login: $this->loginEtu, Specialite: $this->speEtu";
    }
}