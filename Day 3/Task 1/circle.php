<?php

trait Circle{
    public float $radius;
    public string $color;
    function __construct($radius=1.0, $color="red"){
        $this->radius = $radius;
        $this->color = $color;
    }
    function setRadius($radius):float{
        $this->radius = radius;
    }
    function setColor($color):string{
        $this->color;
    }
    function getRadius(){
        return this->radius;
    }
    function getColor(){
        return $this->color;
    }
    function getArea(){
        return ((pi())*$this->radius*$this->radius);
    }
    function toString():string{
        return "Radius= $this->radius, Color= $this->color";
    }
}


class Cylinder{
    use Circle{
        Circle::__construct as private CConstruct;
    }
    public float $height;
    function __construct($radius=1.0, $color="red",$height=1.0){
        $this->CConstruct($radius,$color);
        $this->height = $height;
    }
    function setHeight($height){
        $this->height = $height;
    }
    function getHeight(){
        return $this->height;
    }
    function getVloume(){
        return (($this->getArea())*$this->height);
    }
}


$C = new Cylinder(2,"red",2);
echo $C->getVloume();









?>