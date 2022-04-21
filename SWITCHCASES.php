<html>
<HEAD>
<TITLE>SWITCH CASES </TITLE>
</HEAD>
<body>
<form action="" method="post" style="background-color:#a4a9a5; height: 120px; width: 500px;" > 
<H1 style="text-align: center;">SWITCH CASES</H1>
<input type="text" name="num"placeholder="ENTER NUMBER ">
<button type="submit" name="month">FIND MONTH</button>
</form>


<?php  

if (isset($_POST['month']))
 {
$month=$_POST['num'];
echo"<form style='background-color:#dbdedc; height: 100px; width: 500px;'>";
echo"<br>";
switch ($month) 
{
            case 1:
                echo "The is Month of January!";
                break;
            case 2:
                echo "The is Month of February!";
                break;
            case 3:
                echo "The is Month of March!";
                break;
            case 4:
                echo "The is Month of April!";
                break;
            case 5:
                echo "The is Month of May!";
                break;
            case 6:
                echo "The is Month of June!";
                break;
            case 7:
                echo "The is Month of July!";
                break;
            case 8:
                echo "The is Month of August!";
                break;
            case 9:
                echo "The is Month of September!";
                break;
            case 10:
                echo "The is Month of October!";
                break;
            case 11:
                echo "The is Month of November!";
                break;
            case 12:
                echo "The is Month of December!";
                break;   
            default:
                echo "invalid choice";
                break;                                                                                             
}
echo"</form>";
}
?>
</body>
</html>
