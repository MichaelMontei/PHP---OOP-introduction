# OOP introduction

## A Great Wise Man Once gave me an explanation of OOP!
![meme](cookieCutterLabelled.png)

##What I've learned from the exercises so far:

###Exercise 1
- Make a new class with public properties.
- Make a public function constructor to actually create the objects with the (new) command. 
- Make a new object and print it out with the given paramaters. 

###Exercise 2
- Make an extend of the previous class from Exercise 1 
- Create the constructor with the previous properties and add the parent:: __constructor with the new properties.
- Make a function to check a parameter and print it out on the screen. 

###Exercise 3
- Learned the difference between a public and a private properties of the class.
- How can we still print the paramaters with private properties? (added a getter and setter).
- Call the funtions so we can still print the parameters out.

###Exercise 4
- Learned the difference between a private and protected properties of the class.
- How can we still print the paramaters with protected properties without changing the main class.
- Call the funtions so we can still print the parameters out.

###Exercise 5
- Changed the main class properties back to private. 
- How can we still print the paramaters with private properties without using the getter and setter?
- Make a new function inside the class that can still access the private properties and set that to the new variable. 
- Call the funtions so we can still print the parameters out.


## The introduction

OOP - `Object Orientated Programming` - focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

## The objective

> Lost for a second? Have a look at [this example](#an-example)

### 🌱 Must haves - the basics
- [Exercise 1](exercise_1_classes.php)
- [Exercise 2](Exercise2.php)

### 🌱 Must haves - digging deeper
- [Exercise 3](Exercise3.php)
- [Exercise 4](Exercise4.php)
- [Exercise 5](exercise_5_public.php)

### 🌼 Nice to haves
- [Exercise 6](exercise_6_const.php)
- [Exercise 7](exercise_7_static.php)

## An example

Let's say we have a list of animals from the zoo:
```js
const listOfAnimals = [
    {
        animalType : 'monkey',
        order : 'mammal',
        amount : 25
    },
    {
        animalType : 'donkey',
        order : 'mammal',
        amount : 3
    },
    {
        animalType : 'turkey',
        order : 'bird',
        amount : 500
    }
]
```

Instead of having to create this data ourselves in the format above, we can make use of OOP structures.
With OOP we would create a class `Animal`, that class will serve as some sort of "blueprint" for creating animals.
Think of it as similar to an object, but on steroids.

#### Step one: the blueprint (class)

This class has 3 important parts:
1. the public strings
   - the properties that your class will use.
2. The Constructor
    - The constructor is where your class will receive the data and apply it to the properties mentioned above
3. The functions
    - You can use functions to manipulate the data and have any result you want.

```php
<?php

class Animal = 
{
    // The Properties
    public $animalType;
    public $order;
    public $amount;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct($animalType, $order, $amount)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->animalType = $animalType;
        $this->order = $order;
        $this->amount = $amount;
    };
    
    // The functions
    public function sayHelloToAnimal()
    {
        echo "Hello, $this->animalType";
    };
}
```
#### Step two: instantiating the object

For every object you want to create, you just need to instantiate a **new** object.

```php
<?php

$animal1 = new Animal("monkey", "mammal", 25);
$animal2 = new Animal("donkey", "mammal", 3);
$animal3 = new Animal("turkey", "bird", 500);
```
#### Step 3: use it!

Now that we created 3 animal objects. we can also start to use them in our code!

```php
<?php

$animal1->sayHelloToAnimal(); // Will result in: "Hello, monkey"
$animal2->sayHelloToAnimal(); // Will result in: "Hello, donkey"
$animal3->sayHelloToAnimal(); // Will result in: "Hello, turkey"
```

### Have fun!

![](https://c.tenor.com/CyzTOF-I6hIAAAAC/clone-twin.gif)