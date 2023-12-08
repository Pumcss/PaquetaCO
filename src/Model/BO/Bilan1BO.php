<?php

namespace BO;

class Bilan1BO
{
    private int $idBil1;
    private \DateTime $datevisiteBil1;
    private  float $noteentreBil1;
    private float $notedosBil1;
    private float $noteoraleBil1;
    private string $remarqueBil1;

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
     * @return \DateTime
     */
    public function getDatevisiteBil1(): \DateTime
    {
        return $this->datevisiteBil1;
    }

    /**
     * @param \DateTime $datevisiteBil1
     */
    public function setDatevisiteBil1(\DateTime $datevisiteBil1): void
    {
        $this->datevisiteBil1 = $datevisiteBil1;
    }

    /**
     * @return float
     */
    public function getNoteentreBil1(): float
    {
        return $this->noteentreBil1;
    }

    /**
     * @param float $noteentreBil1
     */
    public function setNoteentreBil1(float $noteentreBil1): void
    {
        $this->noteentreBil1 = $noteentreBil1;
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
    public function getNoteoraleBil1(): float
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

    public function __construct($idBil1, $datevisiteBil1, $noteentreBil1, $notedosBil1, $noteoraleBil1, $remarqueBil1) {
        $this->idBil1 = $idBil1;
        $this->datevisiteBil1 = $datevisiteBil1;
        $this->noteentreBil1 = $noteentreBil1;
        $this->notedosBil1 = $notedosBil1;
        $this->noteoraleBil1 = $noteoraleBil1;
        $this->remarqueBil1 = $remarqueBil1;
    }

    public function ToString() {
        return "Bilan1 - ID: $this->idBil1, Date Visite: $this->datevisiteBil1, Note Entreprise: $this->noteentreBil1, Note Dos: $this->notedosBil1, Note Orale: $this->noteoraleBil1, Remarque: $this->remarqueBil1";
    }
}