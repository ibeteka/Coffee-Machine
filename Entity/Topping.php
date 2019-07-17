<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-17
 * Time: 10:31 AM
 */

namespace Ermeo\Entity;


abstract class Topping implements item
{
    protected $name;
    protected $price;
    protected $level;

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }



    public function getStatus()
    {

    }

    public abstract function getPrice();

}