<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Apoderado
 *
 * @ORM\Table(name="apoderado")
 * @ORM\Entity
 */
class Apoderado
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
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

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
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=500)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="Contrato", mappedBy="apoderado")
     */
    private $contratos;

    /**
     * @ORM\OneToMany(targetEntity="Ninio", mappedBy="apoderado")
     */
    private $ninios;


    public function __construct() {
        $this->contratos = new ArrayCollection();
        $this->ninios = new ArrayCollection();
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
     * Set nombres
     *
     * @param string $nombres
     * @return Apoderado
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apPaterno
     *
     * @param string $apPaterno
     * @return Apoderado
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
     * @return Apoderado
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
     * Set rut
     *
     * @param string $rut
     * @return Apoderado
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
     * @return Apoderado
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
     * Set direccion
     *
     * @param string $direccion
     * @return Apoderado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Apoderado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Apoderado
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
     * Set mail
     *
     * @param string $mail
     * @return Apoderado
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add contratos
     *
     * @param \Furgon\AdminBundle\Entity\Contrato $contratos
     * @return Apoderado
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
     * Add ninios
     *
     * @param \Furgon\AdminBundle\Entity\Ninio $ninios
     * @return Apoderado
     */
    public function addNinio(\Furgon\AdminBundle\Entity\Ninio $ninios)
    {
        $this->ninios[] = $ninios;
    
        return $this;
    }

    /**
     * Remove ninios
     *
     * @param \Furgon\AdminBundle\Entity\Ninio $ninios
     */
    public function removeNinio(\Furgon\AdminBundle\Entity\Ninio $ninios)
    {
        $this->ninios->removeElement($ninios);
    }

    /**
     * Get ninios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNinios()
    {
        return $this->ninios;
    }
}