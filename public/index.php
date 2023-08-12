<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Нужна версия PHP >= 8');
}



require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();

throw new Exception('Возникла ошибочка');