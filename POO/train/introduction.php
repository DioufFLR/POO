<?php

// Classe
class Employe {
    public $nom;
    public $prenom;
    private $age;

    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);

    }

    public function setAge($age): void
    {
        if (is_int($age) && $age >= 1 && $age <= 120) {
            $this->age = $age;
        } else {
            throw new Exception("L'âge d'un employé devrait être un entier entre 1 et 120!");
        }
    }
    public function getAge()
    {
        return $this->age;
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}



$employe1 = new Employe("Kaido", "Owls", 23);
$employe2 = new Employe("Roger", "Karat", 54);

$employe2->setAge(42);

$employe1->presentation();
$employe2->presentation();


