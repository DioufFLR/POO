<?php

require_once ('Employe.php');

class Magasin extends Employe
{
    private $adressMag;
    private $cdMag;
    private $cityMag;
    private $restaurant;

    public function __construct($nom, $prenom, $dateEmb, $poste, $salaire, $service, $magName, $adressMag, $cdMag, $cityMag, $restaurant)
    {
        parent::__construct($nom, $prenom, $dateEmb, $poste, $salaire, $service, $magName);

        $this->adressMag = $adressMag;
        $this->cdMag = $cdMag;
        $this->cityMag = $cityMag;
        $this->restaurant = $restaurant;
    }



    /**
     * @return void
     * @throws Exception
     */
    public function prime(): void
    {
        $firstDate = new DateTime($this->dateEmb);
        $secondDate = new \DateTime();
        $intvl = $firstDate->diff($secondDate);

        $prime = (0.05 * $this->salaire) * 1000;
        $primeAnciennete = $intvl->y * (0.02 * $prime);
        $primeReel = ($primeAnciennete + $prime) * $intvl->y;

        if ($intvl->y <= 1) {
            echo "<br>" . $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " . $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
        } else {
            echo "<br>" . $this->nom . " " . $this->prenom . " est dans l'entreprise depuis " . $intvl->y . " années " . $intvl->m . " mois et " . $intvl->d . " jours" . "<br>";
        }

        echo "Il" . " percevra une prime de " . $primeReel . " euros" . " au 30/11." . "<br>";
    }

    public function restauration()
    {
        if ($this->restaurant === 0) {

        }
    }

}