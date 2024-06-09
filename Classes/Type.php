<?php
namespace App;

class Type {
    private int $code;
    private string $intitule;

    private array $projets = [];

    public function __construct(int $code, string $intitule) {
        $this->code = $code;
        $this->intitule = $intitule;
    }

    public function getCode(){
        return $this->code;
    }

    public function getIntitule(){
        return $this->intitule;
    }

    public function getProjets(){
        return $this->projets;
    }

    public function addProjet(Projet $projet){
        $this->projets[] = $projet;
    }

}
?>
