<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Families
 */
class Families
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idFamilia;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $latestShow;

    /**
     * @var integer
     */
    private $idclevel2;

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
     * Set idFamilia
     *
     * @param integer $idFamilia
     * @return Families
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Families
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
     * Set latestShow
     *
     * @param boolean $latestShow
     * @return Families
     */
    public function setLatestShow($latestShow)
    {
        $this->latestShow = $latestShow;

        return $this;
    }

    /**
     * Get latestShow
     *
     * @return boolean 
     */
    public function getLatestShow()
    {
        return $this->latestShow;
    }

    /**
     * Set idclevel2
     *
     * @param integer $idclevel2
     * @return Families
     */
    public function setIdclevel2($idclevel2)
    {
        $this->idclevel2 = $idclevel2;

        return $this;
    }

    /**
     * Get idclevel2
     *
     * @return integer 
     */
    public function getIdclevel2()
    {
        return $this->idclevel2;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Families
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
     * @return Families
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
