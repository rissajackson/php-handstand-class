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
echo '<b>  Gymnastic Handstand</b> <br>';
echo "<img src='gymnastic.jpg' alt='gymnastic handstand' /> <br>"; 
echo '  The gymnastic handstand shape is <strong>' . $gymnastic->get_body() . '</strong> and the focus is on <strong>' . $gymnastic->get_focus() . '</strong>.' . '<br><br>';
echo '<b>  Contortion Handstand</b> <br>';
echo "<img src='contortion.jpg' alt='contortion handstand ' /> <br>"; 
echo '  The contortion handstand shape is <strong>' . $contortion->get_body() . '</strong> and the focus is on <strong>' . $contortion->get_focus() . '</strong>.';
?>

</body> 
</html> 