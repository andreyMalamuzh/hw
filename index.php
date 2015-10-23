<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>GeekHub: homework #2</title>
</head>
<body>
	<?php
		require 'vendor/autoload.php';

		use Carbon\Carbon;

		printf("Сейчас: %s", Carbon::now());
	?>
	<form method="post">
		<input type="text" placeholder="Login" name="login">
		<input type="password" placeholder="Password" name="password">
		<input type="submit" name="log-in" value="Log In">
		<?php
			if (isset($_POST['log-in'])) {
				if (!empty($_POST['login']) && !empty($_POST['password'])) {
					$login = "pupkin24";
					$password = "123456";

					if (($login == $_POST['login']) && ($password == $_POST['password'])) {
						echo "Hello $login";
					} else {
						echo "Неверныый логин или пароль";
					}
					
				} else {
					echo "Заполните поля";
				}			
			}
		?>
	</form>
</body>
</html>