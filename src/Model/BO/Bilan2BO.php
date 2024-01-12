<?php

namespace BO;

class Bilan2BO
{
    private int $idBil2;
    private string  $dateBil2;
    private float $notedosBil2;
    private float $noteoralBil2;
    private string $remarqueBil2;
    private string $memoirBil2;
    private int $idEtu;

    /**
     * @return int
     */
    public function getIdBil2(): int
    {
        return $this->idBil2;
    }

    /**
     * @param int $idBil2
     */
    public function setIdBil2(int $idBil2): void
    {
        $this->idBil2 = $idBil2;
    }

    /**
     * @return string
     */
    public function getDateBil2(): string
    {
        return $this->dateBil2;
    }

    /**
     * @param string $dateBil2
     */
    public function setDateBil2(string $dateBil2): void
    {
        $this->dateBil2 = $dateBil2;
    }

    /**
     * @return float
     */
    public function getNotedosBil2(): float
    {
        return $this->notedosBil2;
    }

    /**
     * @param float $notedosBil2
     */
    public function setNotedosBil2(float $notedosBil2): void
    {
        $this->notedosBil2 = $notedosBil2;
    }

    /**
     * @return float
     */
    public function getNoteoralBil2(): float
    {
        return $this->noteoralBil2;
    }

    /**
     * @param float $noteoralBil2
     */
    public function setNoteoralBil2(float $noteoralBil2): void
    {
        $this->noteoralBil2 = $noteoralBil2;
    }

    /**
     * @return string
     */
    public function getRemarqueBil2(): string
    {
        return $this->remarqueBil2;
    }

    /**
     * @param string $remarqueBil2
     */
    public function setRemarqueBil2(string $remarqueBil2): void
    {
        $this->remarqueBil2 = $remarqueBil2;
    }

    /**
     * @return string
     */
    public function getMemoirBil2(): string
    {
        return $this->memoirBil2;
    }

    /**
     * @param string $memoirBil2
     */
    public function setMemoirBil2(string $memoirBil2): void
    {
        $this->memoirBil2 = $memoirBil2;
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


    public function __construct( $dateBil2, $notedosBil2, $noteoralBil2, $remarqueBil2, $memoirBil2,$idEtu,$idBil2=null) {
       if ($idBil2 != null ){
           $this->idBil2 = $idBil2;
       }
        $this->dateBil2 = $dateBil2;
        $this->notedosBil2 = $notedosBil2;
        $this->noteoralBil2 = $noteoralBil2;
        $this->remarqueBil2 = $remarqueBil2;
        $this->memoirBil2 = $memoirBil2;
        $this->idEtu = $idEtu;
    }
    public function ToString(): string
    {
        return "Bilan2 - ID: $this->idBil2, Date: $this->dateBil2, Note Dos: $this->notedosBil2, Note Orale: $this->noteoralBil2, Remarque: $this->remarqueBil2, Memoire: $this->memoirBil2";
    }
}