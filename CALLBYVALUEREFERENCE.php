<html>
<HEAD>
<TITLE>CALL BY VALUE & REFERENCE</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">CALL BY VALUE & REFERENCE</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">
<button type="submit" name="sh">SHOW</button>
</form>
<?php
if (isset($_POST['sh']))
{
echo"<form style='background-color:#dbdedc; height: 120px; width: 500px;'>";
echo"<br>";
$x=$_POST['num'];
$a=$_POST['num'];
echo"Entered Value Before Function Call :".$x."<br>";
function increment1($var)
{  
$var++;  
return $var;  
}  
increment1($a);  
echo"<b>FUCTION CALL BY VALUE</b><br>";
echo "Value After  Function Call :".$a."<br>"; //Output: 6 
}
function increment2(&$var)
{  
$var++;  
return $var;  
}  
increment2($x);  
echo"<b>FUCTION CALL BY REFERENCE</b><br>";
echo "Value After  Function Call :".$x."<br>"; //Output: 6 
?>
</body>
</html>
