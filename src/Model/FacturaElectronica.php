<?php

namespace kporras07\cemhcr\Model;

class FacturaElectronica extends BaseStructure {

  /**
   * @var string
   */
  protected $numeroConsecutivo;

  /**
   * @var int
   */
  protected $fechaEmision;

  /**
   * @var \kporras07\cemhcr\Model\Emisor;
   */
  protected $emisor;

  /**
   * @var \kporras07\cemhcr\Model\Receptor;
   */
  protected $receptor;

  /**
   * @var string
   */
  protected $condicionVenta;

  /**
   * @var string
   */
  protected $plazoCredito;

  /**
   * @var string
   */
  protected $medioPago;

  /**
   * @var \kporras07\cemhcr\Model\LineaDetalle[]
   */
  protected $detalleServicio;

  /**
   * @var \kporras07\cemhcr\Model\ResumenFactura
   */
  protected $resumenFactura;

  /**
   * @var \kporras07\cemhcr\Model\InformacionReferencia
   */
  protected $informacionReferencia;

  /**
   * @var \kporras07\cemhcr\Model\Normativa
   */
  protected $normativa;

  /**
   * @var \kporras07\cemhcr\Otros[]
   */
  protected $otros;

}
