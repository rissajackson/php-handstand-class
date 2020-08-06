<?php
class Contortion extends Handstand
{
    public function __construct()
    {
        parent:: __construct('curved', 'flexibility', 'contortion');
    }
    protected function get_image()
    {
        return 'contortion.jpg';
    }
}
?>