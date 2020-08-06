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
require_once('Breakdancing.php');
$gymnastic = new Gymnastic();
$contortion = new Contortion();
$breakdancing = new Breakdancing();
?>
<p><b>Gymnastic Handstand</b> <br></p>
<p><?php echo $gymnastic->get_image_tag() ?><br></p>
<p>The gymnastic handstand shape is <strong> <?php echo $gymnastic->get_body() ?> </strong> and the focus is on <strong> <?php echo $gymnastic->get_focus() ?></strong>.<br><br></p> 
<p><b>Contortion Handstand</b> <br></p>
<p><?php echo $contortion->get_image_tag() ?><br></p>
<p>The contortion handstand shape is <strong> <?php echo $contortion->get_body() ?> </strong> and the focus is on <strong> <?php echo $contortion->get_focus() ?></strong>.<br><br></p>
<p><b>Breakdancing Handstand</b> <br></p>
<p><?php echo $breakdancing->get_image_tag() ?><br></p>
<p>The breakdancing handstand shape is <strong> <?php echo $breakdancing->get_body() ?> </strong> and the focus is on <strong> <?php echo $breakdancing->get_focus() ?></strong>.<br><br></p> 
</body> 
</html> 