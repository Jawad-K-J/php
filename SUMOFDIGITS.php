<html>
<HEAD>
<TITLE>SUM OF DIGITS </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">SUM OF DIGITS</H1>
<input type="text" name="num"placeholder="ENTER DIGITS ">
<button type="submit" name="sum">SUM OF DIGITS</button>
</form>
<?php
if (isset($_POST['sum']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$num=$_POST['num'];
$d=$num;  
$sum=0; $rem=0;  
for ($i =0; $i<=strlen($num);$i++)  
{  
$rem=$num%10;  
$sum = $sum + $rem;  
$num=$num/10;  
}  
echo "Sum of digits <b>$d</b> is <b>$sum</b>";  
echo"</form>";
} 
?>  
</body>
</html>
