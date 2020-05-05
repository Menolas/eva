<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';

$page_content = include_template('yoga-teachers.php', [
    'title' => $title]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'page_content' => $page_content]);

print($layout_content);
