<?php

interface ShapeInterface{
    
    function setColor($color);
    function setFilled($filled);
    function getColor();
    function isFilled();
    function toString():string;
}

class Shape implements ShapeInterface{
    public $color;
    public $filled;
    function __construct($color="red", $filled=true){
        $this->color = $color;
        $this->filled = $filled;
    }
    function setColor($color){
        $this->color = $color;
    }
    function setFilled($filled){
        $this->flled = $filled;
    }
    function getColor(){
        return $this->color;
    }
    function isFilled(){
        return $this->filled;
    }
    function toString():string{
        return "Color: $this->color , Filled: $this->filled ";
    }
}
 class Circle extends Shape{
    public float $radius;
    function __construct($color, $filled, $radius=1.0){
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    function setRadius($radius){
        $this->radius = $radius;
    }
    function getRadius():float{
        return $this->radius;
    }
    function getArea(){
        return ((pi()) * $this->radius * $this->radius );
    }
    function getPerimeter(){
        return (2 * (pi()) * $this->radius);
    }
    function toString():string{
        return "Color: $this->color , Filled: $this->filled , Radius: $this->radius ";
    }
 }

 class Rectangle extends Shape{
    public float $width;
    public float $length;
    function __construct($color, $filled, $width=1.0, $length=1.0){
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }
    function setWidth($width){
        $this->width = $width;
    }
    function setlength($length){
        $this->length = $length;
    }
    function getWidth():float{
        return $this->width;
    }
    function getLength():float{
        return $this->length;
    }
    function getArea(){
        return ($this->width * $this->length);
    }
    function getPerimeter(){
        return ( 2 * ($this->width + $this->length));
    }
    function toString():string{
        return "Color: $this->color , Filled: $this->filled , Width: $this->width , Length: $this->length ";
    }
 }

 class Square extends Rectangle{
    function __construct($side){
        $this->width = $side;
        $this->length = $side;
    }
    function setSide($side){
        $this->width = $side;
        $this->length = $side;
    }
    function setWidth($side){
        $this->width = $side;
        $this->length = $side;
    }
    function setLength($side){
        $this->width = $side;
        $this->length = $side;
    }
    function getSide(){
        return $this->width;
    }
    function toString():string{
        return "Color: $this->color , Filled: $this->filled , Side: $this->width ";
    }
 }


?>