<?php

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    /**
     * @param string $view
     * @param array $params
     */
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . $this->view . '.php';
        if (!file_exists($viewPath)){
            throw new ViewNotFoundException();
        }

        extract($this->params);

        ob_start();
        include $viewPath;

        return (string) ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}