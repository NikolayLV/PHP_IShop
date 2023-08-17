<?php


namespace app\controllers;


use RedBeanPHP\R;
use wfm\Controller;

class MainController extends Controller
{

//    public false|string $layout = 'test2';


    public function indexAction() {
       // 'default' or 'ishop'
        $names = R::findAll('name');
        debug($names);
        $this->setMeta('Главная страница','Description','KeyWords');
        $this->layout = "ishop";
    }

}