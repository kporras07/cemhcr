<?php

namespace kporras07\cemhcr\Model;

class LineaDetalle {

  /**
   * @var int
   */
  protected $numeroLinea;

  /**
   * @var \kporras07\cemhcr\Model\CodigoDetalle
   */
  protected $codigo;

  /**
   * @var float
   */
  protected $cantidad;

  /**
   * @var string
   */
  protected $unidadMedida;

  /**
   * @var string
   */
  protected $unidadMedidaComercial;

  /**
   * @var string
   */
  protected $detalle;

  /**
   * @var float
   */
  protected $precioUnitario;

  /**
   * @var float
   */
  protected $montoTotal;

  /**
   * @var float
   */
  protected $montoDescuento;

  /**
   * @var string
   */
  protected $naturalezaDescuento;

  /**
   * @var float
   */
  protected $subtotal;

  /**
   * @var \kporras07\cemhcr\Model\Impuesto
   */
  protected $impuesto;

  /**
   * @var float
   */
  protected $montoTotalLinea;
}
