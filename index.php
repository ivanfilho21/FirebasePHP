<?php

require 'config.php';

$url = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);
$url = rtrim($url, '/');
view($url);
die;