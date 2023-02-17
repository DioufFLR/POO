<?php

abstract class Humain
{
    public $nom;
    public $prenom;
    protected $age; // protected pour pouvoir utiliser dans son héritage

    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);

    }

    abstract public function travailler();

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
}

// Classe Employe
class Employe extends Humain
{
    public function travailler()
    {
        // TODO: Implement travailler() method.
        return "Je suis un employé et je travail";
    }

    public function presentation()
    {
        var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

// Classe Patron avec extension de la classe Employe

class Patron extends Employe
{
    public $voiture;

    public function __construct($prenom, $nom, $age, $voiture)
    {
        parent::__construct($prenom, $nom, $age); // permet de récupérer l'héritage du construct de la classe Employe
        $this->voiture = $voiture;
    }

    public function travailler()
    {
        return "Je suis le patron et je bosse aussi !";
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une voiture");
    }

    public function rouler() {
        var_dump("Bonjour je roule avec ma $this->voiture !");
    }
}

// Création des objets

$employe1 = new Employe("Kaido", "Owls", 23);
$employe2 = new Employe("Roger", "Karat", 54);
$patron = new Patron("Joseph", "Durand", 65, "Mercedes");


$employe2->setAge(33);

$employe1->presentation();
$employe2->presentation();
$patron->presentation();
$patron->rouler();

class Etudiant extends Humain
{
    public function travailler()
    {
        return "Je suis un étudiant et je révise";
    }
}

faireTravailler($employe1);
faireTravailler($patron);

function faireTravailler(Humain $objet) {
    var_dump("Travail en cours : {$objet->travailler()}");
}