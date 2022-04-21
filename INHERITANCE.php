<html>
<HEAD>
<TITLE>INHERITANCE</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;"> INHERITANCE</H1>
<?php
class cars 
{
public $name;
public $color;
public function __construct($name, $color) {
$this->name = $name;
$this->color = $color;
}
public function intro() {
echo "Its brand is {$this->name} and the color is {$this->color}.";
}
}
class sportscars extends cars {
public function message() {
echo "My car is  a sports car<br> ";
}
}
$sportscars = new sportscars("BMW", "RED");
$sportscars->message();
$sportscars->intro();
?>
</form>
</body>
</html>
