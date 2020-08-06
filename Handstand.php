<?php
class Handstand
{
    private $body;
    private $focus;
    private $type;
    public function __construct($body, $focus, $type)
    {
        $this->body = $body;
        $this->focus = $focus;
        $this->type = $type;
    }
    public function get_body()
    {
        return $this->body;
    }
    public function set_body($body)
    {
        $this->body = $body;
    }
    public function get_focus()
    {
        return $this->focus;
    }
    public function set_focus()
    {
        $this->focus = $focus;
    }
    public function get_image_tag()
    {
        return "<img class='handstand' src='" . $this->get_image() . "' alt='" . $this->type . " handstand' />";
    }
}
?>