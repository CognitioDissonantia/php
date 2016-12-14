<?php
// модель данных "Статьи"
class Articles extends Model {
// Получаем все статьи:
    public static function All() {
        $data = DB::Get()->Select('SELECT * FROM articles');
        $result = array();
        foreach($data as $article) {
            $result[] = Article::Create($article);
        }
        return $result;

    }
// Получаем статью/статьи по заданному параметру:
    public static function Get($key, $value) {
        $data = DB::Get()->Select("SELECT * FROM articles WHERE $key = $value");
        $result = array();
        foreach($data as $article) {
            $result[] = Article::Create($article);
        }
        return $result;
    }
}

?>