<?php



/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);


session_start();

require __DIR__."/vendor/autoload.php";
use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");



//WEB
$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web.reset");


//AUTH

$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");




//AUTH SOCIAL




//PROFILE




//ERRORS
$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");



////ROUTE PROCESS
$router->dispatch();
//


//ERROS PROCESS
if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}

ob_end_flush();