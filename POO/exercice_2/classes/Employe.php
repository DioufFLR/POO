<?php

require_once ('Human.php');

class Employe extends Human
{
    protected $magName;

    public function __construct($nom, $prenom, $dateEmb, $poste, $salaire, $service, $magName)
    {
        parent::__construct($nom, $prenom, $dateEmb, $poste, $salaire, $service);
        $this->magName = $magName;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>" . "Nom de l'employé : " . $this->nom . " " . $this->prenom . ".<br>" . "Depuis le : " . $this->dateEmb . " au poste de " . $this->poste . " avec un salaire de " . $this->salaire . "K$ brut annuel." . "<br>" . "Il est dans le service " . $this->service;
    }
}