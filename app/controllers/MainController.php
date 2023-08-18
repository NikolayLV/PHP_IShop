<?php


namespace app\controllers;


use RedBeanPHP\R;
use wfm\Controller;
/**
@property Main $model
 */
class MainController extends Controller
{

//    public false|string $layout = 'test2';


    public function indexAction() {
       // 'default' or 'ishop'
        $names = $this->model->get_names();
        $this->setMeta('Главная страница','Description','KeyWords');
        $this->layout = "ishop";
    }

}