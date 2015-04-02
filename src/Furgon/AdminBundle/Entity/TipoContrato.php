<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoContrato
 *
 * @ORM\Table(name="tipo_contrato")
 * @ORM\Entity
 */
class TipoContrato
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Contrato", mappedBy="tipoContrato")
     */
    private $contratos;


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
     * Set nombre
     *
     * @param string $nombre
     * @return TipoContrato
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoContrato
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add contratos
     *
     * @param \Furgon\AdminBundle\Entity\Contrato $contratos
     * @return TipoContrato
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
}