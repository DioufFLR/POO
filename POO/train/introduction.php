<?php

class Employe {
    public $nom;
    public $prenom;
    public $age;

    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        var_dump("Je suis construit");
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe();
$employe1->prenom = "Lior";
$employe1->nom = "Chamla";
$employe1->age = 32;

$employe2 = new Employe();
$employe2->prenom = "Magalie";
$employe2->nom = "Pernin";
$employe2->age = 32;

$employe1->presentation();
$employe2->presentation();


