<?php 

class Products 
{
    private $id;
    private $name;
    private $animal;
    private $cost;

    public function __construct($id, $name, $animal, $cost)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAnimal($animal);
        $this->setCost($cost);
    }


    public function getId($id) 
    {
        $this->id = $id;
        return $this;
    }

    public function setId($id) 
    {
        $this->id = uniqid();
        return $this;
    }

    public function getName($name) 
    {
        $this->name = $name;
        return $this;
    }

    public function setName($name) 
    {
        $this->name = $name;
        return $this;
    }

    public function getanimal($animal) 
    {
        $this->animal = $animal;
        return $this;
    }

    public function setanimal($animal) 
    {
        $this->animal = $animal;
        return $this;
    }

    public function getcost($cost) 
    {
        $this->cost = $cost;
        return $this;
    }

    public function setcost($cost) 
    {
        $this->cost = $cost;
        return $this;
    }

}

?>