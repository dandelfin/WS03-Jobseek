<?php
class Router {
    private $routes = [];
    public function get($path, $handler) { $this->routes[$path] = $handler; }
    public function dispatch($path) {
        if (!isset($this->routes[$path])) { http_response_code(404); echo '404 Not Found'; return; }
        require $this->routes[$path];
    }
}
