<?php

namespace MB\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeDevis
 *
 * @ORM\Table(name="demande_devis")
 * @ORM\Entity(repositoryClass="MB\AdminBundle\Repository\DemandeDevisRepository")
 */
class DemandeDevis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSociete", type="string", length=255)
     */
    private $nomSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var text
     *
     * @ORM\Column(name="telephone", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="fichierJoint", type="string", length=255, nullable=true)
     */
    private $fichierJoint;


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
     * Set nomSociete
     *
     * @param string $nomSociete
     *
     * @return DemandeDevis
     */
    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;

        return $this;
    }

    /**
     * Get nomSociete
     *
     * @return string
     */
    public function getNomSociete()
    {
        return $this->nomSociete;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DemandeDevis
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
     * @param string $telephone
     *
     * @return DemandeDevis
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set message
     *
     * @param string $telephone
     *
     * @return DemandeDevis
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set fichierJoint
     *
     * @param string $fichierJoint
     *
     * @return DemandeDevis
     */
    public function setFichierJoint($fichierJoint)
    {
        $this->fichierJoint = $fichierJoint;

        return $this;
    }

    /**
     * Get fichierJoint
     *
     * @return string
     */
    public function getFichierJoint()
    {
        return $this->fichierJoint;
    }
}

