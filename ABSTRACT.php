<html>
<HEAD>
<TITLE>ABSTRACT</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 160px; width: 500px;" > 
<H1 style="text-align: center;"> ABSTRACT</H1>
<?php  
abstract class pet  
{  
public $name;  
public $age;
public $color;	
public function Describe()  
{  
return "Name : ".$this->name . "<br> Age&emsp;:" . $this->age . " YR <br> Color : ".$this->color;      
}  
abstract public function initial();  
}  
class Dog extends pet  
{  
public function initial()  
{  
return "<br>Breed :GERMAN SHEPHERD";      
}  
public function Describe()  
{  
return "Item&nbsp;&nbsp;&nbsp;:A DOG<br>".parent::Describe() ;      
}  
}  
$animal = new Dog();  
$animal->name = "BOOMER";  
$animal->age = 5; 
$animal->color="BROWN" ;
echo $animal->Describe();  
echo $animal->initial();  
?>   
</form>
 </body>
 </html>
