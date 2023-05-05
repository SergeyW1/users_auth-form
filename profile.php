<?php
session_start();


if (!isset($_SESSION['user'])) {
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация и регистрация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

	<!-- Профиль -->

	<form>
		<img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
		<h2><?= $_SESSION['user']['full_name'] ?></h2>
		<a href="#"><?= $_SESSION['user']['email'] ?></a>
		<a href='includes/logout.php' class="btn btn-outline-warning btn-rounded" data-mdb-ripple-color="dark">Выйти</a>
	</form>

</body>

</html>