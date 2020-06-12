<?php

require('init.php');

$title = '"Ом Шанти" - Расписание йога классов';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = 'yoga.php';
$svg_color = 'yoga-colors__svg';
$inner_page_title = 'Расписание занятий';
$inner_page_schedule_style = 'schedule__inner';
$inner_page_schedule = 'schedule__list--shown';
$schedule_list = get_schedule($link);
$subscribtions = get_subscribtions($link);

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'svg_color' => $svg_color]);

$schedule = include_template('schedule.php', [
    'inner_page_schedule' => $inner_page_schedule,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$subscribing = include_template('subscribing.php', [
    'subscribtions' => $subscribtions]);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$page_element = include_template('inner-page-schedule.php', [
    'inner_page_schedule' => $inner_page_schedule,
	'schedule' => $schedule,
    'subscribing' => $subscribing]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
