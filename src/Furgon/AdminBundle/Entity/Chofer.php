<?php

namespace Furgon\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chofer
 *
 * @ORM\Table(name="chofer")
 * @ORM\Entity
 */
class Chofer
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
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\OneToOne(targetEntity="Furgon", mappedBy="chofer")
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
     * Set nombre
     *
     * @param string $nombre
     * @return Chofer
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
     * @return Chofer
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
     * @return Chofer
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
     * @return Chofer
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
     * @return Chofer
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
     * Set telefono
     *
     * @param string $telefono
     * @return Chofer
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
     * @return Chofer
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
     * @return Chofer
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
     * Set direccion
     *
     * @param string $direccion
     * @return Chofer
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
     * Set furgon
     *
     * @param \Furgon\AdminBundle\Entity\Furgon $furgon
     * @return Chofer
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