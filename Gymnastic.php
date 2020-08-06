<?php
class Gymnastic extends Handstand
{
    public function __construct()
    {
        parent:: __construct('straight', 'strength', 'gymnastic');
    }
    protected function get_image()
    {
        return 'gymnastic.jpg';
    }
}
?>