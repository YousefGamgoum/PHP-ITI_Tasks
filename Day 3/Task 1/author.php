<?php

class Author{
    public String $name;
    public String $email;
    public  $gender;
    function __construct(String $name, String $email, $gender){
        $this->name = $name;
        $this->email = $email;
        $this->gender =$gender;
    }
    function setEmail($email):void{
        $this->email = $email;
    }
    function getName():string{
        return $this->name;
    }
    function getEmail():string{
        return $this->email;
    }
    function getGender(){
        return $this->gender;
    }
    function toString():string{
        return "Name= $this->name, Email= $this->email, Gender= $this->gender";
    }
}
$testAuthor = new Author("Yousef","yousef@gmail.com",'m');
$testAuthor->setEmail("yousef@yousef.com");
echo "<br>";
echo "name = ".$testAuthor->getName();
echo "<br>";
echo "Email = ".$testAuthor->getEmail();
echo "<br>";
echo "Gender = ".$testAuthor->getGender();
echo "<br>";
echo $testAuthor->toString();
echo "<br>";

$testAuthor1 = new Author("mohamed","mohamed@gmail.com",'m');
$testAuthor2 = new Author("ranaa","ranaa@gmail.com",'f');
$testAuthor3 = new Author("younes","younes@gmail.com",'m');

class Book{
    public $isbn;
    public $name;
    public  array $authors;
    public $price;
    public $qty;
    function __construct($isbn,$name, array $authors, $price, $qty=0){
        $this->isbn = $isbn;
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }
    function getIsbn():string{
        return $this->isbn;
    }
    function getName():string{
        return $this->name;
    }
    function getPrice():float{
        return $this->price;
    }
    function getAuthorsNames(){
       return implode(", ", array_map(fn(Author $a) => $a->getName(), $this->authors));
    }
    function getQty():int{
        return $this->price;
    }
    public function toString(): string {
        $authorsStr = implode(", ", array_map(function ($author) {
            return $author->toString();
        }, $this->authors));
        
        return "Book[ Isbn= $this->isbn, name=$this->name, [authors={$authorsStr}], price=$this->price, qty=$this->qty ]";
    }    
    function setQty($qty):void{
        $this->qty = $qty;
    }
    function setPrice($price):void{
        $this->price = $price;
    }
}

$bookTest = new Book("1001","C++",[$testAuthor1,$testAuthor2,$testAuthor3],200,5);
echo $bookTest->getAuthorsNames();
echo "<br>";
print_r($bookTest->toString()) ;






?>