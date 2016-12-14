<?php

// Константы класса DB:
define("DSN", "mysql:host=192.168.0.100;dbname=_study;charset=utf8");
define("USERNAME", "student");
define("PASSWORD", "temp12345");

//Спецкласс для данных о выполненном запросе
class QueryResult {
    public $resource; // query resource;
    public $affected; //affected rows
    public $id; // last insert id
    public $error; // error;
    
    public function __construct($error, $resource = null, $affected = null, $id = null) {
        $this->resource = $resource;
        $this->affected = $affected;
        $this->id = $id;
        $this->error = $error;
    }
} 

class DB {
    
    // DB по шаблону Singleton, поэтому нам нужен всего 1 экземпляр класса
    private static $_instance; 
    private $dbh; // переменная, в которой хранится ресурс PDO
    
    private function __construct() {
        try {
            $this->dbh = new PDO(DSN, USERNAME, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
        } catch (PDOException $e) {
            $err = new controller_Errors();
            return $err->Show();
            exit;
        }
    }
    
    public static function Get() {
        // Получаем инстанс DB
        if(self::$_instance == null) self::$_instance = new DB();
        return self::$_instance;
    }

    private function get_error(PDOStatement $sth = null) {
        if($sth === null) {
            $error = $this->dbh->errorInfo();
        } else {
            $error = $sth->errorInfo();
        }
        return $error[2];
    }
// Запрос:
    public function Query($query, array $params = array()) {
        $sth = $this->dbh->prepare($query);                  // Подготовить запрос
        //if($sth === false)                                   // Проверяем, есть ли ошибка на этом этапе
            //return new QueryResult($this->get_error());
        
        $sth->execute($params);                              // Выполняем запрос
        //if($sth->execute($params) === false)                 // Проверяем если ли ошибка на этом этапе:   
            //return new QueryResult($this->get_error($sth));
        
        return new QueryResult(false, $sth, $sth->rowCount(),$this->dbh->lastInsertId()); //Создать объект QueryResult с результатами выполнения запроса
    }
    
// Выборка данных:
    public function Select($query, array $params = array()) {
        //Выполняем запрос
        $sth = $this->Query($query, $params)->resource;
        //Вернуть ассоциативный массив с каждого ряда
        $result = $sth->fetchAll();
        return $result;
    }
}

//DB::Get()->Connect('192.168.0.100', '_study', 'student', 'temp12345');
//var_dump(DB::Get()->Select("SELECT * FROM authors WHERE $key = :value", array(':value'=>'2')));

?>