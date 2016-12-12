<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmTipoDesigners
 */
class CrmTipoDesigners
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $crmDesignerId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set crmDesignerId
     *
     * @param integer $crmDesignerId
     * @return CrmTipoDesigners
     */
    public function setCrmDesignerId($crmDesignerId)
    {
        $this->crmDesignerId = $crmDesignerId;

        return $this;
    }

    /**
     * Get crmDesignerId
     *
     * @return integer 
     */
    public function getCrmDesignerId()
    {
        return $this->crmDesignerId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CrmTipoDesigners
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmTipoDesigners
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
}
