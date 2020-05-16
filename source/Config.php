<?php


//SITE CONFIG

define("SITE", [
    "name" => "Auth com MVC em PHP",
    "desc" => "Aplicação do jeito certo em PHP",
    "domain" => "auth.com",
    "locale" => "pt-br",
    "root" => "http://localhost/codigo-aberto"
]);


//SITE MINIFY

if($_SERVER["SERVER_NAME"] == "localhost"){
    require __DIR__."/Minify.php";

}


//DATA BASE CONNECT

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "teste",
    "passwd" => "teste",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


//SOCIAL CONFIG
define("SOCIAL", [
    "facebook_page" => "facebook.com/jeffersonsevero",
    "facebook_author" => "jeffersonsevero",
    "facebook_appId" => "32131131",
    "twitter_creator" => "@jeffersonsevero",
    "twitter_site" => "site",
]);


//MAIL CONNECT
define("MAIL", [

]);


//FACEBOOK LOGIN
define("FACEBOOK_LOGIN", [

]);


//GOOGLE LOGIN
define("GOOGLE_LOGIN", [

]);






