<html>
<HEAD>
<TITLE>POLYMORPHISM </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">POLYMORPHISM</H1>
CIRCLE:&emsp;&emsp;&nbsp;<input type="text" name="r"placeholder="Enter radius"><br>
RECTANGLE:<input type="text" name="l"placeholder="Enter Length">
<input type="text" name="b"placeholder="Enter breadth">
<button type="submit" name="sub">SUBMIT</button>
</form>
<?php
if (isset($_POST['sub']))
{
echo"<form style='background-color:#dbdedc; height: 150px; width: 500px;'>";
echo"<br>";
$r=$_POST['r'];
$l=$_POST['l'];
$b=$_POST['b'];

interface shape
{
public function calcarea();
}
class circle implements shape
{
private $radius;
public function __construct($radius)
{
$this->radius=$radius;
}
public function calcarea()
{
return $this->radius*$this->radius*3.14;
}
}
class rectangle implements shape
{
private $length;
private $breadth;
public function
__construct($length,$breadth)
{
$this->length=$length;
$this->breadth=$breadth;
}
public function calcarea()
{
return $this->length * $this->breadth;
}
}
$circle=new circle($r);
$rect=new rectangle($l,$b);
echo "Radius of Circle = ".$r."<br>";
echo "Area &nbsp;of &nbsp; Circle = ". $circle->calcarea();
echo "<br><br>";
echo "Length&nbsp; of Rectangle = ".$l."<br>";
echo "Breadth of Rectangle = ".$b."<br>";
echo "Area&nbsp; of &nbsp;Rectangle &nbsp;= ".$rect->calcarea();
}
?>
</form>
</body>
</html>
