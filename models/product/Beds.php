<?php

require_once __DIR__ . '/Products.php';

class Beds extends Products 
{
    private $width;
    private $length;
    private $color;
    private $stuffing;

    public function __construct($width, $length, $color, $stuffing )
    {
        parent::__construct($id, $name, $animal, $cost);
        $this->setColor($width);
        $this->setWidth($length);
        $this->setLength($color);
        $this->setStuffing($stuffing);
    }

    public function getWidth($width) 
    {
        $this->width = $width;
        return $this;
    }

    public function setWidth($width) 
    {
        $this->width = $width;
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

    public function getLength($length) 
    {
        $this->length = $length;
        return $this;
    }

    public function setLength($length) 
    {
        $this->length = $length;
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

    public function getStuffing($stuffing) 
    {
        $this->stuffing = $stuffing;
        return $this;
    }

    public function setStuffing($stuffing) 
    {
        $this->stuffing = $stuffing;
        return $this;
    }

}