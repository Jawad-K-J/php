<html>
<HEAD>
<TITLE>FACTORIAL</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">FACTORIAL</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">
<button type="submit" name="fact">FIND</button>
</form>
<?php
if (isset($_POST['fact']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$num=$_POST['num'];
function factorial_of_a_number($n)
{
if($n ==0)
{
return 1;
}
else 
{	
return $n * factorial_of_a_number($n-1);
}
}
print_r("Factorial of <b>$num </b>= <b>".factorial_of_a_number($num)."</b>\n");
}
?>
</body>
</html>
