<?php

require_once ('Human.php');

class Employe extends Human
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>" . "Nom de l'employé : " . $this->nom . " " . $this->prenom . ".<br>" . "Depuis le : " . $this->dateEmb . " au poste de " . $this->poste . " avec un salaire de " . $this->salaire . "K$ brut annuel." . "<br>" . "Il est dans le service " . $this->service . "<br>";
    }

    /**
     * Calcul de l'ancienneté d'un employé
     *
     * @return void
     * @throws Exception
     */
    public function anciennete(): void
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new DateTime();
        $intvl = $firstDate->diff($secondDate);

        echo "<br>" . $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " . $intvl->y . " années " . $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
    }

    public function prime()
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new \DateTime();
        $intvl = $firstDate->diff($secondDate);


        $prime = ((5/100) * $this->salaire) * 1000;
        $primeReel = $intvl->y * $prime;

        echo $this->nom . " " . $this->prenom . " percevra une prime de " . $primeReel . " euros." . "<br>";
    }
}