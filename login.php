<?php

require('init.php');

$inner_page_title = 'Неудачная попытка входа';
$title = 'Неудачная попытка входа';
$values = [];
$errors = [];
$admin = [];

$background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color = 'fitness-colors__border';
$pseudo_element = 'fitness-colors__pseudo-element';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$svg_color = 'fitness-colors__svg';

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'svg_color' => $svg_color,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'text_color' => $text_color]);

// проверка отправлена ли форма

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// проверяем валидность полей

	// валидность логина

	if (isset($_POST['login'])) {

		$values['login'] = trim($_POST['login']);

		if ($values['login'] !== '') {

			$admin = find_admin_by_login($link, $values['login']);
            
            if (!find_admin_by_login($link, $values['login'])) {

            	$errors['login'] = 'Админа с таким логином не существует';
            }
		}
	} else {

		$errors['login'] = 'Введите логин админа';
	}

	// соответствие пароля админу с введенным ранее логином

    if (isset($_POST['password'])) {

    	$values['password'] = trim($_POST['password']);

    	if ($values['password'] === '') {

    		$errors['password'] = 'Введите пароль';
    	} else {

    		if (password_verify($values['password'], $admin['password'])) {

    		} else {
    		  $errors['password'] = 'Неверный пароль';
    		}
    	}
    } else {

    	$errors['password'] = 'Введите пароль';
    }

    // если в массиве ошибок нет, то направляем админа на его страничку

    if (count($errors) === 0) {
    	$_SESSION['user'] = $admin;
    	header("Location: admin.php");
    	die;
    } else {
        var_dump($admin);
        var_dump($values);
        var_dump(password_verify($values['password'], $admin['password']));
        var_dump($errors);
    	$page_element = include_template('login.php', [
    	    'errors' => $errors,
    	    'values' => $values,
    	    'admin' => $admin]);

        $page_content = include_template('inner-page.php', [
            'inner_page_title' => $inner_page_title,
            'page_element' => $page_element]);

        $layout_content = include_template('layout.php', [
            'title' => $title,
            'background_color' => $background_color,
            'logo' => $logo,
            'main_menu' => $main_menu,
            'page_content' => $page_content]);

        print($layout_content);
        die();
    }
}

var_dump($errors);

$page_element = include_template('login.php', [
    'errors' => $errors,
    'values' => $values,
    'admin' => $admin]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
