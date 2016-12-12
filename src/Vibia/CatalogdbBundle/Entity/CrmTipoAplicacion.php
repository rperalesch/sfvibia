<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmTipoAplicacion
 */
class CrmTipoAplicacion
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
    private $extid;


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
     * @return CrmTipoAplicacion
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
     * Set extid
     *
     * @param integer $extid
     * @return CrmTipoAplicacion
     */
    public function setExtid($extid)
    {
        $this->extid = $extid;

        return $this;
    }

    /**
     * Get extid
     *
     * @return integer 
     */
    public function getExtid()
    {
        return $this->extid;
    }
}
