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
        $one_game = R::getRow( 'SELECT * FROM name WHERE id = 2');
        $this->setMeta('Главная страница','Description','KeyWords');
        $this->layout = "ishop";
    }

}