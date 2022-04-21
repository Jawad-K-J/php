
<html>
<HEAD>
<TITLE>MULTIPLE INTERFACE </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">MULTIPLE INTERFACE</H1>
<input type="text" name="name"placeholder="Enter Name">
<input type="text" name="rno"placeholder="Enter Rollno">
<input type="text" name="mr"placeholder="Total Mark">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" name="sub">SUBMIT</button>
</form>
<?php
if (isset($_POST['sub']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$x=$_POST['name'];
$y=$_POST['rno'];
$z=$_POST['mr'];

interface personal
{
public function prdetails();
}
interface exam
{
public function exdetails();
}
class student implements personal, exam{
private $name;
private $rno, $totalmr;
public function __construct($n, $r1,$mark) {
$this->name=$n;
$this->rno=$r1;
$this->totalmr=$mark;
}

public function prdetails(){
echo "Name&emsp;: ".$this->name. "<br>";
echo "Roll No :".$this->rno."<br>";
}
public function exdetails(){
echo "Total mark :".$this->totalmr."<br>";
}

}
$std=new student ($x,$y,$z);
$std->prdetails();
$std->exdetails();
}
?>
