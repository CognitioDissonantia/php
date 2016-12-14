<?php
//Просто модель
abstract class Model {
    
    public static function Create(array $data = array()) {
        //Получаем имя текущего класса (если вызвали в Author, например)
        $className = get_called_class();
        $object = new $className();
        //Перебираем массив $data, устанавливаем свойства
        foreach($data as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }
}

?>