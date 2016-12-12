<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmTipoAplicacionubicacion
 */
class CrmTipoAplicacionubicacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idaplicacion;

    /**
     * @var integer
     */
    private $idubicacion;

    /**
     * @var integer
     */
    private $unityCode;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmTipoAplicacionubicacion
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
     * Set idaplicacion
     *
     * @param integer $idaplicacion
     * @return CrmTipoAplicacionubicacion
     */
    public function setIdaplicacion($idaplicacion)
    {
        $this->idaplicacion = $idaplicacion;

        return $this;
    }

    /**
     * Get idaplicacion
     *
     * @return integer 
     */
    public function getIdaplicacion()
    {
        return $this->idaplicacion;
    }

    /**
     * Set idubicacion
     *
     * @param integer $idubicacion
     * @return CrmTipoAplicacionubicacion
     */
    public function setIdubicacion($idubicacion)
    {
        $this->idubicacion = $idubicacion;

        return $this;
    }

    /**
     * Get idubicacion
     *
     * @return integer 
     */
    public function getIdubicacion()
    {
        return $this->idubicacion;
    }

    /**
     * Set unityCode
     *
     * @param integer $unityCode
     * @return CrmTipoAplicacionubicacion
     */
    public function setUnityCode($unityCode)
    {
        $this->unityCode = $unityCode;

        return $this;
    }

    /**
     * Get unityCode
     *
     * @return integer 
     */
    public function getUnityCode()
    {
        return $this->unityCode;
    }
}
