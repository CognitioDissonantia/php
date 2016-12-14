<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'includes/smarty/Smarty.class.php';
include_once 'db.php';

function autoloadClasses($class) {
    //Функция, которая будет подгружать нам классы
    $file = 'controller/'.$class.'.php';
    if(!is_file($file)) {
        $file = 'models/'.$class.'.php';
        if(!is_file($file)) return;
    }
    include_once($file);
}

spl_autoload_register('autoloadClasses'); //Зарегистрируем её.

//По-умолчанию, вызывается контроллер Articles:
$controller = Controller::Get(isset($_GET['page']) ? $_GET['page'] : 'Homepage');
//Вызываем у него метод Show, туда спускаем действие и параметры $_GET и $_POST (внутри $_REQUEST):
$controller->Show(isset($_GET['action']) ? $_GET['action'] : 'index', $_REQUEST);

?>

