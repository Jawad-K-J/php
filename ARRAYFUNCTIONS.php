<html>
<HEAD>
<TITLE>ARRAY FUNCTIONS</TITLE>
</HEAD>
<body>
<form  style="background-color:#a4a9a5; width: 800px;" > 
<H1 style="text-align: center;">ARRAY FUNCTIONS</H1>
<H3>1.array_change_key_case()</H3>
<?php
function prntarry($arr)
{  
foreach( $arr as $s )
{
 echo "&nbsp;$s&nbsp; ";
}  
}  
$input_array=array("NaMe"=>"Jawad","pLaCe"=>"Aluva","CLasS"=>"Kollam");
echo"<b>Array:</b>";
print_r($input_array);
echo "<br>";
echo"<b>UPPER CASED  index:</b>";
print_r(array_change_key_case($input_array,CASE_UPPER));
echo "<br>";
echo"<b>lower cased  index:</b>";
print_r(array_change_key_case($input_array,CASE_LOWER));
?>
<br>
<H3>2.array_chunk()</H3>
<?php
$input_array = array('a', 'b', 'c', 'd');
echo"<b>Array:</b>";
print_r($input_array);
echo "<br>";
echo"<b>Splitted Array:</b>";
print_r(array_chunk($input_array, 2, true));
?>
<br>
<H3>3. count()</H3>
<?php
$input_array=array("Volvo","BMW","Toyota");
echo"<b>Array:</b>";
prntarry($input_array);
echo "<br>";
echo"<b>No.of Eelements in Array: </b>:";
echo count($input_array);
?>
<br>
<H3>4. sort()</H3>
<?php
$input_array=array("Volvo","BMW","Toyota");
echo"<b>Array:</b>";
prntarry($input_array);
echo "<br>";
echo"<b>Sorted Array:</b>";
sort($input_array);
prntarry($input_array);
?>
<br>
<H3>5. array_reverse()</H3>
<?php
$input_array=array("Volvo","BMW","Toyota");
echo"<b>Array:</b>";
prntarry($input_array);
echo "<br>";
echo"<b>Reversed Array:</b>";
$result_array=array_reverse($input_array);
prntarry($result_array);
?>
<br>
<H3>6. array_search()</H3>
<?php
$input_array=array("1"=>"red","2"=>"green","3"=>"blue");
echo"<b>Array:</b>";
prntarry($input_array);
echo "<br>";
echo"<b>Element is at : </b>";
echo array_search("red",$input_array);
?>
<br>
<H3>7. array_intersect()</H3>
<?php
$input_array1=array("red","green","blue","yellow");
$input_array2=array("red","green","blue");
echo"<b>Array 1:</b>";
prntarry($input_array1);;
echo"<br><b>Array 2:</b>";
prntarry($input_array2);
echo "<br>";
echo"<b>Intersected Array:</b>";
$result_array=array_intersect($input_array1,$input_array2);
prntarry($result_array);
?>
</form>
</body>
</html>
