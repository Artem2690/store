<?php


namespace Core\base\controllers;


class RoutController
{
    static private $_instance;
    static public function getInstance(){
        return self::$_instance;
    }

}