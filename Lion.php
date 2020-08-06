<?php
//require_once('Animal.php');
class Lion extends Animal
{
    private $owner;
    public function __construct($family, $food)
    {
        parent:: __construct($family, $food);
    }
}
?>