<?php
abstract class Animal
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function makeSound();
    abstract public function move();
}


interface Playable
{
    public function play();
}

class Dog extends Animal implements Playable
{
    public function makeSound()
    {
        echo "{$this->name} says Hi!\n";
    }

    public function move()
    {
        echo "{$this->name} is running. \n";
    }

    public function play()
    {
        echo "{$this->name} is playing etch.\n";
    }
}

class Cat extends Animal implements Playable
{
    public function makeSound()
    {
        echo "{$this->name} says Meo Meo! \n";
    }

    public function move()
    {
        echo "{$this->name} is sneaking around.\n";
    }

    public function play()
    {
        echo "{$this->name} is playing with a ball of yarn.\n";
    }
}


class Bird extends Animal implements Playable
{
    public function makeSound()
    {
        echo "{$this->name} say Chip Chip!\n";
    }

    public function move()
    {
        echo "{$this->name} is flyinf.\n";
    }
    public function play()
    {
        echo "{$this->name}is playing with feathers.\n";
    }
}


$dog = new Dog("Buddy", 3);
$cat = new Cat("Wiskers", 2);
$bird = new Bird("Tweety", 1);

$dog->makeSound();
$dog->move();
$dog->play();

$cat->makeSound();
$cat->move();
$cat->play();

$bird->makeSound();
$bird->move();
$bird->play();