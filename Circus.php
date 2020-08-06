<?php
class Gymnastic extends Handstand
{
    private $owner;
    public function __construct($body, $focus)
    {
        parent:: __construct($body, $focus);
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}
?>