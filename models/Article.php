<?php

//Модель данных "Статья"

class Article extends Model {
   
    
    //Создаёт модель автора, загружает в неё данные по идентификатору, возвращает
    public function GetAuthor($value) {
        return Author::Get('id', $value);
    }
    // Получаем статью по идентификатору:
    public static function Get($value) {
        // Здесь выполняется SQL-запрос типа SELECT * FROM ARTICLES WHERE $key=$value, возвращает результат в $data
        return Articles::Get('id', $value);
    }
   
    // Создаём объект модели данных:
    public static function Create(array $data = array()) {
        $object = parent::Create($data); //Вызываем родительский метод, где присваиваются базовые параметры и создаётся объект нужного класса
        $object->author = $object->GetAuthor($object->author)[0]; // Перезаписывает $author, заменяет его на объект "Автор"
        return $object;
    }
}
?>