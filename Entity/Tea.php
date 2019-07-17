<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-12
 * Time: 1:23 PM
 */

namespace Ermeo\Entity;

class Tea extends Beverage
{

    public function __construct()
    {
        $this->setPrice(3);
        $this->setName('Tea');
    }


   public function getStatus()
   {
       // TODO: Implement getStatus() method.
   }

}