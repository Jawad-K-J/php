<html>
<HEAD>
<TITLE>STATIC FUNCTION</TITLE>
</HEAD>
<body>

<?php
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'><H1 style='text-align: center;'>STATIC FUNCTION</H1>";
class employee
{
public static function ename()
{
echo "Employee name is Jawad";
}
public function __construct()
{
self::ename();
}
}
employee::ename();
echo"</form>";
?>
</body>
</html>
