<?php 

require_once __DIR__ . '/Products.php';

class Food extends Product 
{
    private $weigth;
    private $type;
    private $flavor;

    public function __construct($weigth, $type, $flavor)
    {
        parent::__construct($id, $name, $animal, $cost);
        $this->setWeigth($weigth);
        $this->setType($type);
        $this->setFlavor($flavor);
    }

    public function getWeigth($weigth) 
    {
        $this->weigth = $weigth;
        return $this;
    }

    public function setWeigth($weigth) 
    {
        $this->weigth = $weigth;
        return $this;
    }

    public function getType($type) 
    {
        $this->type = $type;
        return $this;
    }

    public function setType($id) 
    {
        $this->id = uniqid();
        return $this;
    }
    
    public function getFlavor($flavor) 
    {
        $this->flavor = $flavor;
        return $this;
    }

    public function setFlavor($flavor) 
    {
        $this->flavor = $flavor;
        return $this;
    }

}