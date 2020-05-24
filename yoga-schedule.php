<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = 'yoga.php';
$yoga_svg = 'yoga-svg';
$inner_page_title = 'Расписание занятий';
$inner_page_schedule = 'schedule__list--shown';
$inner_page_schedule_list_per_day = 'schedule__class-list-per-day--shown';
$schedule_list = get_schedule($link);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$page_element = include_template('schedule.php', [
    'inner_page_schedule' => $inner_page_schedule,
    'inner_page_schedule_list_per_day' => $inner_page_schedule_list_per_day,
	'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

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
