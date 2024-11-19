<?php
require_once 'Rectangle.php';
require_once 'Colorable.php';

class Square extends Rectangle implements Colorable
{
    public function __construct($side)
    {
        parent::__construct($side, $side);
    }

    public function resize($percent)
    {
        parent::resize($percent);
    }

    public function howToColor()
    {
        echo "Color all four sides.\n";
    }
}
