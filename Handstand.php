<?php
class Handstand
{
    private $body;
    private $focus;
    public function __construct($body, $focus)
    {
        $this->body = $body;
        $this->focus = $focus;
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
}
?>