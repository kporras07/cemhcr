<?php

namespace kporras07\cemhcr\Model;

class Receptor {

  /**
   * @var string
   */
  protected $nombre;

  /**
   * @var \kporras07\cemhcr\Model\Identificacion
   */
  protected $identificacion;

  /**
   * @var string
   */
  protected $identificacionExtranjero;

  /**
   * @var string
   */
  protected $nombreComercial;

  /**
   * @var \kporras07\cemhcr\Model\Ubicacion
   */
  protected $ubicacion;

  /**
   * @var \kporras07\cemhcr\Model\Telefono
   */
  protected $telefono;

  /**
   * @var \kporras07\cemhcr\Model\Telefono
   */
  protected $fax;

  /**
   * @var string
   */
  protected $correoElectronico;
}
