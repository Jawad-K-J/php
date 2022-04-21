<html>  
<head>  
<style>  
</style>  
</head>  
<body >
<div><h1>REGISTER FORM</h1></div>    
<form action="" method="post">
NAME   :<input type="text" name="name" placeholder="enter the name"><br><br>
ADDR:<textarea placeholder="enter address" name="address"></textarea><br><br>
PHONE  :<input type="text" name="num" placeholder="enter the phno"><br><br>
EMAIL  :<input type="text" name="email" placeholder="enter email"><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
<?php 
extract($_POST);
if(isset($submit)) 
{  
$name=$name;
$email=$email;
$address=$address;
$num=$num;
if (empty($name)) 
{  
$nameErr = "Name is required";  
echo $nameErr;
} 
else if (!preg_match("/^[a-zA-Z ]*$/",$name))
{  
$nameErr = "Only alphabets and white space are allowed";  
echo $nameErr;
}  
else
echo "NAME:".$name;
echo "<br>";
if (empty($address)) 
{  
$addressErr = "address is required";
echo $addressErr; 
echo"<br>";  
} 
else
echo "ADDRESS:".$address;  
if (empty($email))
{  
$emailErr = "Email is required";  
echo $emailErr ;
echo"<br>";   
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{  
$emailErr = "Invalid email format";  
echo $emailErr ; 
echo"<br>";  
}  
else
{
echo "<br>";  
echo "EMAIL:".$email; 
echo"<br>"; 
}
if (empty($num))
{  
$mobilenoErr = "Mobile no is required";  
echo $mobilenoErr;
echo"<br>";   
} else if (!preg_match ("/^[0-9]*$/", $num) )
{  
 $mobilenoErr = "Only numeric value is allowed.";  
echo $mobilenoErr; 
echo"<br>";  
}  
else if (strlen ($num) != 10) {  
$mobilenoErr = "Mobile no must contain 10 digits.";  
echo $mobilenoErr; 
echo"<br>"; 
}      
else
{
echo "<br>";  
echo "PHONE NUMBER:".$num; 
}
}
else 
{  
echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
}  
?>
</body>  
</html>  
