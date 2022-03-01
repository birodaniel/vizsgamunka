<?php

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    /**
     * @param string $view
     * @param string $folder
     * @param array $params
     */
    public function __construct(protected string $view, protected string $folder, protected array $params = [])
    {
    }

    public static function make(string $view, string $folder, array $params = []): static
    {
        return new static($view, $folder, $params);
    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . $this->folder . $this->view . '.php';
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