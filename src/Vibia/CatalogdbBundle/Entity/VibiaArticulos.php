<?php

namespace Vibia\CatalogdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VibiaArticulos
 */
class VibiaArticulos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idArticle;

    /**
     * @var integer
     */
    private $idFamilia;

    /**
     * @var integer
     */
    private $idSubfamilia;

    /**
     * @var integer
     */
    private $idDifusor;

    /**
     * @var integer
     */
    private $idAplicacion;

    /**
     * @var integer
     */
    private $idRal;

    /**
     * @var integer
     */
    private $idDesigner;

    /**
     * @var string
     */
    private $idCod4;

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
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $descuentomaximo;

    /**
     * @var boolean
     */
    private $max;

    /**
     * @var float
     */
    private $alto;

    /**
     * @var float
     */
    private $ancho;

    /**
     * @var float
     */
    private $largo;

    /**
     * @var float
     */
    private $pesobruto;

    /**
     * @var float
     */
    private $pesoneto;

    /**
     * @var float
     */
    private $vol;

    /**
     * @var string
     */
    private $pack;

    /**
     * @var string
     */
    private $claseid;

    /**
     * @var integer
     */
    private $accesorioId;

    /**
     * @var integer
     */
    private $clasifestadisticaId;

    /**
     * @var string
     */
    private $observacion1;

    /**
     * @var string
     */
    private $observacion2;

    /**
     * @var string
     */
    private $observacion3;

    /**
     * @var string
     */
    private $observacion4;

    /**
     * @var string
     */
    private $observacion5;

    /**
     * @var string
     */
    private $simbip;

    /**
     * @var string
     */
    private $claseaislamiento;

    /**
     * @var string
     */
    private $superficiesinflamables;

    /**
     * @var string
     */
    private $dimensioncorte;

    /**
     * @var string
     */
    private $distanciaminima;

    /**
     * @var string
     */
    private $equiponointegrado;

    /**
     * @var string
     */
    private $reguladorintensidad;

    /**
     * @var string
     */
    private $certificado;

    /**
     * @var integer
     */
    private $certificadousa;

    /**
     * @var boolean
     */
    private $certificadoadausa;

    /**
     * @var integer
     */
    private $locationusa;

    /**
     * @var boolean
     */
    private $blmini;

    /**
     * @var boolean
     */
    private $bivolt;

    /**
     * @var string
     */
    private $efectodeluz;

    /**
     * @var string
     */
    private $wattsprincipal;

    /**
     * @var string
     */
    private $wattsopcional;

    /**
     * @var string
     */
    private $fechacomercializacion;

    /**
     * @var string
     */
    private $instalacion;

    /**
     * @var boolean
     */
    private $ambiente;

    /**
     * @var boolean
     */
    private $blexiste110;

    /**
     * @var string
     */
    private $blnuevo;

    /**
     * @var boolean
     */
    private $bledincluido;

    /**
     * @var string
     */
    private $simbip2;

    /**
     * @var string
     */
    private $crea;

    /**
     * @var string
     */
    private $custom;

    /**
     * @var string
     */
    private $custombrillomate;

    /**
     * @var integer
     */
    private $porcentajeaumentocustom;

    /**
     * @var boolean
     */
    private $ecofriendly;

    /**
     * @var integer
     */
    private $etiquetaefienergetica;

    /**
     * @var integer
     */
    private $intminunits;

    /**
     * @var boolean
     */
    private $blnvirtual;

    /**
     * @var string
     */
    private $visionluz3d;

    /**
     * @var string
     */
    private $intensidadluz3d;

    /**
     * @var string
     */
    private $tipologiaadicional3d;

    /**
     * @var string
     */
    private $eficiencia;

    /**
     * @var string
     */
    private $sistcoordenadas;

    /**
     * @var string
     */
    private $flujototal;

    /**
     * @var string
     */
    private $valormaximo;

    /**
     * @var string
     */
    private $posicion;

    /**
     * @var string
     */
    private $isolux;

    /**
     * @var string
     */
    private $posicionluminaria;

    /**
     * @var string
     */
    private $rotacionluminaria;

    /**
     * @var integer
     */
    private $idsimetria;

    /**
     * @var string
     */
    private $composicion;

    /**
     * @var integer
     */
    private $languageId;

    /**
     * @var string
     */
    private $conexionmatch1;

    /**
     * @var string
     */
    private $conexionmatch2;

    /**
     * @var integer
     */
    private $dimmable;

    /**
     * @var integer
     */
    private $idpantalla;

    /**
     * @var float
     */
    private $metroscable;

    /**
     * @var integer
     */
    private $mordaza;

    /**
     * @var float
     */
    private $lumens;

    /**
     * @var float
     */
    private $lumtotfuenteluz;

    /**
     * @var float
     */
    private $lumwatluminaria;

    /**
     * @var float
     */
    private $lumwatfuenteluz;

    /**
     * @var float
     */
    private $corriente;

    /**
     * @var float
     */
    private $voltsalida;

    /**
     * @var float
     */
    private $modeloequipo;

    /**
     * @var integer
     */
    private $catalogo;

    /**
     * @var \DateTime
     */
    private $cmsUpdated;

    /**
     * @var boolean
     */
    private $activePhotoSimulation;

    /**
     * @var boolean
     */
    private $activeProject;

    /**
     * @var boolean
     */
    private $activeList;

    /**
     * @var boolean
     */
    private $activeOrders;

    /**
     * @var integer
     */
    private $marcaequipo;

    /**
     * @var integer
     */
    private $tempcolorluminaria;

    /**
     * @var integer
     */
    private $cri;

    /**
     * @var integer
     */
    private $voltentrada;

    /**
     * @var integer
     */
    private $tipofrecuencia;

    /**
     * @var string
     */
    private $material1;

    /**
     * @var string
     */
    private $material2;

    /**
     * @var string
     */
    private $material3;

    /**
     * @var string
     */
    private $material4;

    /**
     * @var integer
     */
    private $ral;

    /**
     * @var string
     */
    private $idTempcolorled;

    /**
     * @var string
     */
    private $idTiporegulacion;


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
     * Set idArticle
     *
     * @param string $idArticle
     * @return VibiaArticulos
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return string 
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idFamilia
     *
     * @param integer $idFamilia
     * @return VibiaArticulos
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
     * Set idSubfamilia
     *
     * @param integer $idSubfamilia
     * @return VibiaArticulos
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
     * Set idDifusor
     *
     * @param integer $idDifusor
     * @return VibiaArticulos
     */
    public function setIdDifusor($idDifusor)
    {
        $this->idDifusor = $idDifusor;

        return $this;
    }

    /**
     * Get idDifusor
     *
     * @return integer 
     */
    public function getIdDifusor()
    {
        return $this->idDifusor;
    }

    /**
     * Set idAplicacion
     *
     * @param integer $idAplicacion
     * @return VibiaArticulos
     */
    public function setIdAplicacion($idAplicacion)
    {
        $this->idAplicacion = $idAplicacion;

        return $this;
    }

    /**
     * Get idAplicacion
     *
     * @return integer 
     */
    public function getIdAplicacion()
    {
        return $this->idAplicacion;
    }

    /**
     * Set idRal
     *
     * @param integer $idRal
     * @return VibiaArticulos
     */
    public function setIdRal($idRal)
    {
        $this->idRal = $idRal;

        return $this;
    }

    /**
     * Get idRal
     *
     * @return integer 
     */
    public function getIdRal()
    {
        return $this->idRal;
    }

    /**
     * Set idDesigner
     *
     * @param integer $idDesigner
     * @return VibiaArticulos
     */
    public function setIdDesigner($idDesigner)
    {
        $this->idDesigner = $idDesigner;

        return $this;
    }

    /**
     * Get idDesigner
     *
     * @return integer 
     */
    public function getIdDesigner()
    {
        return $this->idDesigner;
    }

    /**
     * Set idCod4
     *
     * @param string $idCod4
     * @return VibiaArticulos
     */
    public function setIdCod4($idCod4)
    {
        $this->idCod4 = $idCod4;

        return $this;
    }

    /**
     * Get idCod4
     *
     * @return string 
     */
    public function getIdCod4()
    {
        return $this->idCod4;
    }

    /**
     * Set famOrder
     *
     * @param integer $famOrder
     * @return VibiaArticulos
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
     * @return VibiaArticulos
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
     * @return VibiaArticulos
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return VibiaArticulos
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
     * @param string $precio
     * @return VibiaArticulos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return VibiaArticulos
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
     * @param string $descuentomaximo
     * @return VibiaArticulos
     */
    public function setDescuentomaximo($descuentomaximo)
    {
        $this->descuentomaximo = $descuentomaximo;

        return $this;
    }

    /**
     * Get descuentomaximo
     *
     * @return string 
     */
    public function getDescuentomaximo()
    {
        return $this->descuentomaximo;
    }

    /**
     * Set max
     *
     * @param boolean $max
     * @return VibiaArticulos
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return boolean 
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set alto
     *
     * @param float $alto
     * @return VibiaArticulos
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;

        return $this;
    }

    /**
     * Get alto
     *
     * @return float 
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * Set ancho
     *
     * @param float $ancho
     * @return VibiaArticulos
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get ancho
     *
     * @return float 
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set largo
     *
     * @param float $largo
     * @return VibiaArticulos
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }

    /**
     * Get largo
     *
     * @return float 
     */
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set pesobruto
     *
     * @param float $pesobruto
     * @return VibiaArticulos
     */
    public function setPesobruto($pesobruto)
    {
        $this->pesobruto = $pesobruto;

        return $this;
    }

    /**
     * Get pesobruto
     *
     * @return float 
     */
    public function getPesobruto()
    {
        return $this->pesobruto;
    }

    /**
     * Set pesoneto
     *
     * @param float $pesoneto
     * @return VibiaArticulos
     */
    public function setPesoneto($pesoneto)
    {
        $this->pesoneto = $pesoneto;

        return $this;
    }

    /**
     * Get pesoneto
     *
     * @return float 
     */
    public function getPesoneto()
    {
        return $this->pesoneto;
    }

    /**
     * Set vol
     *
     * @param float $vol
     * @return VibiaArticulos
     */
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return float 
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set pack
     *
     * @param string $pack
     * @return VibiaArticulos
     */
    public function setPack($pack)
    {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return string 
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * Set claseid
     *
     * @param string $claseid
     * @return VibiaArticulos
     */
    public function setClaseid($claseid)
    {
        $this->claseid = $claseid;

        return $this;
    }

    /**
     * Get claseid
     *
     * @return string 
     */
    public function getClaseid()
    {
        return $this->claseid;
    }

    /**
     * Set accesorioId
     *
     * @param integer $accesorioId
     * @return VibiaArticulos
     */
    public function setAccesorioId($accesorioId)
    {
        $this->accesorioId = $accesorioId;

        return $this;
    }

    /**
     * Get accesorioId
     *
     * @return integer 
     */
    public function getAccesorioId()
    {
        return $this->accesorioId;
    }

    /**
     * Set clasifestadisticaId
     *
     * @param integer $clasifestadisticaId
     * @return VibiaArticulos
     */
    public function setClasifestadisticaId($clasifestadisticaId)
    {
        $this->clasifestadisticaId = $clasifestadisticaId;

        return $this;
    }

    /**
     * Get clasifestadisticaId
     *
     * @return integer 
     */
    public function getClasifestadisticaId()
    {
        return $this->clasifestadisticaId;
    }

    /**
     * Set observacion1
     *
     * @param string $observacion1
     * @return VibiaArticulos
     */
    public function setObservacion1($observacion1)
    {
        $this->observacion1 = $observacion1;

        return $this;
    }

    /**
     * Get observacion1
     *
     * @return string 
     */
    public function getObservacion1()
    {
        return $this->observacion1;
    }

    /**
     * Set observacion2
     *
     * @param string $observacion2
     * @return VibiaArticulos
     */
    public function setObservacion2($observacion2)
    {
        $this->observacion2 = $observacion2;

        return $this;
    }

    /**
     * Get observacion2
     *
     * @return string 
     */
    public function getObservacion2()
    {
        return $this->observacion2;
    }

    /**
     * Set observacion3
     *
     * @param string $observacion3
     * @return VibiaArticulos
     */
    public function setObservacion3($observacion3)
    {
        $this->observacion3 = $observacion3;

        return $this;
    }

    /**
     * Get observacion3
     *
     * @return string 
     */
    public function getObservacion3()
    {
        return $this->observacion3;
    }

    /**
     * Set observacion4
     *
     * @param string $observacion4
     * @return VibiaArticulos
     */
    public function setObservacion4($observacion4)
    {
        $this->observacion4 = $observacion4;

        return $this;
    }

    /**
     * Get observacion4
     *
     * @return string 
     */
    public function getObservacion4()
    {
        return $this->observacion4;
    }

    /**
     * Set observacion5
     *
     * @param string $observacion5
     * @return VibiaArticulos
     */
    public function setObservacion5($observacion5)
    {
        $this->observacion5 = $observacion5;

        return $this;
    }

    /**
     * Get observacion5
     *
     * @return string 
     */
    public function getObservacion5()
    {
        return $this->observacion5;
    }

    /**
     * Set simbip
     *
     * @param string $simbip
     * @return VibiaArticulos
     */
    public function setSimbip($simbip)
    {
        $this->simbip = $simbip;

        return $this;
    }

    /**
     * Get simbip
     *
     * @return string 
     */
    public function getSimbip()
    {
        return $this->simbip;
    }

    /**
     * Set claseaislamiento
     *
     * @param string $claseaislamiento
     * @return VibiaArticulos
     */
    public function setClaseaislamiento($claseaislamiento)
    {
        $this->claseaislamiento = $claseaislamiento;

        return $this;
    }

    /**
     * Get claseaislamiento
     *
     * @return string 
     */
    public function getClaseaislamiento()
    {
        return $this->claseaislamiento;
    }

    /**
     * Set superficiesinflamables
     *
     * @param string $superficiesinflamables
     * @return VibiaArticulos
     */
    public function setSuperficiesinflamables($superficiesinflamables)
    {
        $this->superficiesinflamables = $superficiesinflamables;

        return $this;
    }

    /**
     * Get superficiesinflamables
     *
     * @return string 
     */
    public function getSuperficiesinflamables()
    {
        return $this->superficiesinflamables;
    }

    /**
     * Set dimensioncorte
     *
     * @param string $dimensioncorte
     * @return VibiaArticulos
     */
    public function setDimensioncorte($dimensioncorte)
    {
        $this->dimensioncorte = $dimensioncorte;

        return $this;
    }

    /**
     * Get dimensioncorte
     *
     * @return string 
     */
    public function getDimensioncorte()
    {
        return $this->dimensioncorte;
    }

    /**
     * Set distanciaminima
     *
     * @param string $distanciaminima
     * @return VibiaArticulos
     */
    public function setDistanciaminima($distanciaminima)
    {
        $this->distanciaminima = $distanciaminima;

        return $this;
    }

    /**
     * Get distanciaminima
     *
     * @return string 
     */
    public function getDistanciaminima()
    {
        return $this->distanciaminima;
    }

    /**
     * Set equiponointegrado
     *
     * @param string $equiponointegrado
     * @return VibiaArticulos
     */
    public function setEquiponointegrado($equiponointegrado)
    {
        $this->equiponointegrado = $equiponointegrado;

        return $this;
    }

    /**
     * Get equiponointegrado
     *
     * @return string 
     */
    public function getEquiponointegrado()
    {
        return $this->equiponointegrado;
    }

    /**
     * Set reguladorintensidad
     *
     * @param string $reguladorintensidad
     * @return VibiaArticulos
     */
    public function setReguladorintensidad($reguladorintensidad)
    {
        $this->reguladorintensidad = $reguladorintensidad;

        return $this;
    }

    /**
     * Get reguladorintensidad
     *
     * @return string 
     */
    public function getReguladorintensidad()
    {
        return $this->reguladorintensidad;
    }

    /**
     * Set certificado
     *
     * @param string $certificado
     * @return VibiaArticulos
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;

        return $this;
    }

    /**
     * Get certificado
     *
     * @return string 
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Set certificadousa
     *
     * @param integer $certificadousa
     * @return VibiaArticulos
     */
    public function setCertificadousa($certificadousa)
    {
        $this->certificadousa = $certificadousa;

        return $this;
    }

    /**
     * Get certificadousa
     *
     * @return integer 
     */
    public function getCertificadousa()
    {
        return $this->certificadousa;
    }

    /**
     * Set certificadoadausa
     *
     * @param boolean $certificadoadausa
     * @return VibiaArticulos
     */
    public function setCertificadoadausa($certificadoadausa)
    {
        $this->certificadoadausa = $certificadoadausa;

        return $this;
    }

    /**
     * Get certificadoadausa
     *
     * @return boolean 
     */
    public function getCertificadoadausa()
    {
        return $this->certificadoadausa;
    }

    /**
     * Set locationusa
     *
     * @param integer $locationusa
     * @return VibiaArticulos
     */
    public function setLocationusa($locationusa)
    {
        $this->locationusa = $locationusa;

        return $this;
    }

    /**
     * Get locationusa
     *
     * @return integer 
     */
    public function getLocationusa()
    {
        return $this->locationusa;
    }

    /**
     * Set blmini
     *
     * @param boolean $blmini
     * @return VibiaArticulos
     */
    public function setBlmini($blmini)
    {
        $this->blmini = $blmini;

        return $this;
    }

    /**
     * Get blmini
     *
     * @return boolean 
     */
    public function getBlmini()
    {
        return $this->blmini;
    }

    /**
     * Set bivolt
     *
     * @param boolean $bivolt
     * @return VibiaArticulos
     */
    public function setBivolt($bivolt)
    {
        $this->bivolt = $bivolt;

        return $this;
    }

    /**
     * Get bivolt
     *
     * @return boolean 
     */
    public function getBivolt()
    {
        return $this->bivolt;
    }

    /**
     * Set efectodeluz
     *
     * @param string $efectodeluz
     * @return VibiaArticulos
     */
    public function setEfectodeluz($efectodeluz)
    {
        $this->efectodeluz = $efectodeluz;

        return $this;
    }

    /**
     * Get efectodeluz
     *
     * @return string 
     */
    public function getEfectodeluz()
    {
        return $this->efectodeluz;
    }

    /**
     * Set wattsprincipal
     *
     * @param string $wattsprincipal
     * @return VibiaArticulos
     */
    public function setWattsprincipal($wattsprincipal)
    {
        $this->wattsprincipal = $wattsprincipal;

        return $this;
    }

    /**
     * Get wattsprincipal
     *
     * @return string 
     */
    public function getWattsprincipal()
    {
        return $this->wattsprincipal;
    }

    /**
     * Set wattsopcional
     *
     * @param string $wattsopcional
     * @return VibiaArticulos
     */
    public function setWattsopcional($wattsopcional)
    {
        $this->wattsopcional = $wattsopcional;

        return $this;
    }

    /**
     * Get wattsopcional
     *
     * @return string 
     */
    public function getWattsopcional()
    {
        return $this->wattsopcional;
    }

    /**
     * Set fechacomercializacion
     *
     * @param string $fechacomercializacion
     * @return VibiaArticulos
     */
    public function setFechacomercializacion($fechacomercializacion)
    {
        $this->fechacomercializacion = $fechacomercializacion;

        return $this;
    }

    /**
     * Get fechacomercializacion
     *
     * @return string 
     */
    public function getFechacomercializacion()
    {
        return $this->fechacomercializacion;
    }

    /**
     * Set instalacion
     *
     * @param string $instalacion
     * @return VibiaArticulos
     */
    public function setInstalacion($instalacion)
    {
        $this->instalacion = $instalacion;

        return $this;
    }

    /**
     * Get instalacion
     *
     * @return string 
     */
    public function getInstalacion()
    {
        return $this->instalacion;
    }

    /**
     * Set ambiente
     *
     * @param boolean $ambiente
     * @return VibiaArticulos
     */
    public function setAmbiente($ambiente)
    {
        $this->ambiente = $ambiente;

        return $this;
    }

    /**
     * Get ambiente
     *
     * @return boolean 
     */
    public function getAmbiente()
    {
        return $this->ambiente;
    }

    /**
     * Set blexiste110
     *
     * @param boolean $blexiste110
     * @return VibiaArticulos
     */
    public function setBlexiste110($blexiste110)
    {
        $this->blexiste110 = $blexiste110;

        return $this;
    }

    /**
     * Get blexiste110
     *
     * @return boolean 
     */
    public function getBlexiste110()
    {
        return $this->blexiste110;
    }

    /**
     * Set blnuevo
     *
     * @param string $blnuevo
     * @return VibiaArticulos
     */
    public function setBlnuevo($blnuevo)
    {
        $this->blnuevo = $blnuevo;

        return $this;
    }

    /**
     * Get blnuevo
     *
     * @return string 
     */
    public function getBlnuevo()
    {
        return $this->blnuevo;
    }

    /**
     * Set bledincluido
     *
     * @param boolean $bledincluido
     * @return VibiaArticulos
     */
    public function setBledincluido($bledincluido)
    {
        $this->bledincluido = $bledincluido;

        return $this;
    }

    /**
     * Get bledincluido
     *
     * @return boolean 
     */
    public function getBledincluido()
    {
        return $this->bledincluido;
    }

    /**
     * Set simbip2
     *
     * @param string $simbip2
     * @return VibiaArticulos
     */
    public function setSimbip2($simbip2)
    {
        $this->simbip2 = $simbip2;

        return $this;
    }

    /**
     * Get simbip2
     *
     * @return string 
     */
    public function getSimbip2()
    {
        return $this->simbip2;
    }

    /**
     * Set crea
     *
     * @param string $crea
     * @return VibiaArticulos
     */
    public function setCrea($crea)
    {
        $this->crea = $crea;

        return $this;
    }

    /**
     * Get crea
     *
     * @return string 
     */
    public function getCrea()
    {
        return $this->crea;
    }

    /**
     * Set custom
     *
     * @param string $custom
     * @return VibiaArticulos
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Get custom
     *
     * @return string 
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set custombrillomate
     *
     * @param string $custombrillomate
     * @return VibiaArticulos
     */
    public function setCustombrillomate($custombrillomate)
    {
        $this->custombrillomate = $custombrillomate;

        return $this;
    }

    /**
     * Get custombrillomate
     *
     * @return string 
     */
    public function getCustombrillomate()
    {
        return $this->custombrillomate;
    }

    /**
     * Set porcentajeaumentocustom
     *
     * @param integer $porcentajeaumentocustom
     * @return VibiaArticulos
     */
    public function setPorcentajeaumentocustom($porcentajeaumentocustom)
    {
        $this->porcentajeaumentocustom = $porcentajeaumentocustom;

        return $this;
    }

    /**
     * Get porcentajeaumentocustom
     *
     * @return integer 
     */
    public function getPorcentajeaumentocustom()
    {
        return $this->porcentajeaumentocustom;
    }

    /**
     * Set ecofriendly
     *
     * @param boolean $ecofriendly
     * @return VibiaArticulos
     */
    public function setEcofriendly($ecofriendly)
    {
        $this->ecofriendly = $ecofriendly;

        return $this;
    }

    /**
     * Get ecofriendly
     *
     * @return boolean 
     */
    public function getEcofriendly()
    {
        return $this->ecofriendly;
    }

    /**
     * Set etiquetaefienergetica
     *
     * @param integer $etiquetaefienergetica
     * @return VibiaArticulos
     */
    public function setEtiquetaefienergetica($etiquetaefienergetica)
    {
        $this->etiquetaefienergetica = $etiquetaefienergetica;

        return $this;
    }

    /**
     * Get etiquetaefienergetica
     *
     * @return integer 
     */
    public function getEtiquetaefienergetica()
    {
        return $this->etiquetaefienergetica;
    }

    /**
     * Set intminunits
     *
     * @param integer $intminunits
     * @return VibiaArticulos
     */
    public function setIntminunits($intminunits)
    {
        $this->intminunits = $intminunits;

        return $this;
    }

    /**
     * Get intminunits
     *
     * @return integer 
     */
    public function getIntminunits()
    {
        return $this->intminunits;
    }

    /**
     * Set blnvirtual
     *
     * @param boolean $blnvirtual
     * @return VibiaArticulos
     */
    public function setBlnvirtual($blnvirtual)
    {
        $this->blnvirtual = $blnvirtual;

        return $this;
    }

    /**
     * Get blnvirtual
     *
     * @return boolean 
     */
    public function getBlnvirtual()
    {
        return $this->blnvirtual;
    }

    /**
     * Set visionluz3d
     *
     * @param string $visionluz3d
     * @return VibiaArticulos
     */
    public function setVisionluz3d($visionluz3d)
    {
        $this->visionluz3d = $visionluz3d;

        return $this;
    }

    /**
     * Get visionluz3d
     *
     * @return string 
     */
    public function getVisionluz3d()
    {
        return $this->visionluz3d;
    }

    /**
     * Set intensidadluz3d
     *
     * @param string $intensidadluz3d
     * @return VibiaArticulos
     */
    public function setIntensidadluz3d($intensidadluz3d)
    {
        $this->intensidadluz3d = $intensidadluz3d;

        return $this;
    }

    /**
     * Get intensidadluz3d
     *
     * @return string 
     */
    public function getIntensidadluz3d()
    {
        return $this->intensidadluz3d;
    }

    /**
     * Set tipologiaadicional3d
     *
     * @param string $tipologiaadicional3d
     * @return VibiaArticulos
     */
    public function setTipologiaadicional3d($tipologiaadicional3d)
    {
        $this->tipologiaadicional3d = $tipologiaadicional3d;

        return $this;
    }

    /**
     * Get tipologiaadicional3d
     *
     * @return string 
     */
    public function getTipologiaadicional3d()
    {
        return $this->tipologiaadicional3d;
    }

    /**
     * Set eficiencia
     *
     * @param string $eficiencia
     * @return VibiaArticulos
     */
    public function setEficiencia($eficiencia)
    {
        $this->eficiencia = $eficiencia;

        return $this;
    }

    /**
     * Get eficiencia
     *
     * @return string 
     */
    public function getEficiencia()
    {
        return $this->eficiencia;
    }

    /**
     * Set sistcoordenadas
     *
     * @param string $sistcoordenadas
     * @return VibiaArticulos
     */
    public function setSistcoordenadas($sistcoordenadas)
    {
        $this->sistcoordenadas = $sistcoordenadas;

        return $this;
    }

    /**
     * Get sistcoordenadas
     *
     * @return string 
     */
    public function getSistcoordenadas()
    {
        return $this->sistcoordenadas;
    }

    /**
     * Set flujototal
     *
     * @param string $flujototal
     * @return VibiaArticulos
     */
    public function setFlujototal($flujototal)
    {
        $this->flujototal = $flujototal;

        return $this;
    }

    /**
     * Get flujototal
     *
     * @return string 
     */
    public function getFlujototal()
    {
        return $this->flujototal;
    }

    /**
     * Set valormaximo
     *
     * @param string $valormaximo
     * @return VibiaArticulos
     */
    public function setValormaximo($valormaximo)
    {
        $this->valormaximo = $valormaximo;

        return $this;
    }

    /**
     * Get valormaximo
     *
     * @return string 
     */
    public function getValormaximo()
    {
        return $this->valormaximo;
    }

    /**
     * Set posicion
     *
     * @param string $posicion
     * @return VibiaArticulos
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return string 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set isolux
     *
     * @param string $isolux
     * @return VibiaArticulos
     */
    public function setIsolux($isolux)
    {
        $this->isolux = $isolux;

        return $this;
    }

    /**
     * Get isolux
     *
     * @return string 
     */
    public function getIsolux()
    {
        return $this->isolux;
    }

    /**
     * Set posicionluminaria
     *
     * @param string $posicionluminaria
     * @return VibiaArticulos
     */
    public function setPosicionluminaria($posicionluminaria)
    {
        $this->posicionluminaria = $posicionluminaria;

        return $this;
    }

    /**
     * Get posicionluminaria
     *
     * @return string 
     */
    public function getPosicionluminaria()
    {
        return $this->posicionluminaria;
    }

    /**
     * Set rotacionluminaria
     *
     * @param string $rotacionluminaria
     * @return VibiaArticulos
     */
    public function setRotacionluminaria($rotacionluminaria)
    {
        $this->rotacionluminaria = $rotacionluminaria;

        return $this;
    }

    /**
     * Get rotacionluminaria
     *
     * @return string 
     */
    public function getRotacionluminaria()
    {
        return $this->rotacionluminaria;
    }

    /**
     * Set idsimetria
     *
     * @param integer $idsimetria
     * @return VibiaArticulos
     */
    public function setIdsimetria($idsimetria)
    {
        $this->idsimetria = $idsimetria;

        return $this;
    }

    /**
     * Get idsimetria
     *
     * @return integer 
     */
    public function getIdsimetria()
    {
        return $this->idsimetria;
    }

    /**
     * Set composicion
     *
     * @param string $composicion
     * @return VibiaArticulos
     */
    public function setComposicion($composicion)
    {
        $this->composicion = $composicion;

        return $this;
    }

    /**
     * Get composicion
     *
     * @return string 
     */
    public function getComposicion()
    {
        return $this->composicion;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     * @return VibiaArticulos
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
     * Set conexionmatch1
     *
     * @param string $conexionmatch1
     * @return VibiaArticulos
     */
    public function setConexionmatch1($conexionmatch1)
    {
        $this->conexionmatch1 = $conexionmatch1;

        return $this;
    }

    /**
     * Get conexionmatch1
     *
     * @return string 
     */
    public function getConexionmatch1()
    {
        return $this->conexionmatch1;
    }

    /**
     * Set conexionmatch2
     *
     * @param string $conexionmatch2
     * @return VibiaArticulos
     */
    public function setConexionmatch2($conexionmatch2)
    {
        $this->conexionmatch2 = $conexionmatch2;

        return $this;
    }

    /**
     * Get conexionmatch2
     *
     * @return string 
     */
    public function getConexionmatch2()
    {
        return $this->conexionmatch2;
    }

    /**
     * Set dimmable
     *
     * @param integer $dimmable
     * @return VibiaArticulos
     */
    public function setDimmable($dimmable)
    {
        $this->dimmable = $dimmable;

        return $this;
    }

    /**
     * Get dimmable
     *
     * @return integer 
     */
    public function getDimmable()
    {
        return $this->dimmable;
    }

    /**
     * Set idpantalla
     *
     * @param integer $idpantalla
     * @return VibiaArticulos
     */
    public function setIdpantalla($idpantalla)
    {
        $this->idpantalla = $idpantalla;

        return $this;
    }

    /**
     * Get idpantalla
     *
     * @return integer 
     */
    public function getIdpantalla()
    {
        return $this->idpantalla;
    }

    /**
     * Set metroscable
     *
     * @param float $metroscable
     * @return VibiaArticulos
     */
    public function setMetroscable($metroscable)
    {
        $this->metroscable = $metroscable;

        return $this;
    }

    /**
     * Get metroscable
     *
     * @return float 
     */
    public function getMetroscable()
    {
        return $this->metroscable;
    }

    /**
     * Set mordaza
     *
     * @param integer $mordaza
     * @return VibiaArticulos
     */
    public function setMordaza($mordaza)
    {
        $this->mordaza = $mordaza;

        return $this;
    }

    /**
     * Get mordaza
     *
     * @return integer 
     */
    public function getMordaza()
    {
        return $this->mordaza;
    }

    /**
     * Set lumens
     *
     * @param float $lumens
     * @return VibiaArticulos
     */
    public function setLumens($lumens)
    {
        $this->lumens = $lumens;

        return $this;
    }

    /**
     * Get lumens
     *
     * @return float 
     */
    public function getLumens()
    {
        return $this->lumens;
    }

    /**
     * Set lumtotfuenteluz
     *
     * @param float $lumtotfuenteluz
     * @return VibiaArticulos
     */
    public function setLumtotfuenteluz($lumtotfuenteluz)
    {
        $this->lumtotfuenteluz = $lumtotfuenteluz;

        return $this;
    }

    /**
     * Get lumtotfuenteluz
     *
     * @return float 
     */
    public function getLumtotfuenteluz()
    {
        return $this->lumtotfuenteluz;
    }

    /**
     * Set lumwatluminaria
     *
     * @param float $lumwatluminaria
     * @return VibiaArticulos
     */
    public function setLumwatluminaria($lumwatluminaria)
    {
        $this->lumwatluminaria = $lumwatluminaria;

        return $this;
    }

    /**
     * Get lumwatluminaria
     *
     * @return float 
     */
    public function getLumwatluminaria()
    {
        return $this->lumwatluminaria;
    }

    /**
     * Set lumwatfuenteluz
     *
     * @param float $lumwatfuenteluz
     * @return VibiaArticulos
     */
    public function setLumwatfuenteluz($lumwatfuenteluz)
    {
        $this->lumwatfuenteluz = $lumwatfuenteluz;

        return $this;
    }

    /**
     * Get lumwatfuenteluz
     *
     * @return float 
     */
    public function getLumwatfuenteluz()
    {
        return $this->lumwatfuenteluz;
    }

    /**
     * Set corriente
     *
     * @param float $corriente
     * @return VibiaArticulos
     */
    public function setCorriente($corriente)
    {
        $this->corriente = $corriente;

        return $this;
    }

    /**
     * Get corriente
     *
     * @return float 
     */
    public function getCorriente()
    {
        return $this->corriente;
    }

    /**
     * Set voltsalida
     *
     * @param float $voltsalida
     * @return VibiaArticulos
     */
    public function setVoltsalida($voltsalida)
    {
        $this->voltsalida = $voltsalida;

        return $this;
    }

    /**
     * Get voltsalida
     *
     * @return float 
     */
    public function getVoltsalida()
    {
        return $this->voltsalida;
    }

    /**
     * Set modeloequipo
     *
     * @param float $modeloequipo
     * @return VibiaArticulos
     */
    public function setModeloequipo($modeloequipo)
    {
        $this->modeloequipo = $modeloequipo;

        return $this;
    }

    /**
     * Get modeloequipo
     *
     * @return float 
     */
    public function getModeloequipo()
    {
        return $this->modeloequipo;
    }

    /**
     * Set catalogo
     *
     * @param integer $catalogo
     * @return VibiaArticulos
     */
    public function setCatalogo($catalogo)
    {
        $this->catalogo = $catalogo;

        return $this;
    }

    /**
     * Get catalogo
     *
     * @return integer 
     */
    public function getCatalogo()
    {
        return $this->catalogo;
    }

    /**
     * Set cmsUpdated
     *
     * @param \DateTime $cmsUpdated
     * @return VibiaArticulos
     */
    public function setCmsUpdated($cmsUpdated)
    {
        $this->cmsUpdated = $cmsUpdated;

        return $this;
    }

    /**
     * Get cmsUpdated
     *
     * @return \DateTime 
     */
    public function getCmsUpdated()
    {
        return $this->cmsUpdated;
    }

    /**
     * Set activePhotoSimulation
     *
     * @param boolean $activePhotoSimulation
     * @return VibiaArticulos
     */
    public function setActivePhotoSimulation($activePhotoSimulation)
    {
        $this->activePhotoSimulation = $activePhotoSimulation;

        return $this;
    }

    /**
     * Get activePhotoSimulation
     *
     * @return boolean 
     */
    public function getActivePhotoSimulation()
    {
        return $this->activePhotoSimulation;
    }

    /**
     * Set activeProject
     *
     * @param boolean $activeProject
     * @return VibiaArticulos
     */
    public function setActiveProject($activeProject)
    {
        $this->activeProject = $activeProject;

        return $this;
    }

    /**
     * Get activeProject
     *
     * @return boolean 
     */
    public function getActiveProject()
    {
        return $this->activeProject;
    }

    /**
     * Set activeList
     *
     * @param boolean $activeList
     * @return VibiaArticulos
     */
    public function setActiveList($activeList)
    {
        $this->activeList = $activeList;

        return $this;
    }

    /**
     * Get activeList
     *
     * @return boolean 
     */
    public function getActiveList()
    {
        return $this->activeList;
    }

    /**
     * Set activeOrders
     *
     * @param boolean $activeOrders
     * @return VibiaArticulos
     */
    public function setActiveOrders($activeOrders)
    {
        $this->activeOrders = $activeOrders;

        return $this;
    }

    /**
     * Get activeOrders
     *
     * @return boolean 
     */
    public function getActiveOrders()
    {
        return $this->activeOrders;
    }

    /**
     * Set marcaequipo
     *
     * @param integer $marcaequipo
     * @return VibiaArticulos
     */
    public function setMarcaequipo($marcaequipo)
    {
        $this->marcaequipo = $marcaequipo;

        return $this;
    }

    /**
     * Get marcaequipo
     *
     * @return integer 
     */
    public function getMarcaequipo()
    {
        return $this->marcaequipo;
    }

    /**
     * Set tempcolorluminaria
     *
     * @param integer $tempcolorluminaria
     * @return VibiaArticulos
     */
    public function setTempcolorluminaria($tempcolorluminaria)
    {
        $this->tempcolorluminaria = $tempcolorluminaria;

        return $this;
    }

    /**
     * Get tempcolorluminaria
     *
     * @return integer 
     */
    public function getTempcolorluminaria()
    {
        return $this->tempcolorluminaria;
    }

    /**
     * Set cri
     *
     * @param integer $cri
     * @return VibiaArticulos
     */
    public function setCri($cri)
    {
        $this->cri = $cri;

        return $this;
    }

    /**
     * Get cri
     *
     * @return integer 
     */
    public function getCri()
    {
        return $this->cri;
    }

    /**
     * Set voltentrada
     *
     * @param integer $voltentrada
     * @return VibiaArticulos
     */
    public function setVoltentrada($voltentrada)
    {
        $this->voltentrada = $voltentrada;

        return $this;
    }

    /**
     * Get voltentrada
     *
     * @return integer 
     */
    public function getVoltentrada()
    {
        return $this->voltentrada;
    }

    /**
     * Set tipofrecuencia
     *
     * @param integer $tipofrecuencia
     * @return VibiaArticulos
     */
    public function setTipofrecuencia($tipofrecuencia)
    {
        $this->tipofrecuencia = $tipofrecuencia;

        return $this;
    }

    /**
     * Get tipofrecuencia
     *
     * @return integer 
     */
    public function getTipofrecuencia()
    {
        return $this->tipofrecuencia;
    }

    /**
     * Set material1
     *
     * @param string $material1
     * @return VibiaArticulos
     */
    public function setMaterial1($material1)
    {
        $this->material1 = $material1;

        return $this;
    }

    /**
     * Get material1
     *
     * @return string 
     */
    public function getMaterial1()
    {
        return $this->material1;
    }

    /**
     * Set material2
     *
     * @param string $material2
     * @return VibiaArticulos
     */
    public function setMaterial2($material2)
    {
        $this->material2 = $material2;

        return $this;
    }

    /**
     * Get material2
     *
     * @return string 
     */
    public function getMaterial2()
    {
        return $this->material2;
    }

    /**
     * Set material3
     *
     * @param string $material3
     * @return VibiaArticulos
     */
    public function setMaterial3($material3)
    {
        $this->material3 = $material3;

        return $this;
    }

    /**
     * Get material3
     *
     * @return string 
     */
    public function getMaterial3()
    {
        return $this->material3;
    }

    /**
     * Set material4
     *
     * @param string $material4
     * @return VibiaArticulos
     */
    public function setMaterial4($material4)
    {
        $this->material4 = $material4;

        return $this;
    }

    /**
     * Get material4
     *
     * @return string 
     */
    public function getMaterial4()
    {
        return $this->material4;
    }

    /**
     * Set ral
     *
     * @param integer $ral
     * @return VibiaArticulos
     */
    public function setRal($ral)
    {
        $this->ral = $ral;

        return $this;
    }

    /**
     * Get ral
     *
     * @return integer 
     */
    public function getRal()
    {
        return $this->ral;
    }

    /**
     * Set idTempcolorled
     *
     * @param string $idTempcolorled
     * @return VibiaArticulos
     */
    public function setIdTempcolorled($idTempcolorled)
    {
        $this->idTempcolorled = $idTempcolorled;

        return $this;
    }

    /**
     * Get idTempcolorled
     *
     * @return string 
     */
    public function getIdTempcolorled()
    {
        return $this->idTempcolorled;
    }

    /**
     * Set idTiporegulacion
     *
     * @param string $idTiporegulacion
     * @return VibiaArticulos
     */
    public function setIdTiporegulacion($idTiporegulacion)
    {
        $this->idTiporegulacion = $idTiporegulacion;

        return $this;
    }

    /**
     * Get idTiporegulacion
     *
     * @return string 
     */
    public function getIdTiporegulacion()
    {
        return $this->idTiporegulacion;
    }
}
