<?php
session_start();

if (isset($_SESSION['user'])) {
	header('Location: progile.php');
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

	<!-- Форма регистрации -->

	<form action="/includes/signup.php" method="post" enctype="multipart/form-data">
		<label for="user_full-name">ФИО</label>
		<input type="text" name="full_name" id="user_full-name" placeholder="Введите свое имя">

		<label for="user_login">Логин</label>
		<input type="text" name="login" id="user_login" placeholder="Введите свой логин">

		<label for="user_mail">Почта</label>
		<input type="text" name="email" id="user_mail" placeholder="Введите адрес электронной почты">

		<label for="user_file">Изображения профиля</label>
		<input type="file" name="avatar" id="user_file">

		<label for="user_password">Пароль</label>
		<input type="password" name="password" id="user_password" placeholder="Введите пароль">

		<label for="user_password-confirm">Подтверждение пароля</label>
		<input type="password" name="password_confirm" id="user_password-confirm" placeholder="Подтвердите пароль">

		<button type="submit">Зарегистрироваться</button>
		<p>У вас уже есть аккаунт? - <a href="/index.php">Авторизируйтесь!</a></p>
		<?php
		if (isset($_SESSION['message'])) {
			echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
			unset($_SESSION['message']);
		}
		?>

	</form>

</body>

</html>