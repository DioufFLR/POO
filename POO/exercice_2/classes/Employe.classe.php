<?php
class Employe
{
    private $_nom;
    private $_prenom;
    private $_dateEmb;
    private $_poste;
    private $_salaire;
    private $_service;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateEmb()
    {
        return $this->_dateEmb;
    }

    /**
     * @param mixed $dateEmb
     */
    public function setDateEmb($dateEmb): void
    {
        $this->_dateEmb = $dateEmb;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->_poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste): void
    {
        $this->_poste = $poste;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->_salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire): void
    {
        $this->_salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->_service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->_service = $service;
    }


}