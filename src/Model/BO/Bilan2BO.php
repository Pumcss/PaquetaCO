<?php

namespace BO;

class Bilan2BO
{
    private int $idBilz;
    private \DateTime  $datbil2;
    private float $notedosBil2;
    private float $noteoralBil2;
    private string $remarqueBil2;
    private string $memoirBi2;

    /**
     * @return int
     */
    public function getIdBilz(): int
    {
        return $this->idBilz;
    }

    /**
     * @param int $idBilz
     */
    public function setIdBilz(int $idBilz): void
    {
        $this->idBilz = $idBilz;
    }

    /**
     * @return \DateTime
     */
    public function getDatbil2(): \DateTime
    {
        return $this->datbil2;
    }

    /**
     * @param \DateTime $datbil2
     */
    public function setDatbil2(\DateTime $datbil2): void
    {
        $this->datbil2 = $datbil2;
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
    public function getMemoirBi2(): string
    {
        return $this->memoirBi2;
    }

    /**
     * @param string $memoirBi2
     */
    public function setMemoirBi2(string $memoirBi2): void
    {
        $this->memoirBi2 = $memoirBi2;
    }

    public function __construct($idBilz, $datbil2, $notedosBil2, $noteoralBil2, $remarqueBil2, $memoirBi2) {
        $this->idBilz = $idBilz;
        $this->datbil2 = $datbil2;
        $this->notedosBil2 = $notedosBil2;
        $this->noteoralBil2 = $noteoralBil2;
        $this->remarqueBil2 = $remarqueBil2;
        $this->memoirBi2 = $memoirBi2;
    }
    public function ToString() {
        return "Bilan2 - ID: $this->idBilz, Date: $this->datbil2, Note Dos: $this->notedosBil2, Note Orale: $this->noteoralBil2, Remarque: $this->remarqueBil2, Memoire: $this->memoirBi2";
    }
}