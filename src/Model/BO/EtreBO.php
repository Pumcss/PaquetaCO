<?php

namespace BO;

class EtreBO
{
    private int $idEtu;
    private int $idEntre;
    private int $idMaitre;

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


    public function getIdEntre(): int
    {
        return $this->idEntre;
    }

    /**
     * @param int $idEntre
     */
    public function setIdEntre(int $idEntre): void
    {
        $this->idEntre = $idEntre;
    }


    public function getIdMaitre(): int
    {
        return $this->idMaitre;
    }

    /**
     * @param int $idMaitre
     */
    public function setIdMaitre(int $idMaitre): void
    {
        $this->idMaitre = $idMaitre;
    }

    public function __construct($idEtu, $idEntre, $idMaitre) {
        $this->idEtu = $idEtu;
        $this->idEntre = $idEntre;
        $this->idMaitre = $idMaitre;
    }
}