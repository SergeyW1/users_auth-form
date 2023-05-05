<?php
session_start();

if (isset($_SESSION['user'])) {
	header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация и регистрация</title>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

	<!-- Форма авторизации -->

	<form action="includes/signin.php" method="post">
		<label for="user_login">Логин</label>
		<input type="text" id="user_login" name="login" placeholder="Введите свой логин">

		<label for="user_password">Пароль</label>
		<input type="password" name="password" id="user_password" placeholder="Введите пароль">

		<button type="submit">Войти</button>
		<p>У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь!</a></p>
		<?php
		if (isset($_SESSION['message'])) {
			echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
			unset($_SESSION['message']);
		}
		?>
	</form>

</body>

</html>