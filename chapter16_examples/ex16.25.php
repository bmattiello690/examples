##### begin #####
##### login.html #####
<html>
<head>
<title>Simple login page</title>
</head>
<body>
<p>
 <a href="protected.php">Protected content</a>
</p>
<p> Type phpbee for both username and password </p>
 <form action="auth.php" method="post">
Username<br>
 <input type="text" name="username"><br>
Password<br>
 <input type="password" name="password"><br>
 <input type="hidden" name="login"><br>
<input type="submit">
<input type="reset">
</form>
</body>
</html>
##### login.html #####
##### end #####
