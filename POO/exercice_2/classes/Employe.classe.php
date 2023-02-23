<?php
class Employe
{
    private $nom;
    private $prenom;
    private $dateEmb;
    private $poste;
    private $salaire;
    private $service;

//    construct
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

    public function __toString(): string
    {
        return "Nom de l'employé : " . $this->nom . " " . $this->prenom . ".<br>" . "Depuis le : " . $this->dateEmb . " au poste de " . $this->poste . " avec un salaire de " . $this->salaire . "K$ brut annuel." . "<br>" . "Il est dans le service " . $this->service;
    }

    /**
     * On calcul l'ancienneté
     */
    public function anciennete($prenom, $nom): void
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new \DateTime();
        $intvl = $firstDate->diff($secondDate);

        echo $prenom . " " . $nom . " est dans l'entreprise depuis " . $intvl->y . " années " . $intvl->m . " mois et " . $intvl->d . " jours";
    }
}