<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

// TODO: Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties private.
class Beverage
{
    // The Properties
    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */

    

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }


    public function getInfo() :string
    {
        return "This beverage is $this->temperature temperature and is $this->color";
    }
    //added a getter
    public function getColor() :string
    {
        return $this->color;
    }
    //added a setter
    public function setColor(string $color)
    {
        $this->color =$color;
    }
}


class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */


    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent:: __construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }


    private function beerInfo(): string
    {
        return "Hi I'm " . $this->name . " and have an alcohol percentage of " . $this->getAlcoholPercentage() . " and I have a " . $this->getColor() . " color.";
    }

    public function printBeerInfo(): string
    {
        return $this->beerInfo();
    }
}

//TODO: Make all the other prints work without error.
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage();
echo "<br/>";
$duvel->setAlcoholPercentage(8.5);
echo $duvel->getAlcoholPercentage();
echo "<br/>";
echo $duvel->getColor();
echo "<br/>";
echo $duvel->getInfo();
echo "<br/><br/>";

//TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
$duvel->setColor('light');
echo $duvel->getColor();
echo "<br/>";
echo $duvel->getInfo();
echo "<br/><br/>";

// TODO: Print this method on the screen on a new line.
echo $duvel->printBeerInfo();





