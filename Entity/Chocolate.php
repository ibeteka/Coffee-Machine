<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-12
 * Time: 1:23 PM
 */
namespace Ermeo\Entity;

class Chocolate extends Beverage
{

    public function __construct()
    {
        $this->price = 5;
        $this->name  = 'Chocolate';
    }

    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }


}