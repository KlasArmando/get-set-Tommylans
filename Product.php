<?php

class Product
{
  protected $prijs;
  protected $naam;

  /**
   * @param mixed $naam
   */
  public function setNaam($naam)
  {
    $this->naam = $naam;
  }

  /**
   * @return mixed
   */
  public function getNaam()
  {
    return $this->naam;
  }

  /**
   * @return mixed
   */
  public function getPrijs()
  {
    return $this->prijs;
  }

  /**
   * @param mixed $prijs
   */
  public function setPrijs($prijs)
  {
    $this->prijs = $prijs;
  }
}