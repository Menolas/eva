<?php

require('init.php');

$values = [];
$errors = [];
$title = 'Спарта - добавление админа';

// проверка отправлена ли форма

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// проверка влидности полей

	// валидность адреса электронной почты

    if (isset($_POST['email'])) {

    	$values['email'] = trim($_POST['email']);

    	if ($values['email'] !== '' && filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {

    		$emails = get_admins_emails($link);

    		foreach ($emails as $email) {
    			if ($email === $values['email']) {
    				$errors['email'] = 'Админ с таким емейлом уже существует';
    			}
    		}
    	} else {
    		$errors['email'] = 'Некорректно введен адрес электронной почты';
    	}
    } else {
    	$errors['email'] = 'Введите адрес электронной почты админа';
    }

    // валидность пароля

    if (isset($_POST['password'])) {
    	$values['password'] = trim($_POST['password']);

    	if ($values['password'] === '') {
    		$errors['password'] = 'Введите пароль';
    	} else {
    		$values['password'] = password_hash($values['password'], PASSWORD_DEFAULT);
    	}
    } else {
    	$errors['password'] = 'Введите пароль';
    }

    // валидность поля логина

    if (isset($_POST['login'])) {
    	$values['login'] = trim($_POST['login']);

    	if ($values['login'] === '') {
    		$errors['login'] = 'Введите логин';
    	}
    } else {
    	$errors['login'] = 'Введите логин';
    }

    if (count($errors) === 0) {
    	$res = db_insert_admin($link, $values['email'], $values['login'], $values['password']);

    	if ($res) {
    		header("Location: admin.php");
    		die;
    	}
    }
}

$page_content = include_template('adding-form.php', [
]);
