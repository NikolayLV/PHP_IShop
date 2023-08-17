<?php


namespace app\controllers;


use wfm\Controller;

class MainController extends Controller
{

//    public false|string $layout = 'test2';


    public function indexAction() {
       // 'default' or 'ishop'
        $this->setMeta('Главная страница','Description','KeyWords');
        $this->layout = "ishop";
    }

}