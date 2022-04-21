<html>
<HEAD>
<TITLE>REVERSE OF NUMBER </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">REVERSE OF NUMBER</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">

<button type="submit" name="reverse">REVERSE</button>
</form>


<?php  

if (isset($_POST['reverse']))
 {
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
$num=$_POST['num'];
$num1=$num;   
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "<br>Reverse number of <b>$num1</b> is: <b>$revnum</b>";  
echo"</form>";
}
?>
</body>
</html>
