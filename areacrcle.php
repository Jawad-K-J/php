<html>
<HEAD>
<TITLE>AREA OF A CIRCLE</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">AREA OF A CIRCLE</H1>
Enter the radius:
<input type="text" name="radius"  >
<input type="submit" name="submit">
</form>
<?php
define ('pi',3.14);
if(isset($_POST['submit']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
$r = $_POST['radius'];
$area = pi * $r * $r;
echo "<br>Radius of a Circle : <b>$r</b><br>";
echo "Area of a Circle  &ensp;&nbsp;: <b>$area</b>";
echo"</form>";
}
?>
</body>
</html>
