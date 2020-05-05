<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$logo = include_template('logo-shanti.php', [
    'title' => $title]);

$page_content = include_template('yoga-teachers.php', [
    'title' => $title]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'logo' => $logo,
    'page_content' => $page_content]);

print($layout_content);
