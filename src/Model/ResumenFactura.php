<?php

namespace kporras07\cemhcr\Model;

class ResumenFactura {

  /**
   * @var string
   */
  protected $codigoMoneda;

  /**
   * @var float
   */
  protected $tipoCambio;

  /**
   * @var float
   */
  protected $totalServGravados;

  /**
   * @var float
   */
  protected $totalServExentos;

  /**
   * @var float
   */
  protected $totalMercanciasGravadas;

  /**
   * @var float
   */
  protected $totalMercanciasExentas;

  /**
   * @var float
   */
  protected $totalGravado;

  /**
   * @var float
   */
  protected $totalExento;

  /**
   * @var float
   */
  protected $totalVenta;

  /**
   * @var float
   */
  protected $totalDescuentos;

  /**
   * @var float
   */
  protected $totalVentaNeta;

  /**
   * @var float
   */
  protected $totalImpuesto;

  /**
   * @var float
   */
  protected $totalComprobante;

}
