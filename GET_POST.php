<html>
<HEAD>
<TITLE>GET_POST</TITLE>
</HEAD>
<body  >
<table style="background-color:#a4a9a5; height: 220px; width: 550px;">
<td>
<form action="" method="GET"> 
<H1 style="text-align: center;">$_GET & $_POST</H1>
Name: <input type = "text" name = "name" placeholder="ENTER NAME " />
Age&emsp;&nbsp;: <input type = "text" name = "age" placeholder="ENTER AGE "/>
<button type="submit" name="sub1">&nbsp;GET&nbsp;</button>
</form>
<form action="" method="POST"> 
<br>
Palce&nbsp: <input type = "text" name = "place" placeholder="ENTER PLACE " />
Course: <input type = "text" name = "course" placeholder="ENTER COURSE "/>
<button type="submit" name="sub2">POST</button>
</form>
<?php
if (isset($_GET['sub1']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 550px;'>";
echo"<br>";
if( $_GET["name"] || $_GET["age"] ) 
{
echo "NAME&emsp;: ". $_GET['name']. "<br />";
echo "AGE&emsp;&emsp;: ". $_GET['age'];
}
}
if (isset($_POST['sub2']))
{
if( $_POST["place"] || $_POST["course"] ) 
{
echo "<br />PLACE&ensp;&nbsp;: ". $_POST['place']. "<br />";
echo "COURSE: ". $_POST['course'];
}
echo"</form>";
}
?>
</td>
</table>
</body>
</html>
