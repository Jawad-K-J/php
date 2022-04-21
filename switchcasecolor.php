<html>
<HEAD>
<TITLE>SWITCH CASE</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 90px; width: 400px;" > 
<H1 style="text-align: center;">SWITCH CASE</H1>
<input type="text" name="color"placeholder="ENTER COLOR ">
<button type="submit" name="enter">ENTER</button>
</form>
<?php
if(isset($_POST['enter']))
{ 
echo"<form style='background-color:#dbdedc; height: 80px; width: 400px;'>";
echo"<br>";
$color=$_POST['color'];
switch($color)
{
case "RED":
echo"Entered Color is <b>$color</b><br>";
echo "Output = <b>HELLO</b><br>";
break;
case "GREEN":
echo"Entered Color is <b>$color</b><br>";
echo "Output = <b>WELCOME</b> <br>";
break;
default:
echo "Invalid Color";
break;   
}
echo"</form>";
}
?>
</body>
</html>
