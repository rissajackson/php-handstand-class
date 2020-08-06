<?php
require_once('Animal.php');
require_once('Cow.php');
require_once('Lion.php');
$cow = new Cow('Herbivore', 'Grass');
$lion = new Lion('Carnivore', 'Meat');
echo '<b>Cow Object</b> <br>';
echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
echo '<b>Lion Object</b> <br>';
echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . 
$lion->get_food();
?>