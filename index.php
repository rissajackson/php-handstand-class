<!DOCTYPE html> 
<html lang='en'> 
<head> 
    <title>Test Page</title> 
</head> 
<body> 

<?php
require_once('Handstand.php');
require_once('Gymnastic.php');
require_once('Contortion.php');
$gymnastic = new Gymnastic('straight', 'strength');
$contortion = new Contortion('curved', 'flexibility');
echo '<b>Gymnastic Handstand</b> <br>';
echo 'The gymnastic handstand shape is ' . $gymnastic->get_body() . ' and the focus is on ' . $gymnastic->get_focus() . '<br><br>';
echo '<b>Contortion Handstand</b> <br>';
echo "<b><img src='contortion.jpg' alt='contortion handstand ' /> </b> <br>"; 
echo 'The contortion handstand shape is ' . $contortion->get_body() . ' and the focus is on ' . $contortion->get_focus();
?>

</body> 
</html> 