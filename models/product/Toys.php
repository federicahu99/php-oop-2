<?php 

require_once __DIR__ . '/Products.php';

class Toys extends Products 
{
    private $type;
    private $color;

    public function __construct($type, $color)
    {
        parent::__construct($id, $name, $animal, $cost);
        $this->setType($type);
        $this->setColor($color);
    }

    public function getType($type) 
    {
        $this->type = $type;
        return $this;
    }

    public function setType($type) 
    {
        $this->id = uniqid();
        return $this;
    }
    
    public function getColor($color) 
    {
        $this->color = $color;
        return $this;
    }

    public function setColor($color) 
    {
        $this->color = $color;
        return $this;
    }

}