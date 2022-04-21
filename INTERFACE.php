<html>
<HEAD>
<TITLE>INTERFACE </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">INTERFACE</H1>
<input type="text" name="rad"placeholder="Enter radius">
<input type="text" name="hit"placeholder="Enter height">
<button type="submit" name="sub">FIND</button>
</form>
<?php
if (isset($_POST['sub']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$r=$_POST['rad'];
$h=$_POST['hit'];
define('PI','3.134');
echo "Radius = $r<br>";
echo "Height = $h<br>";
interface cyl
{
function area($r,$h);
function volume($r,$h);
}
class cylinder implements cyl
{
function area($r,$h)
{
$area=(2*PI*$h*$r)+(2*PI*$r*$r);
echo "Area of Cylinder= $area <br>";
}
function volume($r,$h)
{
$vol=PI*$r*$r*$h;
echo "Volume of Cylinder= $vol<br>";
}
}
$c=new cylinder;
$c->area($r,$h);
$c->volume($r,$h);
}
?>
</form>
 </body>
 </html>
