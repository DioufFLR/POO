<?php
class Employe
{
    private $_nom;
    private $_prenom;
    private $_dateEmb;
    private $_poste;
    private $_salaire;
    private $_service;

//    Listes des setters

    public function getNom() { return $this->_nom; }
    public function getPrenom() { return $this->_prenom; }
    public function getDateEmb() { return $this->_dateEmb; }
    public function getPoste() { return $this->_poste; }
    public function getSalaire() { return $this->_salaire; }
    public function getService() { return $this->_service; }

//    Liste des getters

    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom): void
    {
        $this->_prenom = $prenom;
    }
    public function setDateEmb($dateEmb): void
    {
        $this->_dateEmb = $dateEmb;
    }
    public function setPoste($poste): void
    {
        $this->_poste = $poste;
    }
    public function setSalaire($salaire): void
    {
        $this->_salaire = $salaire;
    }
    public function setService($service): void
    {
        $this->_service = $service;
    }

    public function __toString(): string
    {
        return "Nom de l'employé : " . $this->_nom . " " . $this->_prenom . ".<br>" . "Depuis le : " . $this->_dateEmb . " au poste de " . $this->_poste . " avec un salaire de " . $this->_salaire . "K$ brut annuel." . "<br>" . "Il est dans le service " . $this->_service;
    }

//    TODO faire methode pour calculer timestamp

}