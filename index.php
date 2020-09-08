<?php

require('init.php');

$title = 'Студия йоги и фитнеса';

$page_content = include_template('index.php', [
    'title' => $title]);

print($page_content);
