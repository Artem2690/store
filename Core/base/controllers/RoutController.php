<?php


namespace Core\base\controllers;


class RoutController
{
    static private $_instance;
    private function  __construct(){

    }
    private function __clone(){

    }
    static public function getInstance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self;
    }

}