<?php
class Breakdancing extends Handstand
{
    public function __construct()
    {
        parent:: __construct('bent', 'strength', 'breakdancing');
    }
    protected function get_image()
    {
        return 'breakdancing.jpg';
    }
}
?>