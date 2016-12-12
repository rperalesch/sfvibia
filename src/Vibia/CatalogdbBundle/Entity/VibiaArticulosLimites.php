<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VibiaArticulosLimites
 */
class VibiaArticulosLimites
{
    /**
     * @var integer
     */
    private $idFamilia;

    /**
     * @var integer
     */
    private $maxUnits;


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
     * Set maxUnits
     *
     * @param integer $maxUnits
     * @return VibiaArticulosLimites
     */
    public function setMaxUnits($maxUnits)
    {
        $this->maxUnits = $maxUnits;

        return $this;
    }

    /**
     * Get maxUnits
     *
     * @return integer 
     */
    public function getMaxUnits()
    {
        return $this->maxUnits;
    }
}
