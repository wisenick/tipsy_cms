<?php

// Проверяю легален ли доступ к файлу
defined('_TEXEC') or die;

// Глобальные объявления ====================================================

// Пути к файлам конфигурации
define ('_TPATH_CONFIG', _TPATH_ROOT . DIRECTORY_SEPARATOR . 'configs');

// Пути к include
define ('_TPATH_INCLUDE', _TPATH_ROOT . DIRECTORY_SEPARATOR . 'includes');

// Пути к библиотекам
define ('_TPATH_LIBRARIES', _TPATH_ROOT . DIRECTORY_SEPARATOR . 'libraries');

// Путь к уомпоненту визуализации
#define('_TPATH_VIEW', _TPATH_ROOT.DIRECTORY_SEPARATOR.'view');

// Путь к шаблонам
define('_TPATH_TEMPLATES', _TPATH_ROOT . DIRECTORY_SEPARATOR . 'templates');

?>