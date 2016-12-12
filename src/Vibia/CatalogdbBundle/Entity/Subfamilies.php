<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subfamilies
 */
class Subfamilies
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idSubfamilia;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idFamilia;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set idSubfamilia
     *
     * @param integer $idSubfamilia
     * @return Subfamilies
     */
    public function setIdSubfamilia($idSubfamilia)
    {
        $this->idSubfamilia = $idSubfamilia;

        return $this;
    }

    /**
     * Get idSubfamilia
     *
     * @return integer 
     */
    public function getIdSubfamilia()
    {
        return $this->idSubfamilia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Subfamilies
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
     * Set idFamilia
     *
     * @param integer $idFamilia
     * @return Subfamilies
     */
    public function setIdFamilia($idFamilia)
    {
        $this->idFamilia = $idFamilia;

        return $this;
    }

    /**
     * Get idFamilia
     *
     * @return integer 
     */
    public function getIdFamilia()
    {
        return $this->idFamilia;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Subfamilies
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Subfamilies
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
