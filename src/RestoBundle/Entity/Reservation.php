<?php

namespace RestoBundle\Entity;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var int
     */
    private $nbrPersonnes;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $telephone;

    /**
     * @var \DateTime
     */
    private $heure;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Reservation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Reservation
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nbrPersonnes
     *
     * @param integer $nbrPersonnes
     *
     * @return Reservation
     */
    public function setNbrPersonnes($nbrPersonnes)
    {
        $this->nbrPersonnes = $nbrPersonnes;

        return $this;
    }

    /**
     * Get nbrPersonnes
     *
     * @return int
     */
    public function getNbrPersonnes()
    {
        return $this->nbrPersonnes;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Reservation
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return Reservation
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

