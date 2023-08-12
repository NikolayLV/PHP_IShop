<?php


namespace wfm;


class ErrorHandler
{

    public function __construct()
    {

        if (DEBUG) {
            error_reporting(-1);
        }
        else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);

    }

    public function exceptionHandler(\Throwable $e)
    {
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(),
            $e-> getLine(), $e->getCode());

    }

    protected function logError($message = '',$file = '', $line = '')
    {

        file_put_contents(
            LOGS . '/errors.log',
            "[" . data('Y-m-d H:i:s') . "]
             Текст ошибки: {$message} | Файл: {$file}
        | Строка: {$line}\n================\n",
        FILE_APPEND);

    }

    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 500)
    {

    }

}