<?php

session_start();
require_once "connect.php";

$full_name = htmlentities($_POST['full_name']);
$login = htmlentities($_POST['login']);
$email = htmlentities($_POST['email']);
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

	$_FILES['avatar']['name'];
	$path = 'uploads/' . time() . $_FILES['avatar']['name'];
	if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
		$_SESSION['message'] = "Ошибка при загрузке файла";
		header('Location: ../register.php');
	}

	$password = md5($password);

	mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

	$_SESSION['message'] = "Регистрация прошла успешна";
	header('Location: ../index.php');
} else {
	$_SESSION['message'] = "Пароли не совпадают";
	header('Location: ../register.php');
}

?>

<pre>

<?php

print_r($_FILES);

?>

</pre>