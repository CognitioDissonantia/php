<?php
//Базовый класс контроллера
abstract class Controller implements IController {
    
    //Возвращает запрошенный в переменной $_GET['page'] контроллер
    public static function Get($controller) {
        $controller = 'controller_'.$controller;
        //Если такой класс подгрузить удалось, возвращаем новый объект контроллера
        if(class_exists($controller)) return new $controller();
        //Возвращаем ошибку
        return new controller_Errors();
    }
    
    //Отображает результат
    //$action - определённое действие, переданное из $_GET['action'];
    //$params - массив $_REQUEST
    public function Show($action = '', array $request = array()) {
        return '';
    }
    
    public function Output($file, array $params = array()) {
        $file = 'views/'.$file.'.html';
        $smarty = new Smarty();
        foreach($params as $key=>$value) {
            $smarty->assign($key, $value);
        }
        $smarty->display($file);
    }

    //Методы управления данными по-умолчанию
    //Массив $data в нижеследующих методах нужен, чтобы передать любые параметры
    protected function Index() {
        //Получить и обработать все элементы, относящиеся к определённому контроллеру
    } 
    
    protected function Create(array $data = array()) {
        //Создать новый элемент, отправить на сохранение
    }
    
    protected function Read(array $data = array()) {
        //Получить данные о конкретном элементе
    }
    
    protected function Update(array $data = array()) {
        //Изменить данные какого-либо элемента
    }
    
    protected function Delete(array $data = array()) {
        //Удалить элемент
    }
}