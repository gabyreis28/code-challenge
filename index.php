<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(SITE["root"]);

/*
 * Namespace dos controllers
 */
$router->namespace("Src\Controllers");

/*
 * Processar Rotas
 */
$router->group(null); 
$router->get("/", "Web:home", "web.home");
$router->post("/api", "Api:store", "api.store");
$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");

/*
 * Disparar Rotas
 */
$router->dispatch();

/*
 * Tratar errors dinâmicos 
 */
if ($router->error()) {
  $router->redirect("web.error", ["errcode" => $router->error()]);
}



