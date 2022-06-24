<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

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

    function printChangedPrice(float $changePrice)
    {
        $this->price = $changePrice;
        return "This $this->temperature beverage with a $this->color color will cost $this->price euro.";
    }
}

$beverage1 = new Beverage("black", 2);
//$beverage1->temperature ="hot"
echo $beverage1->getInfo();
echo "<br>";
echo $beverage1->printChangedPrice(3.5);

