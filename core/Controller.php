<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller
{

    public string  $layout = 'main';
    public string $action = '';
    /** @var BaseMiddleware[] */
    protected array $middlewares = [];
    public static  function  render($views, $params = []){
        return Application::$app->router->renderView($views, $params);
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return array
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }


}