<?php

namespace Source\Controllers;

use League\Plates\Engine;
use CoffeeCode\Router\Router;
use CoffeeCode\Optimizer\Optimizer;

abstract class Controller{

    protected $view;
    protected $router;
    protected $seo;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view  = Engine::create(dirname(__DIR__, "2")."/views", "php");
        $this->view->addData(["router" => $this->router]);

        $this->seo = new Optimizer();
        $this->seo->openGraph(site("name"), site("locale"), "article")
            ->publisher(SOCIAL["facebook_page"], SOCIAL["facebook_author"])
            ->twitterCard(SOCIAL["twitter_creator"], SOCIAL["twitter_site"], SITE["domain"])
            ->facebook(SOCIAL["facebook_appId"]);
    }



    public function ajaxResponse(string $param, array $values): string
    {
        return json_encode([$param => $values]);
    }

}