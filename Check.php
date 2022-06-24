<?php

declare(strict_types=1);

//make a new class

class Person
{
    private string $name;
    private string $hairColor;
    private int $age;

    //make the setter
    public function setName($name){
        $this->name = $name;
    }
    //make the getter
    public function getName($name){
        return 'Welcome ' . $this->name;
    }

    //after making the class insert a constructor
    /**
     * @param string $name
     * @param string $hairColor
     * @param int $age
     */
    public function __construct(string $name, string $hairColor, int $age)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->age = $age;
    }
}

//lets make a new person here
$person = new Person ("Jefke", "brown", 35);
$person->setName("Michael");
print_r($person->getName("Michael"));
