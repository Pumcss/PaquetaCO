<?php

namespace BO;

use DateTime;

class ParametreBO
{

    private int $idParametre;
    private DateTime $datelimitebil1;
    private DateTime $dateLimitebil2;

    /**
     * @return int
     */
    public function getIdParametre(): int
    {
        return $this->idParametre;
    }

    /**
     * @param int $idParametre
     */
    public function setIdParametre(int $idParametre): void
    {
        $this->idParametre = $idParametre;
    }

    /**
     * @return DateTime
     */
    public function getDatelimitebil1(): DateTime
    {
        return $this->datelimitebil1;
    }

    /**
     * @param DateTime $datelimitebil1
     */
    public function setDatelimitebil1(DateTime $datelimitebil1): void
    {
        $this->datelimitebil1 = $datelimitebil1;
    }

    /**
     * @return DateTime
     */
    public function getDateLimitebil2(): DateTime
    {
        return $this->dateLimitebil2;
    }

    /**
     * @param DateTime $dateLimitebil2
     */
    public function setDateLimitebil2(DateTime $dateLimitebil2): void
    {
        $this->dateLimitebil2 = $dateLimitebil2;
    }


    public function __construct($idParametre, $datelimitebil1, $dateLimitebil2) {
        $this->idParametre = $idParametre;
        $this->datelimitebil1 = $datelimitebil1;
        $this->dateLimitebil2 =$dateLimitebil2;
    }

    public function ToString(): string
    {
        return "Parametre - ID: $this->idParametre, Date Limite Bilan1: $this->datelimitebil1, Date Limite Bilan2: $this->dateLimitebil2";
    }
}