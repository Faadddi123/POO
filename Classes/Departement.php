<?php
namespace App;

class Departement {
    private int $num;
    private string $nom;
    private string $ville;

    private array $employes = [];

    public function __construct(int $num, string $nom, string $ville) {
        $this->num = $num;
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function getNum() {
        return $this->num;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getEmployes() {
        return $this->employes;
    }


    
    //affecter est pour ajouter un employe a la departement

    public function Affecter(Employe $employe) {
        $this->employes[] = $employe;
    }
}
?>
