<?php

require('init.php');

$title = '"Спарта" - админ';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'fitness.php';
$inner_page_title = 'Админ страничка';
$admins_list = get_admins_list($link);
$main_menu = include_template('main-menu.php', [
    'title' => $title]);

$page_element = include_template('admin.php', [
    'admins_list' => $admins_list]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
