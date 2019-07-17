<?php
/**
 * Created by PhpStorm.
 * User: ibrahim
 * Date: 2019-07-16
 * Time: 3:14 PM
 */

namespace Ermeo\Entity;

use Rakit\Console\App;

class CoffeeMachine
{
    private $app;
    private $drinkBuilder;

    public function __construct()
    {
      $this->drinkBuilder = new DrinkBuilder();
      $this->app = new App();
    }

    public function run()
    {
        $this->app->run();
        $this->selectBeverage();
    }

    public function selectBeverage()
    {
        $choice = $this->app->ask('What beverage would you order today?
          1 - Tea 2 - Coffee, 3 - Chocolate');
        switch ($choice){
            case 1: $this->drinkBuilder->prepareTeaBeverage();break;
            case 2: $this->drinkBuilder->prepareCoffeeBeverage();break;
            case 3: $this->drinkBuilder->prepareChocolateBeverage();break;
        }

        self::selectLevelToppings();

    }


    public function selectLevelToppings()
    {
        $slevel = $this->app->ask("Quantity of Sugar?
          \n1* 0\n2* 1\n3* 2\n4* 3\n5* 4");

        $mlevel = $this->app->ask("Quantity of Milk?
          \n1* 0\n2* 1\n3* 2\n4* 3\n5* 4");

        $this->drinkBuilder->prepareDrinkFinal($slevel,$mlevel);
        self::payment();

    }


    public function payment()
    {
        $cost = $this->drinkBuilder->getDrink()->getCost();
        echo "Total Price : ".$cost;

        $amount = $this->app->ask("Please , pay the amount :");

        $rest = $cost - $amount;

        while(gmp_sign($rest) == 1){
            $rest -= $this->app->ask("There's ".$rest." euro left");
        }
        if(gmp_sign($rest) == -1)
            echo "Thank you, here your change : ".$rest." \nEnjoy !!";
        else if (\gmp_sign($rest) == 0)
            echo "Thank you , enjoy !!";

    }



    public static function cancelOrder()
    {

    }

}


