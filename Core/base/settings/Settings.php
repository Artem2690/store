<?php
//файл настроек фреймворка
//использован шаблон проектирования singleton

namespace core\base\settings;


class Settings
{
    static private $_instance;

    private $routes =[
      'admin'=>[
          'name'=>'admin',//url для входа в админ панель
          'path'=>'core/admin/controllers/',//пространство имен
          'hrUrl'=> false //Понятный для человека url

      ],
      'settings'=> [
           'path'=>'core/base/settings'//пространство имен

      ],
      'plugins'=>[
          'path'=>'core/plugins',//пространство имен
          'hrUrl'=> false //Понятный для человека url
      ],
      'user'=>[
          'path'=>'core/user/controllers/',//пространство имен
          'hrUrl'=> true, //Понятный для человека url
          'routes'=>[

              ]
      ],
      'default' => [
          'controller'=> 'IndexController',//Контроллер по умолчанию
          'inputMethod'=> 'InputData',//Метод по умолчанию сбора данних
          'outputMethod'=> 'OutputData' //Метод по умолчанию вывода данних
      ]
    ];
    //Защищаем от создания через new
    private function __construct(){

    }
    //Защищаем от создания через клонировани
    private function  __clone()
    {

    }

}