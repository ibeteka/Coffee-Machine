<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-12
 * Time: 1:22 PM
 */

namespace Ermeo\Entity;

class Coffee extends Beverage
{

    public function __construct()
    {
        $this->name = 'Coffee';
        $this->price = 2;
    }

    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }

}