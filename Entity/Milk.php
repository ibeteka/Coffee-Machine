<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-17
 * Time: 10:37 AM
 */

namespace Ermeo\Entity;


class Milk extends Topping
{

  public function __construct()
  {
      $this->name  = 'Milk';
      $this->price = 0;
  }

    public function getPrice()
    {
        return 0;
    }
}