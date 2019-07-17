<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-17
 * Time: 5:56 PM
 */

namespace Ermeo\Entity;


class DrinkBuilder
{

    private $drink;

    public function __construct()
    {
        $this->drink = new Drink();
    }


    public function getDrink()
    {
       return $this->drink;
    }


    public function prepareTeaBeverage()
    {
        $tea = new Tea();
        $this->drink->addItems($tea);
    }

    public function prepareChocolateBeverage()
    {
        $choco = new Chocolate();
        $this->drink->addItems($choco);

    }


    public function prepareCoffeeBeverage()
    {
        $coffee = new Coffee();
        $this->drink->addItems($coffee);
    }




    public function prepareDrinkFinal($milklevel, $sugarlevel)
    {
        $milk = new Milk();
        $milk->setLevel($milklevel);

        $sugar = new Sugar();
        $sugar->setLevel($sugarlevel);

        $this->drink->addItems(array($sugar, $milk));

    }



}