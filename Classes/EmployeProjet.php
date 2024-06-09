<?php
namespace App;
require './Employe.php';
require './Projet.php';
class EmployeProjet {
    private $employee;
    private $project;
    private string $dateAffectation;
    private string $fonction;

    public function __construct(Employe $employee, Projet $project,string $dateAffectation, string $fonction) {
        $this->employee = $employee;
        $this->project = $project;
        $this->dateAffectation = $dateAffectation;
        $this->fonction = $fonction;
    }


    public function getEmployee()
    {
        return $this->employee;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function getDateAffectation() {
        return $this->dateAffectation;
    }

    public function getFonction() {
        return $this->fonction;
    }
}
?>
