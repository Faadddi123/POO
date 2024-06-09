<?php

require './Classes/Departement.php';
require './Classes/Employe.php';
require './Classes/EmployeProjet.php';
require './Classes/Projet.php';
require './Classes/Type.php';

use App\EmployeProjet;
use App\Departement;
use App\ChefProject;
use App\Employe;
use App\Projet;
use App\Type;


// creation de departement
$departement = new Departement(1, "Informatique", "Paris");

// creation de chef de projet on ajoutons directement la departement
$chefProjet = new ChefProject("C001", "Alice Dupont", 80000, 10000, "2020-01-01", $departement);

// creation de type
$type = new Type(1, "Développement");
// creation de projet
$projet = new Projet(1, "Projet A", 150000, "2023-01-01", "2023-12-31");
// affectation le chef de project au projet
$projet->setChefProjet($chefProjet);
// appartenir un type au projet 
$projet->Appartenir($type);

// creation des employes
$employe1 = new Employe("E001", "John Doe", 50000, 5000, "2022-01-01", "Développeur", $departement);
$employe2 = new Employe("E002", "Jane Smith", 55000, 5500, "2022-02-01", "Testeur", $departement);

// diriger des employe a les project

$projet->Diriger($employe1, "2023-01-15", "Développeur");
$projet->Diriger($employe2, "2023-02-01", "Testeur");

// affichage de tous

echo "project  : " . $projet->getType()->getIntitule() . "\n";

echo "Chef de Projet: " . $projet->getChefProjet()->getNom() . "\n";
echo "Chef de Projet: " . $chefProjet->getNom() . "\n";
echo "Projet: " . $projet->getLibelle() . "\n";
echo "Employés dans le projet:\n";
foreach ($projet->getEmployes() as $employeProjet) {
    echo "- " . $employeProjet->getEmployee()->getNom() . " (" . $employeProjet->getFonction() . ")\n";
}

?>