<html>
<HEAD>
<TITLE>TERNARY OPERATOR</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">TERNARY OPERATOR</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">
<button type="submit" name="ternary">CHECK</button>
</form>
<?php
if (isset($_POST['ternary']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$num=$_POST['num'];
$a="<b>$num</b> is Greater than <b>30</b>";
$b="<b>$num</b> is Smaller than <b>30</b>";
$c = $num > 30 ? $a : $b;
echo $c;
 }
?>
</body>
</html>
