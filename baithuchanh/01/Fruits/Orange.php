<?php
include_once('AbstractClass/Fruit.php');

class Orange extends Fruit
{
    public function howtoEat()
    {
        return "Orange could be juiced";
    }
}