<?php

namespace BO;

class ClasseBO
{
    private $nomClasse;

    public function __construct($nomClasse) {
        $this->nomClasse = $nomClasse;
    }

    public function ToString() {
        return "Classe - Nom: $this->nomClasse";
    }
}