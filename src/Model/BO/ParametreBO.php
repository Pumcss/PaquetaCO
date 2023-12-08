<?php

namespace BO;

class ParametreBO
{
    private $idParametreBil1;
    private $datelimiteBil1;
    private $dateLimiteBil2;

    public function __construct($idParametreBil1, $datelimiteBil1, $dateLimiteBil2) {
        $this->idParametreBil1 = $idParametreBil1;
        $this->datelimiteBil1 = $datelimiteBil1;
        $this->dateLimiteBil2 =$dateLimiteBil2;
    }

    public function ToString() {
        return "Parametre - ID: $this->idParametreBil1, Date Limite Bilan1: $this->datelimiteBil1, Date Limite Bilan2: $this->dateLimiteBil2";
    }
}