<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Нужна версия PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS(__DIR__) . '/functions.php';
require_once CONFIG(__DIR__) . '/routes.php';

new \wfm\App();
