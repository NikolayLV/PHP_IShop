<?php


namespace wfm;


abstract class Controller
{

    public function __construct(public $route = []) {

    }

}