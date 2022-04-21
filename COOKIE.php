<?php  
setcookie("user", "Hello World");  
?>  
<html >
<head>
<title>COOKIE</title>
</head>
<body style="background-color:#a4a9a5;height: 160px; width: 200px;">
<H1 style="text-align: center;">COOKIE</H1> 
<?php  
if(isset($_COOKIE["user"])) 
{  
echo "<br/>Cookie Value: <b>" . $_COOKIE["text"]."</b>";  
}
else
{
echo "Sorry, cookie is not found!"; 
}  
?>  
</body>  
</html>  
