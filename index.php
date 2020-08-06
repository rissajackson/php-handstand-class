<!DOCTYPE html> 
<html lang='en'> 
<head> 
    <title>Handstand Page</title> 
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head> 
<body> 

<?php
require_once('Handstand.php');
require_once('Gymnastic.php');
require_once('Contortion.php');
$gymnastic = new Gymnastic('straight', 'strength');
$contortion = new Contortion('curved', 'flexibility');
echo '<p><b>Gymnastic Handstand</b> <br></p>';
echo "<p><img src='gymnastic.jpg' alt='gymnastic handstand' /></p> <br>"; 
echo '<p>The gymnastic handstand shape is <strong>' . $gymnastic->get_body() . '</strong> and the focus is on <strong>' . $gymnastic->get_focus() . '</strong>.' . '</p><br><br>';
echo '<p><b>Contortion Handstand</p></b> <br>';
echo "<p><img src='contortion.jpg' alt='contortion handstand ' /></p> <br>"; 
echo '<p>The contortion handstand shape is <strong>' . $contortion->get_body() . '</strong> and the focus is on <strong>' . $contortion->get_focus() . '</strong>.</p>';
?>

</body> 
</html> 