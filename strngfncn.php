<html>
<head>
<title>STRING FUNCTIONS</title>
</head>
<body>
<form action="" method="post">
Enter a string: <input type="text" name="str1"><br>
Enter a second string: <input type="text" name="str2"><br>
<button type="submit" name="len">LENGTH</button>
<button type="submit" name="rev">REVERSE</button>
<button type="submit" name="pos">POSITION</button>
<button type="submit" name="con">CONCATENATION</button>
<button type="submit" name="conassign">CONCAT & ASSIGN</button>
</form>
<?php
if (isset($_POST['len']))
{$l=$_POST['str1'];
 $x=$l;
 $l=strlen($l);
 echo"string=$x<br>";
 echo"length=$l";
}
if (isset($_POST['rev']))
{$r=$_POST['str1'];
 $x=$r;
 $r=strrev($r);
 echo"string=$x<br>";
 echo"reverse=$r";
}
if (isset($_POST['pos']))
{$p=$_POST['str1'];
 $x=$_POST['str2'];
 $position=strpos($p,$x);
 if(is_numeric($position))
 echo"$x found at $position";
 else
 echo"$x not found in $p";
}
if (isset($_POST['con']))
{$c1=$_POST['str1'];
 $c2=$_POST['str2'];
 $c=$c1.$c2;
echo"first string=$c1<br>";
 echo"second string=$c2<br>";
 echo"concatenated string=$c";
}
if (isset($_POST['conassign']))
{$c1=$_POST['str1'];
 $c2=$_POST['str2'];
 $str1=$c1;
 $str2=$c2;
 $c=$c1;
 $c.=$c2;
 echo"first string=$str1<br>";
 echo"second string=$str2<br>";
 echo"concat & assigned string=$c";
}
?>
</body>
</html>

