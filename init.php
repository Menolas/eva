<?php

error_reporting (E_ALL);
ini_set ('display_errors', 1);

require_once('functions.php');

$link = connect_db();

session_start();

$user = [];

if (isset($_SESSION['user'])) {
    $user = get_admin_by_id($link, $_SESSION['user']['id']);
}

$week_days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
