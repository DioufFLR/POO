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

    public function prime(): void
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new \DateTime();
        $intvl = $firstDate->diff($secondDate);

        $prime = (0.05 * $this->salaire) * 1000;
        $primeAnciennete = $intvl->y * (0.02 * $prime);
        $primeReel = ($primeAnciennete + $prime) * $intvl->y;

        if ($intvl->y <= 1) {
            echo "<br>" . $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " .  $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
        } else {
            echo "<br>" . $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " . $intvl->y . " années " . $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
        }

        echo $this->nom . " " . $this->prenom . " percevra une prime de " . $primeReel . " euros" . " au 30/11." . "<br>";
    }
}