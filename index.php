<?php

require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt');

$file->write('Привет всем!');
$file->write('Привет всем!');
$file->write('Привет всем!');
$file->write('Привет всем!');
$file->write('Привет всем!');
