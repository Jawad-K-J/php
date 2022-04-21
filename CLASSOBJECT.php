<html>
<HEAD>
<TITLE>CLASS & OBJECT</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">CLASS & OBJECT</H1>
<input type="text" name="name"placeholder="ENTER NAME ">
<input type="text" name="place"placeholder="ENTER PLACE ">
<button type="submit" name="entr">SUBMIT</button>
</form>
<?php
class details
{
public $name;
public $place;
}
$a = new details();
if (isset($_POST['entr']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$a->name=$_POST['name'];
$a->place=$_POST['place'];
echo"Name&nbsp;: $a->name <br>";
echo"Place&nbsp;&nbsp;: $a->place <br>";
}
?>
</body>
</html>
