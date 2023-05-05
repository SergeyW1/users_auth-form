<?php

$connect = new mysqli("php-project-formauth", "root", "", "php_auth-form");

if (!$connect) {
	die("Error connect to DataBase");
}
