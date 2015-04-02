<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrato
 *
 * @ORM\Table(name="contrato")
 * @ORM\Entity
 */
class Contrato
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Apoderado", inversedBy="contratos")
     * @ORM\JoinColumn(name="apoderado_id", referencedColumnName="id")
     **/
    private $apoderado;

    /**
     * @ORM\ManyToOne(targetEntity="TipoContrato", inversedBy="contratos")
     * @ORM\JoinColumn(name="tipoContrato_id", referencedColumnName="id")
     **/
    private $tipoContrato;

    /**
     * @ORM\OneToOne(targetEntity="Ninio", inversedBy="contrato")
     * @ORM\JoinColumn(name="ninio_id", referencedColumnName="id")
     **/
    private $ninio;

    /**
     * @ORM\ManyToOne(targetEntity="Furgon", inversedBy="contratos")
     * @ORM\JoinColumn(name="furgon_id", referencedColumnName="id")
     **/
    private $furgon;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Contrato
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set apoderado
     *
     * @param \Furgon\AdminBundle\Entity\Apoderado $apoderado
     * @return Contrato
     */
    public function setApoderado(\Furgon\AdminBundle\Entity\Apoderado $apoderado = null)
    {
        $this->apoderado = $apoderado;
    
        return $this;
    }

    /**
     * Get apoderado
     *
     * @return \Furgon\AdminBundle\Entity\Apoderado 
     */
    public function getApoderado()
    {
        return $this->apoderado;
    }

    /**
     * Set tipoContrato
     *
     * @param \Furgon\AdminBundle\Entity\TipoContrato $tipoContrato
     * @return Contrato
     */
    public function setTipoContrato(\Furgon\AdminBundle\Entity\TipoContrato $tipoContrato = null)
    {
        $this->tipoContrato = $tipoContrato;
    
        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return \Furgon\AdminBundle\Entity\TipoContrato 
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set ninio
     *
     * @param \Furgon\AdminBundle\Entity\Ninio $ninio
     * @return Contrato
     */
    public function setNinio(\Furgon\AdminBundle\Entity\Ninio $ninio = null)
    {
        $this->ninio = $ninio;
    
        return $this;
    }

    /**
     * Get ninio
     *
     * @return \Furgon\AdminBundle\Entity\Ninio 
     */
    public function getNinio()
    {
        return $this->ninio;
    }

    /**
     * Set furgon
     *
     * @param \Furgon\AdminBundle\Entity\Furgon $furgon
     * @return Contrato
     */
    public function setFurgon(\Furgon\AdminBundle\Entity\Furgon $furgon = null)
    {
        $this->furgon = $furgon;
    
        return $this;
    }

    /**
     * Get furgon
     *
     * @return \Furgon\AdminBundle\Entity\Furgon 
     */
    public function getFurgon()
    {
        return $this->furgon;
    }
}