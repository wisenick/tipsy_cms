<?php
// Проверяю легален ли доступ к файлу.
defined('_TEXEC') or die;

// Подключаем класс загрузчика библиотек и компонентов системы.
require_once _TPATH_LIBRARIES . DIRECTORY_SEPARATOR . 'loader.php';

// Сканируем директорию с библиотеками на наличие библиотек классов, рекурсивно.
TLoader::discover('T', _TPATH_LIBRARIES, 'true');

TLoader::load('TLogger');

// Подключаю обработчик исключений
TLoader::load('TException');

// Сканирую директорию с файлами конфигурации на наличие библиотек классов.
TLoader::discover('T', _TPATH_CONFIG);

// Подключаю системный модуль.
TLoader::load('TSystem');

$System = new TSystem;

// Загружаю класс работы с БД
TLoader::load('TDatabase');

// Тестовая часть ---------------------------------------------------------------------------------------------------------

// Тестовое соединение с БД
TDatabase::connect(TConfig::$db_host, TConfig::$db_user, TConfig::$db_password, TConfig::$db_dbname, TConfig::$db_port, TConfig::$db_socket);

TLoader::load('TApplication');

// Создаем объект приложения
$app = new TApplication();
$app->Run();
#TApplication::run();
?>
