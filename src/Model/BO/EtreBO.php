<?php

namespace BO;

class EtreBO
{
    private $idEtu;
    private $idEntre;
    private $idMaitre;

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