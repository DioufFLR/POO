<?php

abstract class Human
{
    protected $nom;
    protected $prenom;
    protected $dateEmb;
    protected $poste;
    protected $salaire;
    protected $service;

    /**
     * @param $nom
     * @param $prenom
     * @param $dateEmb
     * @param $poste
     * @param $salaire
     * @param $service
     */
    public function __construct($nom, $prenom, $dateEmb, $poste, $salaire, $service) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmb = $dateEmb;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    //    Listes des setters
    public function getNom() { return $this->nom; }
    public function getPrenom() { return $this->prenom; }
    public function getDateEmb() { return $this->dateEmb; }
    public function getPoste() { return $this->poste; }
    public function getSalaire() { return $this->salaire; }
    public function getService() { return $this->service; }
}