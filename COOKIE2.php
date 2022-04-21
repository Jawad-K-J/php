<!DOCTYPE html>
<html>
<head><title>Program No 35</title></head>
<body>
<?php
$cookie_Name = "COOKIE_A";
$cookie_value = "IMPLEMENTATION OF COOKIE";
setcookie($cookie_Name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_Name])) {
echo "Cookie named '" . $cookie_Name." CREATED!!!";
}
else {
echo "Cookie '" . $cookie_Name . "' is UPDATED!<br>";
echo "Value is: " . $_COOKIE[$cookie_Name];
}
?>
</body>
</html>
