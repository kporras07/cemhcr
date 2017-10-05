<?php

namespace kporras07\cemhcr\Model;

class Impuesto {

  /**
   * @var string
   */
  protected $codigo;

  /**
   * @var float
   */
  protected $tarifa;

  /**
   * @var float
   */
  protected $monto;

  /**
   * @var \kporras07\cemhcr\Model\Exoneracion
   */
  protected $exoneracion;
}
