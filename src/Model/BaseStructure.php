<?php

namespace kporras07\cemhcr\Model;

abstract class BaseStructure {

  /**
   * @var string
   */
  protected $clave;

  /**
   * @var \kporras07\cemhcr\Model\Signature
   */
  protected $dsSignature;

  public function __construct() {
  }

  public function setClave(string $clave) {
    $this->clave = $clave;
  }

  public function getClave() {
    return $this->clave;
  }

  public function setDsSignature(Signature $ds_signature) {
    $this->dsSignature = $ds_signature;
  }

  public function getDsSignature() {
    return $this->dsSignature;
  }

  abstract public function signStructure();

}
