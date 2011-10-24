<?php
/**
 * Ustawienia dla serwera lokalnego
 */

/**
 * Ustawienia bazy danych
 */
$config['db']['params']['host']   = 'localhost';
$config['db']['params']['port']   = '3306';
$config['db']['params']['user']   = 'root';
$config['db']['params']['pass']   = '';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'social';
$config['db']['table']['prefix'] = 'lv_';

$config['path']['root']['web'] = 'http://localhost/ls';
$config['path']['root']['server'] = 'c:/xampp/htdocs/ls';
$config['path']['offset_request_url'] = '1';
$config['db']['tables']['engine'] = 'InnoDB';
$config['view']['name'] = 'Reformator.pl';
$config['view']['description'] = 'Reformator.pl';
$config['view']['keywords'] = 'Reformator.pl';
$config['view']['skin'] = 'developer';
$config['sys']['mail']['from_email'] = 'admin@admin.adm';
$config['sys']['mail']['from_name'] = 'Reformator.pl';
$config['general']['close'] = false;
$config['general']['reg']['activation'] = false;
$config['general']['reg']['invite'] = false;
$config['lang']['current'] = 'polish';
$config['lang']['default'] = 'polish';
return $config;
?>