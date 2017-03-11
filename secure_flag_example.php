<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$secure = true;
$httponly = false;
//setcookie(    $name, $value, $expire, $path, $domain, $secure, $httponly )
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", "localhost", $secure, $httponly ); //
setcookie("hello", "world", time() + (86400 * 30), "/", "localhost", false, false ); // 86400 = 1 day
?>
<html>
<head>
	<script type="text/javascript">
		
		function readcookie() {
		
			alert(document.cookie);
		}
	</script>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];

}

if(!isset($_COOKIE["hello"])){
    echo "Cookie named '" . "hello" . "'is not set!";
} else {
    echo "Cookie '" . "hello" . "' is set!<br>";
    echo "Value is: " . $_COOKIE["hello"];

}
?>

<form onsubmit="readcookie()">
	

	<input type="submit" value="readcookie"/>
</form

</body>
</html> 
