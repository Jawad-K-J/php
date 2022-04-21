<html>
<HEAD>
<TITLE>ARMSTRONG</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">ARMSTRONG NUMBER</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">
<button type="submit" name="amst">CHECK ARMSTRONG</button>
</form>
<?php
if (isset($_POST['amst']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$num=$_POST['num'];
$sum=0;
$temp=$num;
while($temp!=0)
{
$rem=$temp%10;
$sum=$sum+$rem*$rem*$rem;
$temp=$temp/10;
}
if($num==$sum)
{
echo "<b>$num</b> is Armstrong number";
}
else
{
echo "<b>$num</b> is not an Armstrong number";
}
echo"</form>";
} 
?>  
</body>
</html>
