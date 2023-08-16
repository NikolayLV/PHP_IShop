<?php


namespace wfm;


abstract class Controller
{

    public array $data = [];
    public array $meta = ['title' => '', 'description' => '', 'keywords' => ''];
    public false|string $layout = '';
    public string $view = '';
    public string $model;

    public function __construct(public $route = []) {

    }

    public function getModel() {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        $this->model = $model;
    }

}