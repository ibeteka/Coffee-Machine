<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-17
 * Time: 10:41 AM
 */

namespace Ermeo\Entity;


class Drink
{
  private $items = array();
  private $cost;

  public function addItems($item)
  {
      if(is_array($item) == true)
          $this->items = array_merge($this->items, $item);
      else
        array_push($this->items, $item);
  }


  public function showItems()
  {
      print_r($this->items, true);
  }


  public function getCost()
  {
      foreach ($this->items as $item)
      {
          $this->cost += $item->getPrice();
      }
      return $this->cost;
  }




}