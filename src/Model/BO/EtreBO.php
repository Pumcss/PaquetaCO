<?php

namespace BO;

class EtreBO
{
    private int $idEtu;
    private int $idEntre;
    private int $idMaitre;

    public function __construct($idEtu, $idEntre, $idMaitre) {
        $this->idEtu = $idEtu;
        $this->idEntre = $idEntre;
        $this->idMaitre = $idMaitre;
    }


    public function getIdEtu() {
        return $this->idEtu;
    }

    public function getIdEntre() {
        return $this->idEntre;
    }

    public function getIdMaitre() {
        return $this->idMaitre;
    }

}