<html>
<HEAD>
<TITLE>CONSTRUCTOR & DESTRUCTOR</TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">CONSTRUCTOR & DESTRUCTOR</H1>
<input type="text" name="fname"placeholder="FIRST NAME ">
<input type="text" name="lname"placeholder="LAST NAME ">
<button type="submit" name="entr">SUBMIT</button>
</form>
<?php
class Person {
private $fname;
 private $lname;
public function __construct($fname, $lname) {
echo "Initialising the object...<br/>"; 
$this->fname = $fname;
$this->lname = $lname;
}
public function __destruct()
{
echo "Destroying Object...";
}
public function showName() 
{
echo "My name is: " . $this->fname . " " . $this->lname . "<br/>"; 
}
}
if (isset($_POST['entr']))
{
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$new = new Person("$fname", "$lname");
$new->showName();
}    
?>
</body>
</html>
