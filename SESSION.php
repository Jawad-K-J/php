<?php
session_start();
?>
<html >
<head>
<title>SESSION</title>
</head>
<body>
<form enctype="multipart/form-data"  method="POST"  style="background-color:#a4a9a5; height: 160px; width: 400px;" >
<H1 style="text-align: center;">SESSION</H1>
Enter Name : <input type="text" name="name"> <br/> 
<br/>
<input type="submit" name="e" value="Enter">
<input type="submit" name="v" value="View ">
<input type="submit" name="d" value="Destroy">
</FORM>
<?php
if(isset($_POST['e']))
{ 
$_SESSION["sname"]=$_POST["name"];
}
if(isset($_POST['v']))
{ 
echo"<form style='background-color:#dbdedc; height: 90px; width: 400px;'>";
echo"<br>";
if(isset($_SESSION["sname"]))
{
echo "The Session Value = " . $_SESSION["sname"];
}
else
{
echo "All Sessions Destoyed !!";
}
echo"</form>";
}
if(isset($_POST['d']))
{ 
session_destroy();
}
?>
</body>
</html>
