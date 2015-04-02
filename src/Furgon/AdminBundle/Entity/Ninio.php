<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ninio
 *
 * @ORM\Table(name="ninio")
 * @ORM\Entity
 */
class Ninio
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
     * @ORM\Column(name="ap_paterno", type="string", length=255)
     */
    private $apPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_materno", type="string", length=255)
     */
    private $apMaterno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="colegio", type="string", length=255)
     */
    private $colegio;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=10)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="dv", type="string", length=1)
     */
    private $dv;

    /**
     * @ORM\ManyToOne(targetEntity="Apoderado", inversedBy="ninios")
     * @ORM\JoinColumn(name="apoderado_id", referencedColumnName="id")
     **/
    private $apoderado;

    /**
     * @ORM\OneToOne(targetEntity="Contrato", mappedBy="ninio")
     **/
    private $contrato;


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
     * @return Ni¤o
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
     * Set apPaterno
     *
     * @param string $apPaterno
     * @return Ni¤o
     */
    public function setApPaterno($apPaterno)
    {
        $this->apPaterno = $apPaterno;
    
        return $this;
    }

    /**
     * Get apPaterno
     *
     * @return string 
     */
    public function getApPaterno()
    {
        return $this->apPaterno;
    }

    /**
     * Set apMaterno
     *
     * @param string $apMaterno
     * @return Ni¤o
     */
    public function setApMaterno($apMaterno)
    {
        $this->apMaterno = $apMaterno;
    
        return $this;
    }

    /**
     * Get apMaterno
     *
     * @return string 
     */
    public function getApMaterno()
    {
        return $this->apMaterno;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Ni¤o
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set colegio
     *
     * @param string $colegio
     * @return Ni¤o
     */
    public function setColegio($colegio)
    {
        $this->colegio = $colegio;
    
        return $this;
    }

    /**
     * Get colegio
     *
     * @return string 
     */
    public function getColegio()
    {
        return $this->colegio;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Ni¤o
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return Ni¤o
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    
        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set dv
     *
     * @param string $dv
     * @return Ni¤o
     */
    public function setDv($dv)
    {
        $this->dv = $dv;
    
        return $this;
    }

    /**
     * Get dv
     *
     * @return string 
     */
    public function getDv()
    {
        return $this->dv;
    }

    /**
     * Set apoderado
     *
     * @param \Furgon\AdminBundle\Entity\Apoderado $apoderado
     * @return Ninio
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
     * Set contrato
     *
     * @param \Furgon\AdminBundle\Entity\Contrato $contrato
     * @return Ninio
     */
    public function setContrato(\Furgon\AdminBundle\Entity\Contrato $contrato = null)
    {
        $this->contrato = $contrato;
    
        return $this;
    }

    /**
     * Get contrato
     *
     * @return \Furgon\AdminBundle\Entity\Contrato 
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}