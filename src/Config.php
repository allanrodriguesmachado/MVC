<?php


/**
 * Site Config
 */
define("SITE", [
    "name" => "Allan Rodrigues",
    "desc" => "ogin em MVC com PHP Puro",
    "domain" => "allan.com.br",
    "locale" => "pt_BR",
    "root" => "http://localhost:8000/Login"
]);


/**
 * Site Minify
 */

if($_SERVER["SERVER_NAME"] == "localhost:8000"){
    require  __DIR__ . "/Minify.php";
}


/**
 * Conexão Database
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "login",
    "username" => "root",
    "passwd" => "83031410",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


/**
 * Social Config
 */
define("SOCIAL",[
   "facebook_page" => "allanrodriguesmachado",
    "facbook_author" => "allanrodrigues",
    "facebook_appId" => "1234243243243",
    "twitter_creator" => "@allanrodrigues",
    "twitter_site" => "@allanrodrigues"
]);

/**
 * Social Config
 */
define("FACEBOOK_LOGIN", []);


define("MAIL", []);