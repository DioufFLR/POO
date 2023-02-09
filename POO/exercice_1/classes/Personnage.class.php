<?php
class Personnage
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    public function setNom($sNom)
    {
        return $this->_nom = $sNom;
    }

    public function setPrenom($sPrenom)
    {
        return $this->_prenom = $sPrenom;
    }

    public function __toString()
    {
        return "Nom d'utilisateur : " . $this->_nom . "<br>" . "Prénom : " . $this->_prenom;
    }
}


