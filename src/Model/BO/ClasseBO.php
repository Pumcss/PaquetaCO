<?php

namespace BO;

class ClasseBO
{

    Private int $idClasse;
    private string $nomClasse;


    /**
 * @return int
 */
public function getIdClasse(): int
{
    return $this->idClasse;
}/**
 * @param int $idClasse
 */
public function setIdClasse(int $idClasse): void
{
    $this->idClasse = $idClasse;
}/**
 * @return string
 */
public function getNomClasse(): string
{
    return $this->nomClasse;
}/**
 * @param string $nomClasse
 */
public function setNomClasse(string $nomClasse): void
{
    $this->nomClasse = $nomClasse;
}


    public function __construct($idClasse , $nomClasse) {
        $this->nomClasse = $nomClasse;
        $this->idClasse= $idClasse;
    }

    public function ToString(): string
    {
        return "Classe - Nom: $this->nomClasse";
    }
}