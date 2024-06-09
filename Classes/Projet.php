<?php
namespace App;
require './Employe.php';
require './EmployeProjet.php';
require './Type.php';
class Projet {
    private int $num;
    private string $libelle;
    private float $budget;
    private string $debut;
    private string $fin;

    private ChefProject $chefProjet;
    private Type $type;
    private array $employes = [];

    public function __construct(int $num, string $libelle, float $budget, string $debut, string $fin) {
        $this->num = $num;
        $this->libelle = $libelle;
        $this->budget = $budget;
        $this->debut = $debut;
        $this->fin = $fin;
       

    }

    public function getNum() {
        return $this->num;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getBudget() {
        return $this->budget;
    }

    public function getDebut() {
        return $this->debut;
    }

    public function getFin(){
        return $this->fin;
    }

    public function getChefProjet(): ChefProject {
        return $this->chefProjet;
    }

    public function setChefProjet(ChefProject $chefProjet): void {
        $this->chefProjet = $chefProjet;
    }

    public function getType(): Type {
        return $this->type;
    }

    public function Appartenir(Type $type) {
        $this->type = $type;
    }

    public function getEmployes() {
        return $this->employes;
    }

    public function Diriger( Employe  $employee, $dateAffectation, $fonction)
    {
        $employeProjet = new EmployeProjet($employee, $this, $dateAffectation, $fonction);
        $this->employes[] = $employeProjet;
    }
    
}
?>
