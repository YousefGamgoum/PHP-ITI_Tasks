<?php

abstract class Person{
    public $name;
    public $address;
    function __construct($name, $address){
        $this->name = $name;
        $this->address = $address;
    }
    function setAddress($address){
        $this->address;
    }
    function getName(){
        return $this->name;
    }
    function getAddress(){
        return $this->address;
    }
    abstract function toString():string;
}

class Student extends Person{
    public $program;
    public $year;
    public $fee;
    function __construct($name, $address, $program, $year, $fee){
        parent::__construct($name,$address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    function setProgram($program){
        $this->prgoram = $program;
    }
    function setYear($year){
        $this->year = $year;
    }
    function setFee($fee){
        $this->fee = $fee;
    }
    function getProgram(){
        return $this->program;
    }
    function getYear(){
        return $this->year;
    }
    function getFee(){
        return $this->fee;
    }
    function toString():string{
        return " Student=> Name: $this->name , Address: $this->address , Program: $this->program , Year: $this->year , Fee: $this->fee ";
    }
}

class Staff extends Person{
    public $school;
    public $pay;
    function __construct($school, $pay){
        $this->school = $school;
        $this->pay = $pay;
    }
    function setSchool($school){
        $this->school = $school;
    }
    function getSchool(){
        return $this->school;
    }
    function setPay($pay){
        $this->pay = $pay;
    }
    function getPay(){
        return $this->pay;
    }
    function toString():string{
        return " Student=> Name: $this->name , Address: $this->address , Shcool: $this->school , Pay: $this->pay ";
    }
}





?>