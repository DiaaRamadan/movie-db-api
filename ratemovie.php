<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="value" placeholder="Rate Value" required="required">
	<input type="text" name="session_id" hidden="hidden"> value="<?php echo $_SESSION['G_session']?>">
	<input type="submit" value="login">
</form>
</body>
</html>