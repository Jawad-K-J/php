<html>
<HEAD>
<TITLE>PRIME NUMBER </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">PRIME NUMBER</H1>
<input type="text" name="num1"placeholder="FROM ">
<input type="text" name="num2"placeholder="TO ">
<button type="submit" name="prime">FIND PRIME</button>
</form>

<?php

if (isset($_POST['prime']))
 {
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
$x=$_POST['num1'];
$y=$_POST['num2'];


echo "<br>The prime numbers from <b>$x</b> to <b>$y</b> are";

for ($i = $x; $i < $y; $i++) {
    
    if ($i == 1 || $i == 0)
        continue;
    
    $f = 1;
    
    for ($j = 2; $j < intval($i / 2) + 1; $j++) {
        if ($i % $j == 0) {
            $f = 0;
            break;
        }
    }
    if ($f == 1)
        echo "<b> ".$i."  </b>";
}

echo "\n";
echo"</form>";
 }
?>
</body>
</html>
