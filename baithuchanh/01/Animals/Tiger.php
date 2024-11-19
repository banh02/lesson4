<?php
include_once('AbstractClass/Animal.php');

class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr";
    }
}