<?php
include_once('AbstractClass/Animal.php');
include_once('InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howtoEat()
    {
        return "could be fried";
    }
}