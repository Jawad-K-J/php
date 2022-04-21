<html>
<head><title>Program No 37</title>
</head>
<body>
<form action="" method="POST">
Enter Your Name :<input type="text" name="name"><br><br><br>
Enter Your Rollno :<input type="text" name="rno"><br><br><br>
Enter your Mail-id:<input type="text" name="mailid"><br><br><br>
<input type="submit" value="submit" name="submit">
</form>
<?php
extract ($_POST);
if(isset($submit))
{
$a=$name;
$b=$rno;
$c=$mailid;
$p="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+([\.a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(empty($a) && empty($b) && empty($c))
{
$errmsg="Fields are mandatory <br><br>";
echo $errmsg;
}
else
{

if(preg_match("/^['a-zA-Z'. -]*$/", $a))
{
echo $a."<br><br>";
}
else
{
echo "Name should not contain numerics <br><br>";
}

if(preg_match("/^['0-9']*$/", $b))
{
echo $b."<br><br>";
}
else
{
echo "Roll no Only contain numeric value<br><br>";
}

if(!preg_match($p,$c))
{
echo "invalid mail id <br><br>";
}
else
{
echo $c;
}
}
}
?>

</body>
</html>
