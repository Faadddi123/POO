<?php
require './Departement.php';
require './Projet.php';
require './EmployeProjet.php';
namespace App;
class Employe {
    private string $matricule;
    private string $nom;
    private float $salaire;
    private float $commission;
    private string $dateEntree;
    private string $fonction;



    private Departement $departement;
    private array $projets = [];


    public function __construct(string $matricule, string $nom, float $salaire, float $commission, string $dateEntree, string $fonction, Departement $departement) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->salaire = $salaire;
        $this->commission = $commission;
        $this->dateEntree = $dateEntree;
        $this->fonction = $fonction;
        $this->departement = $departement;
    }

    public function getMatricule(){
        return $this->matricule;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getSalaire(){
        return $this->salaire;
    }

    public function getCommission() {
        return $this->commission;
    }

    public function getDateEntree() {
        return $this->dateEntree;
    }

    public function getFonction() {
        return $this->fonction;
    }

    public function getDepartement(): Departement {
        return $this->departement;
    }

    public function setDepartement(Departement $departement) {
        $this->departement = $departement;
    }

    public function getProjets(){
        return $this->projets;
    }

    public function Travailler(Projet $project, $dateAffectation, $fonction) {
        $employeProjet = new EmployeProjet($this, $project, $dateAffectation, $fonction);
        
        $this->projets[] = $employeProjet;
    }


}


class ChefProject extends Employe {
    public function __construct(string $matricule, string $nom, float $salaire, float $commission, string $dateEntree, Departement $departement) {
        parent::__construct($matricule, $nom, $salaire, $commission, $dateEntree, "Chef de Projet", $departement);
    }


    public function dirigerProjet(Projet $projet): void {
        $projet->setChefProjet($this);
    }
}
?>
