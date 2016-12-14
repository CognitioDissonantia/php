<?php
//Модель данных "Автор"
class Author extends Model {
    
    public static function Get($key, $value) {
        return Authors::Get($key, $value);
    }

    public function GetArticles() {
        return Articles::Get('author', $this->id);
    }
} 

?>