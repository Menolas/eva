<?php

require('init.php');

$title = 'Студия йоги и фитнеса - админ страничка';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'fitness.php';
$svg_color = 'yoga-colors__svg';
$inner_page_title = 'Админ страничка';

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'svg_color' => $svg_color]);

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
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
