<?php

namespace App;

use App\Exceptions\RouteNotFoundException;

class App
{
    private static DB $db;

    /**
     * @param Router $router
     * @param array $request
     * @param Config $config
     */
    public function __construct(
        protected Router $router,
        protected array $request,
        protected Config $config
        )
    {
        static::$db = new DB($config->db ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run()
    {
        try {
            echo $this->router->resolve($this->request['uri'], $this->request['method']);
        } catch (RouteNotFoundException $e) {
            //echo $e->getMessage() . PHP_EOL;

            //response status beállítása:
            header('HTTP/1.1 404 Not Found');
            //http_response_code(404);
            echo View::make('errors/404');
        }
    }

    public function index(): View
    {
        return View::make('index', ['title' => 'Home Page']);
    }
}