<html>
<HEAD>
<TITLE>PALINDROME </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">CHECK PALINDROME </H1>
<input type="text" name="num"placeholder="NUMBER ">

<button type="submit" name="palind">CHECK</button>
</form>

<?php

if (isset($_POST['palind']))
 {
    echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
    echo"<br>";
$num=$_POST['num'];
$p=$num;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
$num = (int)($num / 10); 
}
 
if($revnum==$p)
{
echo $p." is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}
}
echo"</form>";
?>
</body>
</html>
