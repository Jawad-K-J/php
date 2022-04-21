<html>
<HEAD>
<TITLE>FIBONACCI SERIES </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">FIBONACCI SERIES</H1>
<input type="text" name="num"placeholder="ENTER LIMIT ">
<button type="submit" name="fibo">FIND SERIES</button>
</form>
<?php  
if (isset($_POST['fibo']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$lim=$_POST['num'];
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "Fibonacci series for first <b>$lim</b> numbers:";  
echo "\n";  
echo "<b>".$n1.' '.$n2."</b> ";  
while ($num < $lim-2 )  
{  
$n3 = $n2 + $n1;  
echo "<b>".$n3."</b> ";  
$n1 = $n2;  
$n2 = $n3;  
$num = $num + 1; 
}
echo"</form>";
} 
?>  
</body>
</html>
