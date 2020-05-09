<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = 'yoga.php';
$yoga_svg = 'yoga-svg';
$schedule_list = get_schedule($link);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$page_content = include_template('schedule.php', [
	'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
