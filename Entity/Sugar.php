<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-17
 * Time: 10:34 AM
 */

namespace Ermeo\Entity;


class Sugar extends Topping
{
    public function __construct()
    {
        $this->name  = 'Sugar';
        $this->price = 0;
    }

    public function getPrice()
    {
        return $this->price;
    }

}