<?php
/**
* @var $errno \wfn\ErrorHandler
 * @var $errstr \wfn\ErrorHandler
 * @var $errfile \wfn\ErrorHandler
 * @var $errline \wfn\ErrorHandler
*/

?>




<!doctype html>
<html lang="en">
<head>
    <title>Error</title>
</head>
<body>
<h1>Произошла ошибка</h1>
<p><b>Код ошибки:</b><?= $errno ?></p>
<p><b>Текст ошибки:</b><?= $errstr ?></p>
<p><b>Файл, в котором произошла ошибка:</b><?= $errfile ?></p>
<p><b>Строка, в которой произошла ошибка:</b><?= $errline ?></p>

</body>
</html>