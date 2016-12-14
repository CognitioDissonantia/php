<?php
// Модель данных "Авторы"
class Authors extends Model {
// Получаем массив из всех авторов:
    public static function All() {
        $data = DB::Get()->Select('SELECT * FROM authors');
        $result = array();
        foreach($data as $author) {
            $result[] = Author::Create($author);
        }
        return $result;
    }
// Получаем авторов по определенному параметру:
    public static function Get($key, $value) {
        $data = DB::Get()->Select("SELECT * FROM authors WHERE $key = $value");
        $result = array();
        foreach($data as $author) {
            
            $result[] = Author::Create($author); 
        }
        return $result;
    }

}

?>