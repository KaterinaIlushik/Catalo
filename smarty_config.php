<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 03.02.2016
 * Time: 19:02
 */
//Обьявление константы smarty dir, которая хранится в libs
define ("SMARTY_DIR", "libs/");
//Подключение основного класса смарти
require_once(SMARTY_DIR."Smarty.class.php");
//Создание дочернего класса от смарти
class Mysmarty extends Smarty{
    //обьявляем метод
    public function __construct(){
      // Обьявили потомок класса и создали базовые папки

        $this->setTemplateDir("templates/"); //наши шаблоны

        $this->setCompileDir("Templates_c/");//скомпилированные шаблоны

        $this->setConfigDir("config/"); //конфигурационные файлы шаблонов

        $this->setCacheDir("cache/");//кэш

        parent::__construct();
    }
}
