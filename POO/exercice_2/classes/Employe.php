<?php

require_once ('Human.php');

class Employe extends Human
{
    public function __toString(): string
    {
        return "<br>" . "Nom de l'employé : " . $this->nom . " " . $this->prenom . ".<br>" . "Depuis le : " . $this->dateEmb . " au poste de " . $this->poste . " avec un salaire de " . $this->salaire . "K$ brut annuel." . "<br>" . "Il est dans le service " . $this->service . "<br>";
    }

    /**
     * On calcul l'ancienneté
     */
    public function anciennete(): void
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new \DateTime();
        $intvl = $firstDate->diff($secondDate);

        echo $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " . $intvl->y . " années " . $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
    }
}