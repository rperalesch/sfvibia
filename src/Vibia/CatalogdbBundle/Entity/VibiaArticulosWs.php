<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VibiaArticulosWs
 */
class VibiaArticulosWs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idProducto;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var float
     */
    private $descuentomaximo;

    /**
     * @var integer
     */
    private $idclevel3;

    /**
     * @var string
     */
    private $clevel3;

    /**
     * @var integer
     */
    private $idclevel2;

    /**
     * @var string
     */
    private $clevel2;

    /**
     * @var integer
     */
    private $idclevel1;

    /**
     * @var string
     */
    private $clevel1;

    /**
     * @var string
     */
    private $idnode;

    /**
     * @var integer
     */
    private $ordertag1;

    /**
     * @var integer
     */
    private $ordertag2;

    /**
     * @var float
     */
    private $zMax;

    /**
     * @var float
     */
    private $zAlto;

    /**
     * @var float
     */
    private $zAncho;

    /**
     * @var float
     */
    private $zLargo;

    /**
     * @var float
     */
    private $zPesobruto;

    /**
     * @var float
     */
    private $zPesoneto;

    /**
     * @var integer
     */
    private $zPack;

    /**
     * @var float
     */
    private $zVol;

    /**
     * @var string
     */
    private $zClaseid;

    /**
     * @var string
     */
    private $zAccesorioid;

    /**
     * @var string
     */
    private $zCodigo4;

    /**
     * @var string
     */
    private $zIdtipoacabado;

    /**
     * @var string
     */
    private $zIdtipodifusor;

    /**
     * @var string
     */
    private $zIdobservacion1;

    /**
     * @var string
     */
    private $zIdobservacion2;

    /**
     * @var string
     */
    private $zIdobservacion3;

    /**
     * @var string
     */
    private $zIdobservacion4;

    /**
     * @var string
     */
    private $zIdobservacion5;

    /**
     * @var string
     */
    private $zIdtipoclasifestadistica;

    /**
     * @var string
     */
    private $zIdsimbip;

    /**
     * @var string
     */
    private $zIdsimbclaseaislamiento;

    /**
     * @var string
     */
    private $zIdsimbsuperficiesinflamables;

    /**
     * @var string
     */
    private $zIdsimbdimensioncorte;

    /**
     * @var string
     */
    private $zIdsimbdistanciaminima;

    /**
     * @var string
     */
    private $zIdsimbequiponointegrado;

    /**
     * @var string
     */
    private $zIdsimbreguladorintensidad;

    /**
     * @var string
     */
    private $zIdsimbcertificado;

    /**
     * @var string
     */
    private $zBlnsimbmini;

    /**
     * @var boolean
     */
    private $zBivolt;

    /**
     * @var string
     */
    private $zIdefectodeluz;

    /**
     * @var string
     */
    private $zIdral;

    /**
     * @var string
     */
    private $zIdubicacion1;

    /**
     * @var string
     */
    private $zIdubicacion2;

    /**
     * @var string
     */
    private $zWattsprincipal;

    /**
     * @var string
     */
    private $zWattsopcional;

    /**
     * @var \DateTime
     */
    private $zFechacomercializacion;

    /**
     * @var string
     */
    private $zIddesigner;

    /**
     * @var string
     */
    private $zBlnwebactive;

    /**
     * @var string
     */
    private $zIdinstalacion;

    /**
     * @var string
     */
    private $zIdambiente;

    /**
     * @var string
     */
    private $zVoltios;

    /**
     * @var string
     */
    private $zWatios;

    /**
     * @var string
     */
    private $zIdtipobombilla;

    /**
     * @var string
     */
    private $zBlnsimbexiste110;

    /**
     * @var string
     */
    private $zBlnsimbnuevo;

    /**
     * @var string
     */
    private $zBlnsimbledincluido;

    /**
     * @var string
     */
    private $zIdsimbip2;

    /**
     * @var string
     */
    private $zCrea;

    /**
     * @var string
     */
    private $zCustom;

    /**
     * @var integer
     */
    private $zRetiraartweb;

    /**
     * @var integer
     */
    private $zPorcentajeaumentocustom;

    /**
     * @var string
     */
    private $zBlnecofriendly;

    /**
     * @var integer
     */
    private $zEtiquetaefienergetica;

    /**
     * @var integer
     */
    private $zIntminunits;

    /**
     * @var boolean
     */
    private $zBlnvirtual;

    /**
     * @var string
     */
    private $zVisionluz3d;

    /**
     * @var string
     */
    private $zIntensidadluz3d;

    /**
     * @var string
     */
    private $zTipologiaadicional3d;

    /**
     * @var integer
     */
    private $famOrder;

    /**
     * @var integer
     */
    private $appOrder;

    /**
     * @var integer
     */
    private $latestOrder;

    /**
     * @var integer
     */
    private $languageId;

    /**
     * @var integer
     */
    private $zIdaplicacionubicacion1;

    /**
     * @var integer
     */
    private $zIdaplicacionubicacion2;

    /**
     * @var integer
     */
    private $zIdaplicacionubicacion3;

    /**
     * @var integer
     */
    private $zIdaplicacionubicacion4;

    /**
     * @var string
     */
    private $zEficiencia;

    /**
     * @var string
     */
    private $zSistcoordenadas;

    /**
     * @var string
     */
    private $zFlujototal;

    /**
     * @var string
     */
    private $zValormaximo;

    /**
     * @var string
     */
    private $zPosicion;

    /**
     * @var string
     */
    private $zIsolux;

    /**
     * @var string
     */
    private $zPosicionluminaria;

    /**
     * @var string
     */
    private $zRotacionluminaria;

    /**
     * @var integer
     */
    private $zIdsimetria;

    /**
     * @var string
     */
    private $zConexionmatch1;

    /**
     * @var string
     */
    private $zConexionmatch2;

    /**
     * @var string
     */
    private $zCertificadosusa;

    /**
     * @var string
     */
    private $zCertificadoadausa;

    /**
     * @var string
     */
    private $zLocationusa;

    /**
     * @var string
     */
    private $zZIdunity3d1;

    /**
     * @var string
     */
    private $zIdunity3d2;

    /**
     * @var string
     */
    private $zIdunity3d3;

    /**
     * @var string
     */
    private $zIdunity3d4;

    /**
     * @var string
     */
    private $zDialuxSpectrum;

    /**
     * @var string
     */
    private $zDialuxLtd;

    /**
     * @var string
     */
    private $zDialuxIes;

    /**
     * @var string
     */
    private $zDialuxFoto;

    /**
     * @var string
     */
    private $zDialux3d;

    /**
     * @var string
     */
    private $zDialuxUld;

    /**
     * @var string
     */
    private $zDialuxLdt;

    /**
     * @var string
     */
    private $zCustombrillomate;

    /**
     * @var integer
     */
    private $zIdpantalla;

    /**
     * @var float
     */
    private $zMetroscable;

    /**
     * @var integer
     */
    private $zMordazawireflow;

    /**
     * @var float
     */
    private $zIdlumensluminaria;

    /**
     * @var float
     */
    private $zIdlumtotfuenteluz;

    /**
     * @var float
     */
    private $zIdlumwatluminaria;

    /**
     * @var float
     */
    private $zIdlumwatfuenteluz;

    /**
     * @var float
     */
    private $zIdcorriente;

    /**
     * @var float
     */
    private $zIdvoltsalida;

    /**
     * @var float
     */
    private $zIdmodeloequipo;

    /**
     * @var integer
     */
    private $zIdsubfamilia;

    /**
     * @var string
     */
    private $subfamilia;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var float
     */
    private $zIdmarcaequipo;

    /**
     * @var float
     */
    private $zIdtempcolorluminaria;

    /**
     * @var float
     */
    private $zIdcri;

    /**
     * @var float
     */
    private $zIdvoltentrada;

    /**
     * @var float
     */
    private $zIdfrecuencia;

    /**
     * @var string
     */
    private $zIdmateriales;

    /**
     * @var string
     */
    private $zIdmateriales2;

    /**
     * @var string
     */
    private $zIdmateriales3;

    /**
     * @var string
     */
    private $zIdmateriales4;

    /**
     * @var string
     */
    private $zIdwebgl3d1;

    /**
     * @var string
     */
    private $zIdwebgl3d2;

    /**
     * @var string
     */
    private $zIdwebgl3d3;

    /**
     * @var string
     */
    private $zIdwebgl3d4;


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
     * Set idProducto
     *
     * @param integer $idProducto
     * @return VibiaArticulosWs
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return integer 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return VibiaArticulosWs
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return VibiaArticulosWs
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
     * Set precio
     *
     * @param float $precio
     * @return VibiaArticulosWs
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return VibiaArticulosWs
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set descuentomaximo
     *
     * @param float $descuentomaximo
     * @return VibiaArticulosWs
     */
    public function setDescuentomaximo($descuentomaximo)
    {
        $this->descuentomaximo = $descuentomaximo;

        return $this;
    }

    /**
     * Get descuentomaximo
     *
     * @return float 
     */
    public function getDescuentomaximo()
    {
        return $this->descuentomaximo;
    }

    /**
     * Set idclevel3
     *
     * @param integer $idclevel3
     * @return VibiaArticulosWs
     */
    public function setIdclevel3($idclevel3)
    {
        $this->idclevel3 = $idclevel3;

        return $this;
    }

    /**
     * Get idclevel3
     *
     * @return integer 
     */
    public function getIdclevel3()
    {
        return $this->idclevel3;
    }

    /**
     * Set clevel3
     *
     * @param string $clevel3
     * @return VibiaArticulosWs
     */
    public function setClevel3($clevel3)
    {
        $this->clevel3 = $clevel3;

        return $this;
    }

    /**
     * Get clevel3
     *
     * @return string 
     */
    public function getClevel3()
    {
        return $this->clevel3;
    }

    /**
     * Set idclevel2
     *
     * @param integer $idclevel2
     * @return VibiaArticulosWs
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
     * Set clevel2
     *
     * @param string $clevel2
     * @return VibiaArticulosWs
     */
    public function setClevel2($clevel2)
    {
        $this->clevel2 = $clevel2;

        return $this;
    }

    /**
     * Get clevel2
     *
     * @return string 
     */
    public function getClevel2()
    {
        return $this->clevel2;
    }

    /**
     * Set idclevel1
     *
     * @param integer $idclevel1
     * @return VibiaArticulosWs
     */
    public function setIdclevel1($idclevel1)
    {
        $this->idclevel1 = $idclevel1;

        return $this;
    }

    /**
     * Get idclevel1
     *
     * @return integer 
     */
    public function getIdclevel1()
    {
        return $this->idclevel1;
    }

    /**
     * Set clevel1
     *
     * @param string $clevel1
     * @return VibiaArticulosWs
     */
    public function setClevel1($clevel1)
    {
        $this->clevel1 = $clevel1;

        return $this;
    }

    /**
     * Get clevel1
     *
     * @return string 
     */
    public function getClevel1()
    {
        return $this->clevel1;
    }

    /**
     * Set idnode
     *
     * @param string $idnode
     * @return VibiaArticulosWs
     */
    public function setIdnode($idnode)
    {
        $this->idnode = $idnode;

        return $this;
    }

    /**
     * Get idnode
     *
     * @return string 
     */
    public function getIdnode()
    {
        return $this->idnode;
    }

    /**
     * Set ordertag1
     *
     * @param integer $ordertag1
     * @return VibiaArticulosWs
     */
    public function setOrdertag1($ordertag1)
    {
        $this->ordertag1 = $ordertag1;

        return $this;
    }

    /**
     * Get ordertag1
     *
     * @return integer 
     */
    public function getOrdertag1()
    {
        return $this->ordertag1;
    }

    /**
     * Set ordertag2
     *
     * @param integer $ordertag2
     * @return VibiaArticulosWs
     */
    public function setOrdertag2($ordertag2)
    {
        $this->ordertag2 = $ordertag2;

        return $this;
    }

    /**
     * Get ordertag2
     *
     * @return integer 
     */
    public function getOrdertag2()
    {
        return $this->ordertag2;
    }

    /**
     * Set zMax
     *
     * @param float $zMax
     * @return VibiaArticulosWs
     */
    public function setZMax($zMax)
    {
        $this->zMax = $zMax;

        return $this;
    }

    /**
     * Get zMax
     *
     * @return float 
     */
    public function getZMax()
    {
        return $this->zMax;
    }

    /**
     * Set zAlto
     *
     * @param float $zAlto
     * @return VibiaArticulosWs
     */
    public function setZAlto($zAlto)
    {
        $this->zAlto = $zAlto;

        return $this;
    }

    /**
     * Get zAlto
     *
     * @return float 
     */
    public function getZAlto()
    {
        return $this->zAlto;
    }

    /**
     * Set zAncho
     *
     * @param float $zAncho
     * @return VibiaArticulosWs
     */
    public function setZAncho($zAncho)
    {
        $this->zAncho = $zAncho;

        return $this;
    }

    /**
     * Get zAncho
     *
     * @return float 
     */
    public function getZAncho()
    {
        return $this->zAncho;
    }

    /**
     * Set zLargo
     *
     * @param float $zLargo
     * @return VibiaArticulosWs
     */
    public function setZLargo($zLargo)
    {
        $this->zLargo = $zLargo;

        return $this;
    }

    /**
     * Get zLargo
     *
     * @return float 
     */
    public function getZLargo()
    {
        return $this->zLargo;
    }

    /**
     * Set zPesobruto
     *
     * @param float $zPesobruto
     * @return VibiaArticulosWs
     */
    public function setZPesobruto($zPesobruto)
    {
        $this->zPesobruto = $zPesobruto;

        return $this;
    }

    /**
     * Get zPesobruto
     *
     * @return float 
     */
    public function getZPesobruto()
    {
        return $this->zPesobruto;
    }

    /**
     * Set zPesoneto
     *
     * @param float $zPesoneto
     * @return VibiaArticulosWs
     */
    public function setZPesoneto($zPesoneto)
    {
        $this->zPesoneto = $zPesoneto;

        return $this;
    }

    /**
     * Get zPesoneto
     *
     * @return float 
     */
    public function getZPesoneto()
    {
        return $this->zPesoneto;
    }

    /**
     * Set zPack
     *
     * @param integer $zPack
     * @return VibiaArticulosWs
     */
    public function setZPack($zPack)
    {
        $this->zPack = $zPack;

        return $this;
    }

    /**
     * Get zPack
     *
     * @return integer 
     */
    public function getZPack()
    {
        return $this->zPack;
    }

    /**
     * Set zVol
     *
     * @param float $zVol
     * @return VibiaArticulosWs
     */
    public function setZVol($zVol)
    {
        $this->zVol = $zVol;

        return $this;
    }

    /**
     * Get zVol
     *
     * @return float 
     */
    public function getZVol()
    {
        return $this->zVol;
    }

    /**
     * Set zClaseid
     *
     * @param string $zClaseid
     * @return VibiaArticulosWs
     */
    public function setZClaseid($zClaseid)
    {
        $this->zClaseid = $zClaseid;

        return $this;
    }

    /**
     * Get zClaseid
     *
     * @return string 
     */
    public function getZClaseid()
    {
        return $this->zClaseid;
    }

    /**
     * Set zAccesorioid
     *
     * @param string $zAccesorioid
     * @return VibiaArticulosWs
     */
    public function setZAccesorioid($zAccesorioid)
    {
        $this->zAccesorioid = $zAccesorioid;

        return $this;
    }

    /**
     * Get zAccesorioid
     *
     * @return string 
     */
    public function getZAccesorioid()
    {
        return $this->zAccesorioid;
    }

    /**
     * Set zCodigo4
     *
     * @param string $zCodigo4
     * @return VibiaArticulosWs
     */
    public function setZCodigo4($zCodigo4)
    {
        $this->zCodigo4 = $zCodigo4;

        return $this;
    }

    /**
     * Get zCodigo4
     *
     * @return string 
     */
    public function getZCodigo4()
    {
        return $this->zCodigo4;
    }

    /**
     * Set zIdtipoacabado
     *
     * @param string $zIdtipoacabado
     * @return VibiaArticulosWs
     */
    public function setZIdtipoacabado($zIdtipoacabado)
    {
        $this->zIdtipoacabado = $zIdtipoacabado;

        return $this;
    }

    /**
     * Get zIdtipoacabado
     *
     * @return string 
     */
    public function getZIdtipoacabado()
    {
        return $this->zIdtipoacabado;
    }

    /**
     * Set zIdtipodifusor
     *
     * @param string $zIdtipodifusor
     * @return VibiaArticulosWs
     */
    public function setZIdtipodifusor($zIdtipodifusor)
    {
        $this->zIdtipodifusor = $zIdtipodifusor;

        return $this;
    }

    /**
     * Get zIdtipodifusor
     *
     * @return string 
     */
    public function getZIdtipodifusor()
    {
        return $this->zIdtipodifusor;
    }

    /**
     * Set zIdobservacion1
     *
     * @param string $zIdobservacion1
     * @return VibiaArticulosWs
     */
    public function setZIdobservacion1($zIdobservacion1)
    {
        $this->zIdobservacion1 = $zIdobservacion1;

        return $this;
    }

    /**
     * Get zIdobservacion1
     *
     * @return string 
     */
    public function getZIdobservacion1()
    {
        return $this->zIdobservacion1;
    }

    /**
     * Set zIdobservacion2
     *
     * @param string $zIdobservacion2
     * @return VibiaArticulosWs
     */
    public function setZIdobservacion2($zIdobservacion2)
    {
        $this->zIdobservacion2 = $zIdobservacion2;

        return $this;
    }

    /**
     * Get zIdobservacion2
     *
     * @return string 
     */
    public function getZIdobservacion2()
    {
        return $this->zIdobservacion2;
    }

    /**
     * Set zIdobservacion3
     *
     * @param string $zIdobservacion3
     * @return VibiaArticulosWs
     */
    public function setZIdobservacion3($zIdobservacion3)
    {
        $this->zIdobservacion3 = $zIdobservacion3;

        return $this;
    }

    /**
     * Get zIdobservacion3
     *
     * @return string 
     */
    public function getZIdobservacion3()
    {
        return $this->zIdobservacion3;
    }

    /**
     * Set zIdobservacion4
     *
     * @param string $zIdobservacion4
     * @return VibiaArticulosWs
     */
    public function setZIdobservacion4($zIdobservacion4)
    {
        $this->zIdobservacion4 = $zIdobservacion4;

        return $this;
    }

    /**
     * Get zIdobservacion4
     *
     * @return string 
     */
    public function getZIdobservacion4()
    {
        return $this->zIdobservacion4;
    }

    /**
     * Set zIdobservacion5
     *
     * @param string $zIdobservacion5
     * @return VibiaArticulosWs
     */
    public function setZIdobservacion5($zIdobservacion5)
    {
        $this->zIdobservacion5 = $zIdobservacion5;

        return $this;
    }

    /**
     * Get zIdobservacion5
     *
     * @return string 
     */
    public function getZIdobservacion5()
    {
        return $this->zIdobservacion5;
    }

    /**
     * Set zIdtipoclasifestadistica
     *
     * @param string $zIdtipoclasifestadistica
     * @return VibiaArticulosWs
     */
    public function setZIdtipoclasifestadistica($zIdtipoclasifestadistica)
    {
        $this->zIdtipoclasifestadistica = $zIdtipoclasifestadistica;

        return $this;
    }

    /**
     * Get zIdtipoclasifestadistica
     *
     * @return string 
     */
    public function getZIdtipoclasifestadistica()
    {
        return $this->zIdtipoclasifestadistica;
    }

    /**
     * Set zIdsimbip
     *
     * @param string $zIdsimbip
     * @return VibiaArticulosWs
     */
    public function setZIdsimbip($zIdsimbip)
    {
        $this->zIdsimbip = $zIdsimbip;

        return $this;
    }

    /**
     * Get zIdsimbip
     *
     * @return string 
     */
    public function getZIdsimbip()
    {
        return $this->zIdsimbip;
    }

    /**
     * Set zIdsimbclaseaislamiento
     *
     * @param string $zIdsimbclaseaislamiento
     * @return VibiaArticulosWs
     */
    public function setZIdsimbclaseaislamiento($zIdsimbclaseaislamiento)
    {
        $this->zIdsimbclaseaislamiento = $zIdsimbclaseaislamiento;

        return $this;
    }

    /**
     * Get zIdsimbclaseaislamiento
     *
     * @return string 
     */
    public function getZIdsimbclaseaislamiento()
    {
        return $this->zIdsimbclaseaislamiento;
    }

    /**
     * Set zIdsimbsuperficiesinflamables
     *
     * @param string $zIdsimbsuperficiesinflamables
     * @return VibiaArticulosWs
     */
    public function setZIdsimbsuperficiesinflamables($zIdsimbsuperficiesinflamables)
    {
        $this->zIdsimbsuperficiesinflamables = $zIdsimbsuperficiesinflamables;

        return $this;
    }

    /**
     * Get zIdsimbsuperficiesinflamables
     *
     * @return string 
     */
    public function getZIdsimbsuperficiesinflamables()
    {
        return $this->zIdsimbsuperficiesinflamables;
    }

    /**
     * Set zIdsimbdimensioncorte
     *
     * @param string $zIdsimbdimensioncorte
     * @return VibiaArticulosWs
     */
    public function setZIdsimbdimensioncorte($zIdsimbdimensioncorte)
    {
        $this->zIdsimbdimensioncorte = $zIdsimbdimensioncorte;

        return $this;
    }

    /**
     * Get zIdsimbdimensioncorte
     *
     * @return string 
     */
    public function getZIdsimbdimensioncorte()
    {
        return $this->zIdsimbdimensioncorte;
    }

    /**
     * Set zIdsimbdistanciaminima
     *
     * @param string $zIdsimbdistanciaminima
     * @return VibiaArticulosWs
     */
    public function setZIdsimbdistanciaminima($zIdsimbdistanciaminima)
    {
        $this->zIdsimbdistanciaminima = $zIdsimbdistanciaminima;

        return $this;
    }

    /**
     * Get zIdsimbdistanciaminima
     *
     * @return string 
     */
    public function getZIdsimbdistanciaminima()
    {
        return $this->zIdsimbdistanciaminima;
    }

    /**
     * Set zIdsimbequiponointegrado
     *
     * @param string $zIdsimbequiponointegrado
     * @return VibiaArticulosWs
     */
    public function setZIdsimbequiponointegrado($zIdsimbequiponointegrado)
    {
        $this->zIdsimbequiponointegrado = $zIdsimbequiponointegrado;

        return $this;
    }

    /**
     * Get zIdsimbequiponointegrado
     *
     * @return string 
     */
    public function getZIdsimbequiponointegrado()
    {
        return $this->zIdsimbequiponointegrado;
    }

    /**
     * Set zIdsimbreguladorintensidad
     *
     * @param string $zIdsimbreguladorintensidad
     * @return VibiaArticulosWs
     */
    public function setZIdsimbreguladorintensidad($zIdsimbreguladorintensidad)
    {
        $this->zIdsimbreguladorintensidad = $zIdsimbreguladorintensidad;

        return $this;
    }

    /**
     * Get zIdsimbreguladorintensidad
     *
     * @return string 
     */
    public function getZIdsimbreguladorintensidad()
    {
        return $this->zIdsimbreguladorintensidad;
    }

    /**
     * Set zIdsimbcertificado
     *
     * @param string $zIdsimbcertificado
     * @return VibiaArticulosWs
     */
    public function setZIdsimbcertificado($zIdsimbcertificado)
    {
        $this->zIdsimbcertificado = $zIdsimbcertificado;

        return $this;
    }

    /**
     * Get zIdsimbcertificado
     *
     * @return string 
     */
    public function getZIdsimbcertificado()
    {
        return $this->zIdsimbcertificado;
    }

    /**
     * Set zBlnsimbmini
     *
     * @param string $zBlnsimbmini
     * @return VibiaArticulosWs
     */
    public function setZBlnsimbmini($zBlnsimbmini)
    {
        $this->zBlnsimbmini = $zBlnsimbmini;

        return $this;
    }

    /**
     * Get zBlnsimbmini
     *
     * @return string 
     */
    public function getZBlnsimbmini()
    {
        return $this->zBlnsimbmini;
    }

    /**
     * Set zBivolt
     *
     * @param boolean $zBivolt
     * @return VibiaArticulosWs
     */
    public function setZBivolt($zBivolt)
    {
        $this->zBivolt = $zBivolt;

        return $this;
    }

    /**
     * Get zBivolt
     *
     * @return boolean 
     */
    public function getZBivolt()
    {
        return $this->zBivolt;
    }

    /**
     * Set zIdefectodeluz
     *
     * @param string $zIdefectodeluz
     * @return VibiaArticulosWs
     */
    public function setZIdefectodeluz($zIdefectodeluz)
    {
        $this->zIdefectodeluz = $zIdefectodeluz;

        return $this;
    }

    /**
     * Get zIdefectodeluz
     *
     * @return string 
     */
    public function getZIdefectodeluz()
    {
        return $this->zIdefectodeluz;
    }

    /**
     * Set zIdral
     *
     * @param string $zIdral
     * @return VibiaArticulosWs
     */
    public function setZIdral($zIdral)
    {
        $this->zIdral = $zIdral;

        return $this;
    }

    /**
     * Get zIdral
     *
     * @return string 
     */
    public function getZIdral()
    {
        return $this->zIdral;
    }

    /**
     * Set zIdubicacion1
     *
     * @param string $zIdubicacion1
     * @return VibiaArticulosWs
     */
    public function setZIdubicacion1($zIdubicacion1)
    {
        $this->zIdubicacion1 = $zIdubicacion1;

        return $this;
    }

    /**
     * Get zIdubicacion1
     *
     * @return string 
     */
    public function getZIdubicacion1()
    {
        return $this->zIdubicacion1;
    }

    /**
     * Set zIdubicacion2
     *
     * @param string $zIdubicacion2
     * @return VibiaArticulosWs
     */
    public function setZIdubicacion2($zIdubicacion2)
    {
        $this->zIdubicacion2 = $zIdubicacion2;

        return $this;
    }

    /**
     * Get zIdubicacion2
     *
     * @return string 
     */
    public function getZIdubicacion2()
    {
        return $this->zIdubicacion2;
    }

    /**
     * Set zWattsprincipal
     *
     * @param string $zWattsprincipal
     * @return VibiaArticulosWs
     */
    public function setZWattsprincipal($zWattsprincipal)
    {
        $this->zWattsprincipal = $zWattsprincipal;

        return $this;
    }

    /**
     * Get zWattsprincipal
     *
     * @return string 
     */
    public function getZWattsprincipal()
    {
        return $this->zWattsprincipal;
    }

    /**
     * Set zWattsopcional
     *
     * @param string $zWattsopcional
     * @return VibiaArticulosWs
     */
    public function setZWattsopcional($zWattsopcional)
    {
        $this->zWattsopcional = $zWattsopcional;

        return $this;
    }

    /**
     * Get zWattsopcional
     *
     * @return string 
     */
    public function getZWattsopcional()
    {
        return $this->zWattsopcional;
    }

    /**
     * Set zFechacomercializacion
     *
     * @param \DateTime $zFechacomercializacion
     * @return VibiaArticulosWs
     */
    public function setZFechacomercializacion($zFechacomercializacion)
    {
        $this->zFechacomercializacion = $zFechacomercializacion;

        return $this;
    }

    /**
     * Get zFechacomercializacion
     *
     * @return \DateTime 
     */
    public function getZFechacomercializacion()
    {
        return $this->zFechacomercializacion;
    }

    /**
     * Set zIddesigner
     *
     * @param string $zIddesigner
     * @return VibiaArticulosWs
     */
    public function setZIddesigner($zIddesigner)
    {
        $this->zIddesigner = $zIddesigner;

        return $this;
    }

    /**
     * Get zIddesigner
     *
     * @return string 
     */
    public function getZIddesigner()
    {
        return $this->zIddesigner;
    }

    /**
     * Set zBlnwebactive
     *
     * @param string $zBlnwebactive
     * @return VibiaArticulosWs
     */
    public function setZBlnwebactive($zBlnwebactive)
    {
        $this->zBlnwebactive = $zBlnwebactive;

        return $this;
    }

    /**
     * Get zBlnwebactive
     *
     * @return string 
     */
    public function getZBlnwebactive()
    {
        return $this->zBlnwebactive;
    }

    /**
     * Set zIdinstalacion
     *
     * @param string $zIdinstalacion
     * @return VibiaArticulosWs
     */
    public function setZIdinstalacion($zIdinstalacion)
    {
        $this->zIdinstalacion = $zIdinstalacion;

        return $this;
    }

    /**
     * Get zIdinstalacion
     *
     * @return string 
     */
    public function getZIdinstalacion()
    {
        return $this->zIdinstalacion;
    }

    /**
     * Set zIdambiente
     *
     * @param string $zIdambiente
     * @return VibiaArticulosWs
     */
    public function setZIdambiente($zIdambiente)
    {
        $this->zIdambiente = $zIdambiente;

        return $this;
    }

    /**
     * Get zIdambiente
     *
     * @return string 
     */
    public function getZIdambiente()
    {
        return $this->zIdambiente;
    }

    /**
     * Set zVoltios
     *
     * @param string $zVoltios
     * @return VibiaArticulosWs
     */
    public function setZVoltios($zVoltios)
    {
        $this->zVoltios = $zVoltios;

        return $this;
    }

    /**
     * Get zVoltios
     *
     * @return string 
     */
    public function getZVoltios()
    {
        return $this->zVoltios;
    }

    /**
     * Set zWatios
     *
     * @param string $zWatios
     * @return VibiaArticulosWs
     */
    public function setZWatios($zWatios)
    {
        $this->zWatios = $zWatios;

        return $this;
    }

    /**
     * Get zWatios
     *
     * @return string 
     */
    public function getZWatios()
    {
        return $this->zWatios;
    }

    /**
     * Set zIdtipobombilla
     *
     * @param string $zIdtipobombilla
     * @return VibiaArticulosWs
     */
    public function setZIdtipobombilla($zIdtipobombilla)
    {
        $this->zIdtipobombilla = $zIdtipobombilla;

        return $this;
    }

    /**
     * Get zIdtipobombilla
     *
     * @return string 
     */
    public function getZIdtipobombilla()
    {
        return $this->zIdtipobombilla;
    }

    /**
     * Set zBlnsimbexiste110
     *
     * @param string $zBlnsimbexiste110
     * @return VibiaArticulosWs
     */
    public function setZBlnsimbexiste110($zBlnsimbexiste110)
    {
        $this->zBlnsimbexiste110 = $zBlnsimbexiste110;

        return $this;
    }

    /**
     * Get zBlnsimbexiste110
     *
     * @return string 
     */
    public function getZBlnsimbexiste110()
    {
        return $this->zBlnsimbexiste110;
    }

    /**
     * Set zBlnsimbnuevo
     *
     * @param string $zBlnsimbnuevo
     * @return VibiaArticulosWs
     */
    public function setZBlnsimbnuevo($zBlnsimbnuevo)
    {
        $this->zBlnsimbnuevo = $zBlnsimbnuevo;

        return $this;
    }

    /**
     * Get zBlnsimbnuevo
     *
     * @return string 
     */
    public function getZBlnsimbnuevo()
    {
        return $this->zBlnsimbnuevo;
    }

    /**
     * Set zBlnsimbledincluido
     *
     * @param string $zBlnsimbledincluido
     * @return VibiaArticulosWs
     */
    public function setZBlnsimbledincluido($zBlnsimbledincluido)
    {
        $this->zBlnsimbledincluido = $zBlnsimbledincluido;

        return $this;
    }

    /**
     * Get zBlnsimbledincluido
     *
     * @return string 
     */
    public function getZBlnsimbledincluido()
    {
        return $this->zBlnsimbledincluido;
    }

    /**
     * Set zIdsimbip2
     *
     * @param string $zIdsimbip2
     * @return VibiaArticulosWs
     */
    public function setZIdsimbip2($zIdsimbip2)
    {
        $this->zIdsimbip2 = $zIdsimbip2;

        return $this;
    }

    /**
     * Get zIdsimbip2
     *
     * @return string 
     */
    public function getZIdsimbip2()
    {
        return $this->zIdsimbip2;
    }

    /**
     * Set zCrea
     *
     * @param string $zCrea
     * @return VibiaArticulosWs
     */
    public function setZCrea($zCrea)
    {
        $this->zCrea = $zCrea;

        return $this;
    }

    /**
     * Get zCrea
     *
     * @return string 
     */
    public function getZCrea()
    {
        return $this->zCrea;
    }

    /**
     * Set zCustom
     *
     * @param string $zCustom
     * @return VibiaArticulosWs
     */
    public function setZCustom($zCustom)
    {
        $this->zCustom = $zCustom;

        return $this;
    }

    /**
     * Get zCustom
     *
     * @return string 
     */
    public function getZCustom()
    {
        return $this->zCustom;
    }

    /**
     * Set zRetiraartweb
     *
     * @param integer $zRetiraartweb
     * @return VibiaArticulosWs
     */
    public function setZRetiraartweb($zRetiraartweb)
    {
        $this->zRetiraartweb = $zRetiraartweb;

        return $this;
    }

    /**
     * Get zRetiraartweb
     *
     * @return integer 
     */
    public function getZRetiraartweb()
    {
        return $this->zRetiraartweb;
    }

    /**
     * Set zPorcentajeaumentocustom
     *
     * @param integer $zPorcentajeaumentocustom
     * @return VibiaArticulosWs
     */
    public function setZPorcentajeaumentocustom($zPorcentajeaumentocustom)
    {
        $this->zPorcentajeaumentocustom = $zPorcentajeaumentocustom;

        return $this;
    }

    /**
     * Get zPorcentajeaumentocustom
     *
     * @return integer 
     */
    public function getZPorcentajeaumentocustom()
    {
        return $this->zPorcentajeaumentocustom;
    }

    /**
     * Set zBlnecofriendly
     *
     * @param string $zBlnecofriendly
     * @return VibiaArticulosWs
     */
    public function setZBlnecofriendly($zBlnecofriendly)
    {
        $this->zBlnecofriendly = $zBlnecofriendly;

        return $this;
    }

    /**
     * Get zBlnecofriendly
     *
     * @return string 
     */
    public function getZBlnecofriendly()
    {
        return $this->zBlnecofriendly;
    }

    /**
     * Set zEtiquetaefienergetica
     *
     * @param integer $zEtiquetaefienergetica
     * @return VibiaArticulosWs
     */
    public function setZEtiquetaefienergetica($zEtiquetaefienergetica)
    {
        $this->zEtiquetaefienergetica = $zEtiquetaefienergetica;

        return $this;
    }

    /**
     * Get zEtiquetaefienergetica
     *
     * @return integer 
     */
    public function getZEtiquetaefienergetica()
    {
        return $this->zEtiquetaefienergetica;
    }

    /**
     * Set zIntminunits
     *
     * @param integer $zIntminunits
     * @return VibiaArticulosWs
     */
    public function setZIntminunits($zIntminunits)
    {
        $this->zIntminunits = $zIntminunits;

        return $this;
    }

    /**
     * Get zIntminunits
     *
     * @return integer 
     */
    public function getZIntminunits()
    {
        return $this->zIntminunits;
    }

    /**
     * Set zBlnvirtual
     *
     * @param boolean $zBlnvirtual
     * @return VibiaArticulosWs
     */
    public function setZBlnvirtual($zBlnvirtual)
    {
        $this->zBlnvirtual = $zBlnvirtual;

        return $this;
    }

    /**
     * Get zBlnvirtual
     *
     * @return boolean 
     */
    public function getZBlnvirtual()
    {
        return $this->zBlnvirtual;
    }

    /**
     * Set zVisionluz3d
     *
     * @param string $zVisionluz3d
     * @return VibiaArticulosWs
     */
    public function setZVisionluz3d($zVisionluz3d)
    {
        $this->zVisionluz3d = $zVisionluz3d;

        return $this;
    }

    /**
     * Get zVisionluz3d
     *
     * @return string 
     */
    public function getZVisionluz3d()
    {
        return $this->zVisionluz3d;
    }

    /**
     * Set zIntensidadluz3d
     *
     * @param string $zIntensidadluz3d
     * @return VibiaArticulosWs
     */
    public function setZIntensidadluz3d($zIntensidadluz3d)
    {
        $this->zIntensidadluz3d = $zIntensidadluz3d;

        return $this;
    }

    /**
     * Get zIntensidadluz3d
     *
     * @return string 
     */
    public function getZIntensidadluz3d()
    {
        return $this->zIntensidadluz3d;
    }

    /**
     * Set zTipologiaadicional3d
     *
     * @param string $zTipologiaadicional3d
     * @return VibiaArticulosWs
     */
    public function setZTipologiaadicional3d($zTipologiaadicional3d)
    {
        $this->zTipologiaadicional3d = $zTipologiaadicional3d;

        return $this;
    }

    /**
     * Get zTipologiaadicional3d
     *
     * @return string 
     */
    public function getZTipologiaadicional3d()
    {
        return $this->zTipologiaadicional3d;
    }

    /**
     * Set famOrder
     *
     * @param integer $famOrder
     * @return VibiaArticulosWs
     */
    public function setFamOrder($famOrder)
    {
        $this->famOrder = $famOrder;

        return $this;
    }

    /**
     * Get famOrder
     *
     * @return integer 
     */
    public function getFamOrder()
    {
        return $this->famOrder;
    }

    /**
     * Set appOrder
     *
     * @param integer $appOrder
     * @return VibiaArticulosWs
     */
    public function setAppOrder($appOrder)
    {
        $this->appOrder = $appOrder;

        return $this;
    }

    /**
     * Get appOrder
     *
     * @return integer 
     */
    public function getAppOrder()
    {
        return $this->appOrder;
    }

    /**
     * Set latestOrder
     *
     * @param integer $latestOrder
     * @return VibiaArticulosWs
     */
    public function setLatestOrder($latestOrder)
    {
        $this->latestOrder = $latestOrder;

        return $this;
    }

    /**
     * Get latestOrder
     *
     * @return integer 
     */
    public function getLatestOrder()
    {
        return $this->latestOrder;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     * @return VibiaArticulosWs
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set zIdaplicacionubicacion1
     *
     * @param integer $zIdaplicacionubicacion1
     * @return VibiaArticulosWs
     */
    public function setZIdaplicacionubicacion1($zIdaplicacionubicacion1)
    {
        $this->zIdaplicacionubicacion1 = $zIdaplicacionubicacion1;

        return $this;
    }

    /**
     * Get zIdaplicacionubicacion1
     *
     * @return integer 
     */
    public function getZIdaplicacionubicacion1()
    {
        return $this->zIdaplicacionubicacion1;
    }

    /**
     * Set zIdaplicacionubicacion2
     *
     * @param integer $zIdaplicacionubicacion2
     * @return VibiaArticulosWs
     */
    public function setZIdaplicacionubicacion2($zIdaplicacionubicacion2)
    {
        $this->zIdaplicacionubicacion2 = $zIdaplicacionubicacion2;

        return $this;
    }

    /**
     * Get zIdaplicacionubicacion2
     *
     * @return integer 
     */
    public function getZIdaplicacionubicacion2()
    {
        return $this->zIdaplicacionubicacion2;
    }

    /**
     * Set zIdaplicacionubicacion3
     *
     * @param integer $zIdaplicacionubicacion3
     * @return VibiaArticulosWs
     */
    public function setZIdaplicacionubicacion3($zIdaplicacionubicacion3)
    {
        $this->zIdaplicacionubicacion3 = $zIdaplicacionubicacion3;

        return $this;
    }

    /**
     * Get zIdaplicacionubicacion3
     *
     * @return integer 
     */
    public function getZIdaplicacionubicacion3()
    {
        return $this->zIdaplicacionubicacion3;
    }

    /**
     * Set zIdaplicacionubicacion4
     *
     * @param integer $zIdaplicacionubicacion4
     * @return VibiaArticulosWs
     */
    public function setZIdaplicacionubicacion4($zIdaplicacionubicacion4)
    {
        $this->zIdaplicacionubicacion4 = $zIdaplicacionubicacion4;

        return $this;
    }

    /**
     * Get zIdaplicacionubicacion4
     *
     * @return integer 
     */
    public function getZIdaplicacionubicacion4()
    {
        return $this->zIdaplicacionubicacion4;
    }

    /**
     * Set zEficiencia
     *
     * @param string $zEficiencia
     * @return VibiaArticulosWs
     */
    public function setZEficiencia($zEficiencia)
    {
        $this->zEficiencia = $zEficiencia;

        return $this;
    }

    /**
     * Get zEficiencia
     *
     * @return string 
     */
    public function getZEficiencia()
    {
        return $this->zEficiencia;
    }

    /**
     * Set zSistcoordenadas
     *
     * @param string $zSistcoordenadas
     * @return VibiaArticulosWs
     */
    public function setZSistcoordenadas($zSistcoordenadas)
    {
        $this->zSistcoordenadas = $zSistcoordenadas;

        return $this;
    }

    /**
     * Get zSistcoordenadas
     *
     * @return string 
     */
    public function getZSistcoordenadas()
    {
        return $this->zSistcoordenadas;
    }

    /**
     * Set zFlujototal
     *
     * @param string $zFlujototal
     * @return VibiaArticulosWs
     */
    public function setZFlujototal($zFlujototal)
    {
        $this->zFlujototal = $zFlujototal;

        return $this;
    }

    /**
     * Get zFlujototal
     *
     * @return string 
     */
    public function getZFlujototal()
    {
        return $this->zFlujototal;
    }

    /**
     * Set zValormaximo
     *
     * @param string $zValormaximo
     * @return VibiaArticulosWs
     */
    public function setZValormaximo($zValormaximo)
    {
        $this->zValormaximo = $zValormaximo;

        return $this;
    }

    /**
     * Get zValormaximo
     *
     * @return string 
     */
    public function getZValormaximo()
    {
        return $this->zValormaximo;
    }

    /**
     * Set zPosicion
     *
     * @param string $zPosicion
     * @return VibiaArticulosWs
     */
    public function setZPosicion($zPosicion)
    {
        $this->zPosicion = $zPosicion;

        return $this;
    }

    /**
     * Get zPosicion
     *
     * @return string 
     */
    public function getZPosicion()
    {
        return $this->zPosicion;
    }

    /**
     * Set zIsolux
     *
     * @param string $zIsolux
     * @return VibiaArticulosWs
     */
    public function setZIsolux($zIsolux)
    {
        $this->zIsolux = $zIsolux;

        return $this;
    }

    /**
     * Get zIsolux
     *
     * @return string 
     */
    public function getZIsolux()
    {
        return $this->zIsolux;
    }

    /**
     * Set zPosicionluminaria
     *
     * @param string $zPosicionluminaria
     * @return VibiaArticulosWs
     */
    public function setZPosicionluminaria($zPosicionluminaria)
    {
        $this->zPosicionluminaria = $zPosicionluminaria;

        return $this;
    }

    /**
     * Get zPosicionluminaria
     *
     * @return string 
     */
    public function getZPosicionluminaria()
    {
        return $this->zPosicionluminaria;
    }

    /**
     * Set zRotacionluminaria
     *
     * @param string $zRotacionluminaria
     * @return VibiaArticulosWs
     */
    public function setZRotacionluminaria($zRotacionluminaria)
    {
        $this->zRotacionluminaria = $zRotacionluminaria;

        return $this;
    }

    /**
     * Get zRotacionluminaria
     *
     * @return string 
     */
    public function getZRotacionluminaria()
    {
        return $this->zRotacionluminaria;
    }

    /**
     * Set zIdsimetria
     *
     * @param integer $zIdsimetria
     * @return VibiaArticulosWs
     */
    public function setZIdsimetria($zIdsimetria)
    {
        $this->zIdsimetria = $zIdsimetria;

        return $this;
    }

    /**
     * Get zIdsimetria
     *
     * @return integer 
     */
    public function getZIdsimetria()
    {
        return $this->zIdsimetria;
    }

    /**
     * Set zConexionmatch1
     *
     * @param string $zConexionmatch1
     * @return VibiaArticulosWs
     */
    public function setZConexionmatch1($zConexionmatch1)
    {
        $this->zConexionmatch1 = $zConexionmatch1;

        return $this;
    }

    /**
     * Get zConexionmatch1
     *
     * @return string 
     */
    public function getZConexionmatch1()
    {
        return $this->zConexionmatch1;
    }

    /**
     * Set zConexionmatch2
     *
     * @param string $zConexionmatch2
     * @return VibiaArticulosWs
     */
    public function setZConexionmatch2($zConexionmatch2)
    {
        $this->zConexionmatch2 = $zConexionmatch2;

        return $this;
    }

    /**
     * Get zConexionmatch2
     *
     * @return string 
     */
    public function getZConexionmatch2()
    {
        return $this->zConexionmatch2;
    }

    /**
     * Set zCertificadosusa
     *
     * @param string $zCertificadosusa
     * @return VibiaArticulosWs
     */
    public function setZCertificadosusa($zCertificadosusa)
    {
        $this->zCertificadosusa = $zCertificadosusa;

        return $this;
    }

    /**
     * Get zCertificadosusa
     *
     * @return string 
     */
    public function getZCertificadosusa()
    {
        return $this->zCertificadosusa;
    }

    /**
     * Set zCertificadoadausa
     *
     * @param string $zCertificadoadausa
     * @return VibiaArticulosWs
     */
    public function setZCertificadoadausa($zCertificadoadausa)
    {
        $this->zCertificadoadausa = $zCertificadoadausa;

        return $this;
    }

    /**
     * Get zCertificadoadausa
     *
     * @return string 
     */
    public function getZCertificadoadausa()
    {
        return $this->zCertificadoadausa;
    }

    /**
     * Set zLocationusa
     *
     * @param string $zLocationusa
     * @return VibiaArticulosWs
     */
    public function setZLocationusa($zLocationusa)
    {
        $this->zLocationusa = $zLocationusa;

        return $this;
    }

    /**
     * Get zLocationusa
     *
     * @return string 
     */
    public function getZLocationusa()
    {
        return $this->zLocationusa;
    }

    /**
     * Set zZIdunity3d1
     *
     * @param string $zZIdunity3d1
     * @return VibiaArticulosWs
     */
    public function setZZIdunity3d1($zZIdunity3d1)
    {
        $this->zZIdunity3d1 = $zZIdunity3d1;

        return $this;
    }

    /**
     * Get zZIdunity3d1
     *
     * @return string 
     */
    public function getZZIdunity3d1()
    {
        return $this->zZIdunity3d1;
    }

    /**
     * Set zIdunity3d2
     *
     * @param string $zIdunity3d2
     * @return VibiaArticulosWs
     */
    public function setZIdunity3d2($zIdunity3d2)
    {
        $this->zIdunity3d2 = $zIdunity3d2;

        return $this;
    }

    /**
     * Get zIdunity3d2
     *
     * @return string 
     */
    public function getZIdunity3d2()
    {
        return $this->zIdunity3d2;
    }

    /**
     * Set zIdunity3d3
     *
     * @param string $zIdunity3d3
     * @return VibiaArticulosWs
     */
    public function setZIdunity3d3($zIdunity3d3)
    {
        $this->zIdunity3d3 = $zIdunity3d3;

        return $this;
    }

    /**
     * Get zIdunity3d3
     *
     * @return string 
     */
    public function getZIdunity3d3()
    {
        return $this->zIdunity3d3;
    }

    /**
     * Set zIdunity3d4
     *
     * @param string $zIdunity3d4
     * @return VibiaArticulosWs
     */
    public function setZIdunity3d4($zIdunity3d4)
    {
        $this->zIdunity3d4 = $zIdunity3d4;

        return $this;
    }

    /**
     * Get zIdunity3d4
     *
     * @return string 
     */
    public function getZIdunity3d4()
    {
        return $this->zIdunity3d4;
    }

    /**
     * Set zDialuxSpectrum
     *
     * @param string $zDialuxSpectrum
     * @return VibiaArticulosWs
     */
    public function setZDialuxSpectrum($zDialuxSpectrum)
    {
        $this->zDialuxSpectrum = $zDialuxSpectrum;

        return $this;
    }

    /**
     * Get zDialuxSpectrum
     *
     * @return string 
     */
    public function getZDialuxSpectrum()
    {
        return $this->zDialuxSpectrum;
    }

    /**
     * Set zDialuxLtd
     *
     * @param string $zDialuxLtd
     * @return VibiaArticulosWs
     */
    public function setZDialuxLtd($zDialuxLtd)
    {
        $this->zDialuxLtd = $zDialuxLtd;

        return $this;
    }

    /**
     * Get zDialuxLtd
     *
     * @return string 
     */
    public function getZDialuxLtd()
    {
        return $this->zDialuxLtd;
    }

    /**
     * Set zDialuxIes
     *
     * @param string $zDialuxIes
     * @return VibiaArticulosWs
     */
    public function setZDialuxIes($zDialuxIes)
    {
        $this->zDialuxIes = $zDialuxIes;

        return $this;
    }

    /**
     * Get zDialuxIes
     *
     * @return string 
     */
    public function getZDialuxIes()
    {
        return $this->zDialuxIes;
    }

    /**
     * Set zDialuxFoto
     *
     * @param string $zDialuxFoto
     * @return VibiaArticulosWs
     */
    public function setZDialuxFoto($zDialuxFoto)
    {
        $this->zDialuxFoto = $zDialuxFoto;

        return $this;
    }

    /**
     * Get zDialuxFoto
     *
     * @return string 
     */
    public function getZDialuxFoto()
    {
        return $this->zDialuxFoto;
    }

    /**
     * Set zDialux3d
     *
     * @param string $zDialux3d
     * @return VibiaArticulosWs
     */
    public function setZDialux3d($zDialux3d)
    {
        $this->zDialux3d = $zDialux3d;

        return $this;
    }

    /**
     * Get zDialux3d
     *
     * @return string 
     */
    public function getZDialux3d()
    {
        return $this->zDialux3d;
    }

    /**
     * Set zDialuxUld
     *
     * @param string $zDialuxUld
     * @return VibiaArticulosWs
     */
    public function setZDialuxUld($zDialuxUld)
    {
        $this->zDialuxUld = $zDialuxUld;

        return $this;
    }

    /**
     * Get zDialuxUld
     *
     * @return string 
     */
    public function getZDialuxUld()
    {
        return $this->zDialuxUld;
    }

    /**
     * Set zDialuxLdt
     *
     * @param string $zDialuxLdt
     * @return VibiaArticulosWs
     */
    public function setZDialuxLdt($zDialuxLdt)
    {
        $this->zDialuxLdt = $zDialuxLdt;

        return $this;
    }

    /**
     * Get zDialuxLdt
     *
     * @return string 
     */
    public function getZDialuxLdt()
    {
        return $this->zDialuxLdt;
    }

    /**
     * Set zCustombrillomate
     *
     * @param string $zCustombrillomate
     * @return VibiaArticulosWs
     */
    public function setZCustombrillomate($zCustombrillomate)
    {
        $this->zCustombrillomate = $zCustombrillomate;

        return $this;
    }

    /**
     * Get zCustombrillomate
     *
     * @return string 
     */
    public function getZCustombrillomate()
    {
        return $this->zCustombrillomate;
    }

    /**
     * Set zIdpantalla
     *
     * @param integer $zIdpantalla
     * @return VibiaArticulosWs
     */
    public function setZIdpantalla($zIdpantalla)
    {
        $this->zIdpantalla = $zIdpantalla;

        return $this;
    }

    /**
     * Get zIdpantalla
     *
     * @return integer 
     */
    public function getZIdpantalla()
    {
        return $this->zIdpantalla;
    }

    /**
     * Set zMetroscable
     *
     * @param float $zMetroscable
     * @return VibiaArticulosWs
     */
    public function setZMetroscable($zMetroscable)
    {
        $this->zMetroscable = $zMetroscable;

        return $this;
    }

    /**
     * Get zMetroscable
     *
     * @return float 
     */
    public function getZMetroscable()
    {
        return $this->zMetroscable;
    }

    /**
     * Set zMordazawireflow
     *
     * @param integer $zMordazawireflow
     * @return VibiaArticulosWs
     */
    public function setZMordazawireflow($zMordazawireflow)
    {
        $this->zMordazawireflow = $zMordazawireflow;

        return $this;
    }

    /**
     * Get zMordazawireflow
     *
     * @return integer 
     */
    public function getZMordazawireflow()
    {
        return $this->zMordazawireflow;
    }

    /**
     * Set zIdlumensluminaria
     *
     * @param float $zIdlumensluminaria
     * @return VibiaArticulosWs
     */
    public function setZIdlumensluminaria($zIdlumensluminaria)
    {
        $this->zIdlumensluminaria = $zIdlumensluminaria;

        return $this;
    }

    /**
     * Get zIdlumensluminaria
     *
     * @return float 
     */
    public function getZIdlumensluminaria()
    {
        return $this->zIdlumensluminaria;
    }

    /**
     * Set zIdlumtotfuenteluz
     *
     * @param float $zIdlumtotfuenteluz
     * @return VibiaArticulosWs
     */
    public function setZIdlumtotfuenteluz($zIdlumtotfuenteluz)
    {
        $this->zIdlumtotfuenteluz = $zIdlumtotfuenteluz;

        return $this;
    }

    /**
     * Get zIdlumtotfuenteluz
     *
     * @return float 
     */
    public function getZIdlumtotfuenteluz()
    {
        return $this->zIdlumtotfuenteluz;
    }

    /**
     * Set zIdlumwatluminaria
     *
     * @param float $zIdlumwatluminaria
     * @return VibiaArticulosWs
     */
    public function setZIdlumwatluminaria($zIdlumwatluminaria)
    {
        $this->zIdlumwatluminaria = $zIdlumwatluminaria;

        return $this;
    }

    /**
     * Get zIdlumwatluminaria
     *
     * @return float 
     */
    public function getZIdlumwatluminaria()
    {
        return $this->zIdlumwatluminaria;
    }

    /**
     * Set zIdlumwatfuenteluz
     *
     * @param float $zIdlumwatfuenteluz
     * @return VibiaArticulosWs
     */
    public function setZIdlumwatfuenteluz($zIdlumwatfuenteluz)
    {
        $this->zIdlumwatfuenteluz = $zIdlumwatfuenteluz;

        return $this;
    }

    /**
     * Get zIdlumwatfuenteluz
     *
     * @return float 
     */
    public function getZIdlumwatfuenteluz()
    {
        return $this->zIdlumwatfuenteluz;
    }

    /**
     * Set zIdcorriente
     *
     * @param float $zIdcorriente
     * @return VibiaArticulosWs
     */
    public function setZIdcorriente($zIdcorriente)
    {
        $this->zIdcorriente = $zIdcorriente;

        return $this;
    }

    /**
     * Get zIdcorriente
     *
     * @return float 
     */
    public function getZIdcorriente()
    {
        return $this->zIdcorriente;
    }

    /**
     * Set zIdvoltsalida
     *
     * @param float $zIdvoltsalida
     * @return VibiaArticulosWs
     */
    public function setZIdvoltsalida($zIdvoltsalida)
    {
        $this->zIdvoltsalida = $zIdvoltsalida;

        return $this;
    }

    /**
     * Get zIdvoltsalida
     *
     * @return float 
     */
    public function getZIdvoltsalida()
    {
        return $this->zIdvoltsalida;
    }

    /**
     * Set zIdmodeloequipo
     *
     * @param float $zIdmodeloequipo
     * @return VibiaArticulosWs
     */
    public function setZIdmodeloequipo($zIdmodeloequipo)
    {
        $this->zIdmodeloequipo = $zIdmodeloequipo;

        return $this;
    }

    /**
     * Get zIdmodeloequipo
     *
     * @return float 
     */
    public function getZIdmodeloequipo()
    {
        return $this->zIdmodeloequipo;
    }

    /**
     * Set zIdsubfamilia
     *
     * @param integer $zIdsubfamilia
     * @return VibiaArticulosWs
     */
    public function setZIdsubfamilia($zIdsubfamilia)
    {
        $this->zIdsubfamilia = $zIdsubfamilia;

        return $this;
    }

    /**
     * Get zIdsubfamilia
     *
     * @return integer 
     */
    public function getZIdsubfamilia()
    {
        return $this->zIdsubfamilia;
    }

    /**
     * Set subfamilia
     *
     * @param string $subfamilia
     * @return VibiaArticulosWs
     */
    public function setSubfamilia($subfamilia)
    {
        $this->subfamilia = $subfamilia;

        return $this;
    }

    /**
     * Get subfamilia
     *
     * @return string 
     */
    public function getSubfamilia()
    {
        return $this->subfamilia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return VibiaArticulosWs
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
     * Set zIdmarcaequipo
     *
     * @param float $zIdmarcaequipo
     * @return VibiaArticulosWs
     */
    public function setZIdmarcaequipo($zIdmarcaequipo)
    {
        $this->zIdmarcaequipo = $zIdmarcaequipo;

        return $this;
    }

    /**
     * Get zIdmarcaequipo
     *
     * @return float 
     */
    public function getZIdmarcaequipo()
    {
        return $this->zIdmarcaequipo;
    }

    /**
     * Set zIdtempcolorluminaria
     *
     * @param float $zIdtempcolorluminaria
     * @return VibiaArticulosWs
     */
    public function setZIdtempcolorluminaria($zIdtempcolorluminaria)
    {
        $this->zIdtempcolorluminaria = $zIdtempcolorluminaria;

        return $this;
    }

    /**
     * Get zIdtempcolorluminaria
     *
     * @return float 
     */
    public function getZIdtempcolorluminaria()
    {
        return $this->zIdtempcolorluminaria;
    }

    /**
     * Set zIdcri
     *
     * @param float $zIdcri
     * @return VibiaArticulosWs
     */
    public function setZIdcri($zIdcri)
    {
        $this->zIdcri = $zIdcri;

        return $this;
    }

    /**
     * Get zIdcri
     *
     * @return float 
     */
    public function getZIdcri()
    {
        return $this->zIdcri;
    }

    /**
     * Set zIdvoltentrada
     *
     * @param float $zIdvoltentrada
     * @return VibiaArticulosWs
     */
    public function setZIdvoltentrada($zIdvoltentrada)
    {
        $this->zIdvoltentrada = $zIdvoltentrada;

        return $this;
    }

    /**
     * Get zIdvoltentrada
     *
     * @return float 
     */
    public function getZIdvoltentrada()
    {
        return $this->zIdvoltentrada;
    }

    /**
     * Set zIdfrecuencia
     *
     * @param float $zIdfrecuencia
     * @return VibiaArticulosWs
     */
    public function setZIdfrecuencia($zIdfrecuencia)
    {
        $this->zIdfrecuencia = $zIdfrecuencia;

        return $this;
    }

    /**
     * Get zIdfrecuencia
     *
     * @return float 
     */
    public function getZIdfrecuencia()
    {
        return $this->zIdfrecuencia;
    }

    /**
     * Set zIdmateriales
     *
     * @param string $zIdmateriales
     * @return VibiaArticulosWs
     */
    public function setZIdmateriales($zIdmateriales)
    {
        $this->zIdmateriales = $zIdmateriales;

        return $this;
    }

    /**
     * Get zIdmateriales
     *
     * @return string 
     */
    public function getZIdmateriales()
    {
        return $this->zIdmateriales;
    }

    /**
     * Set zIdmateriales2
     *
     * @param string $zIdmateriales2
     * @return VibiaArticulosWs
     */
    public function setZIdmateriales2($zIdmateriales2)
    {
        $this->zIdmateriales2 = $zIdmateriales2;

        return $this;
    }

    /**
     * Get zIdmateriales2
     *
     * @return string 
     */
    public function getZIdmateriales2()
    {
        return $this->zIdmateriales2;
    }

    /**
     * Set zIdmateriales3
     *
     * @param string $zIdmateriales3
     * @return VibiaArticulosWs
     */
    public function setZIdmateriales3($zIdmateriales3)
    {
        $this->zIdmateriales3 = $zIdmateriales3;

        return $this;
    }

    /**
     * Get zIdmateriales3
     *
     * @return string 
     */
    public function getZIdmateriales3()
    {
        return $this->zIdmateriales3;
    }

    /**
     * Set zIdmateriales4
     *
     * @param string $zIdmateriales4
     * @return VibiaArticulosWs
     */
    public function setZIdmateriales4($zIdmateriales4)
    {
        $this->zIdmateriales4 = $zIdmateriales4;

        return $this;
    }

    /**
     * Get zIdmateriales4
     *
     * @return string 
     */
    public function getZIdmateriales4()
    {
        return $this->zIdmateriales4;
    }

    /**
     * Set zIdwebgl3d1
     *
     * @param string $zIdwebgl3d1
     * @return VibiaArticulosWs
     */
    public function setZIdwebgl3d1($zIdwebgl3d1)
    {
        $this->zIdwebgl3d1 = $zIdwebgl3d1;

        return $this;
    }

    /**
     * Get zIdwebgl3d1
     *
     * @return string 
     */
    public function getZIdwebgl3d1()
    {
        return $this->zIdwebgl3d1;
    }

    /**
     * Set zIdwebgl3d2
     *
     * @param string $zIdwebgl3d2
     * @return VibiaArticulosWs
     */
    public function setZIdwebgl3d2($zIdwebgl3d2)
    {
        $this->zIdwebgl3d2 = $zIdwebgl3d2;

        return $this;
    }

    /**
     * Get zIdwebgl3d2
     *
     * @return string 
     */
    public function getZIdwebgl3d2()
    {
        return $this->zIdwebgl3d2;
    }

    /**
     * Set zIdwebgl3d3
     *
     * @param string $zIdwebgl3d3
     * @return VibiaArticulosWs
     */
    public function setZIdwebgl3d3($zIdwebgl3d3)
    {
        $this->zIdwebgl3d3 = $zIdwebgl3d3;

        return $this;
    }

    /**
     * Get zIdwebgl3d3
     *
     * @return string 
     */
    public function getZIdwebgl3d3()
    {
        return $this->zIdwebgl3d3;
    }

    /**
     * Set zIdwebgl3d4
     *
     * @param string $zIdwebgl3d4
     * @return VibiaArticulosWs
     */
    public function setZIdwebgl3d4($zIdwebgl3d4)
    {
        $this->zIdwebgl3d4 = $zIdwebgl3d4;

        return $this;
    }

    /**
     * Get zIdwebgl3d4
     *
     * @return string 
     */
    public function getZIdwebgl3d4()
    {
        return $this->zIdwebgl3d4;
    }
}
