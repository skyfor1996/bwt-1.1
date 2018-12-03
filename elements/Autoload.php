<?php

/**
 * Автозагрузка
 */

function __autoload($class_name)
{
    // Сформируем массив из папок, в которых будут находиться необходимые классы
    $array_paths = array(
        '/models/',
        '/elements/',
    );

    // Пройдём по массиву 
    foreach ($array_paths as $path) {

        // Сформируем имя и путь к файлу с классом
        $path = ROOT . $path . $class_name . '.php';

        // Если файл существует, подключаем его
        if (is_file($path)) {
            include_once $path;
        }
    }
}
