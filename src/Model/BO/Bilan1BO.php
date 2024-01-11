<?php

namespace BO;


class Bilan1BO
{
    private int $idBil1;
    private string $datevisiteBil1;
    private  float $noteentreil1;
    private float $notedosBil1;
    private float $noteoraleBil1;
    private string $remarqueBil1;
    private int $idEtu;

    /**
     * @return int
     */
    public function getIdBil1(): int
    {
        return $this->idBil1;
    }

    /**
     * @param int $idBil1
     */
    public function setIdBil1(int $idBil1): void
    {
        $this->idBil1 = $idBil1;
    }

    /**
     * @return string
     */
    public function getDateVisiteBil1(): string
    {
        return $this->datevisiteBil1;
    }

    /**
     * @param string $datevisiteBil1
     */
    public function setDatevisiteBil1(string $datevisiteBil1): void
    {
        $this->datevisiteBil1 = $datevisiteBil1;
    }

    /**
     * @return float
     */
    public function getNoteEntretienBil1(): float
    {
        return $this->noteentreil1;
    }

    /**
     * @param float $noteentreil1
     */
    public function setNoteentreil1(float $noteentreil1): void
    {
        $this->noteentreil1 = $noteentreil1;
    }

    /**
     * @return float
     */
    public function getNotedosBil1(): float
    {
        return $this->notedosBil1;
    }

    /**
     * @param float $notedosBil1
     */
    public function setNotedosBil1(float $notedosBil1): void
    {
        $this->notedosBil1 = $notedosBil1;
    }

    /**
     * @return float
     */
    public function getNoteOraleBil1(): float
    {
        return $this->noteoraleBil1;
    }

    /**
     * @param float $noteoraleBil1
     */
    public function setNoteoraleBil1(float $noteoraleBil1): void
    {
        $this->noteoraleBil1 = $noteoraleBil1;
    }

    /**
     * @return string
     */
    public function getRemarqueBil1(): string
    {
        return $this->remarqueBil1;
    }

    /**
     * @param string $remarqueBil1
     */
    public function setRemarqueBil1(string $remarqueBil1): void
    {
        $this->remarqueBil1 = $remarqueBil1;
    }

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


    public function __construct($datevisiteBil1, $noteentreil1, $notedosBil1, $noteoraleBil1, $remarqueBil1, $idEtu, $idBil1 = null) {
       if ($idBil1 != null) {
           $this->idBil1 = $idBil1;
       }
       $this->datevisiteBil1 = $datevisiteBil1;
       $this->noteentreil1 = $noteentreil1;
       $this->notedosBil1 = $notedosBil1;
       $this->noteoraleBil1 = $noteoraleBil1;
       $this->remarqueBil1 = $remarqueBil1;
       $this->idEtu = $idEtu;
    }

    public function ToString(): string
    {
        return "Bilan1 - ID: $this->idBil1, Date Visite: $this->datevisiteBil1, Note Entreprise: $this->noteentreil1, Note Dos: $this->notedosBil1, Note Orale: $this->noteoraleBil1, Remarque: $this->remarqueBil1";
    }
}