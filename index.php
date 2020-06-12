<?php

require('init.php');

$title = '"Спарта" - клуб физического комфорта';

$page_content = include_template('index.php', [
    'title' => $title]);

print($page_content);
