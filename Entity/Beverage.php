<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-12
 * Time: 1:25 PM
 */

namespace Ermeo\Entity;

abstract class Beverage implements item
{
    protected $name;
    protected $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $type
     */
    protected function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param mixed $price
     */
    protected function setPrice($price)
    {
        $this->price = $price;
    }


    public abstract function getStatus();



}