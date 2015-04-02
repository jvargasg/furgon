<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Furgon
 *
 * @ORM\Table(name="furgon")
 * @ORM\Entity
 */
class Furgon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=7)
     */
    private $patente;

    /**
     * @ORM\OneToMany(targetEntity="Contrato", mappedBy="furgon")
     */
    private $contratos;

    /**
     * @ORM\OneToOne(targetEntity="Chofer", inversedBy="furgon")
     * @ORM\JoinColumn(name="chofer_id", referencedColumnName="id")
     **/
    private $chofer;


    public function __construct() {
        $this->contratos = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set patente
     *
     * @param string $patente
     * @return Furgon
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;
    
        return $this;
    }

    /**
     * Get patente
     *
     * @return string 
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Add contratos
     *
     * @param \Furgon\AdminBundle\Entity\Contrato $contratos
     * @return Furgon
     */
    public function addContrato(\Furgon\AdminBundle\Entity\Contrato $contratos)
    {
        $this->contratos[] = $contratos;
    
        return $this;
    }

    /**
     * Remove contratos
     *
     * @param \Furgon\AdminBundle\Entity\Contrato $contratos
     */
    public function removeContrato(\Furgon\AdminBundle\Entity\Contrato $contratos)
    {
        $this->contratos->removeElement($contratos);
    }

    /**
     * Get contratos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContratos()
    {
        return $this->contratos;
    }

    /**
     * Set chofer
     *
     * @param \Furgon\AdminBundle\Entity\Chofer $chofer
     * @return Furgon
     */
    public function setChofer(\Furgon\AdminBundle\Entity\Chofer $chofer = null)
    {
        $this->chofer = $chofer;
    
        return $this;
    }

    /**
     * Get chofer
     *
     * @return \Furgon\AdminBundle\Entity\Chofer 
     */
    public function getChofer()
    {
        return $this->chofer;
    }
}