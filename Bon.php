<?php
require 'Product.php';
class Bon
{
  /** @var array */
  protected $producten;

  /**
   * @return array
   */
  public function getProducten()
  {
    return $this->producten;
  }

  /**
   * @param Product $product
   */
  public function addProduct($product)
  {
    $this->producten[] = $product;
  }

  /**
   * @return float
   */
  public function getPrijs() {
    /** @var Product $artikkel */
    $totaal = 0;
    foreach ($this->producten as $artikkel) {
      $totaal += $artikkel->getPrijs();
    }
    return $totaal;
  }

  /**
   * @return float
   */
  public function getPrijsInclBTW()
  {
    return round($this->getPrijs() * 1.21, 2);
  }

  /**
   * @return float
   */
  public function getBTW()
  {
    return round($this->getPrijs() * 0.21, 2);
  }
}