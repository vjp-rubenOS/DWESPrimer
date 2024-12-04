<?php
class Router{
    private $routes;

    private function __construct(){
        $this->routes=[
            'GET'=>[],
            'POST'=>[]
        ];

    }
    public static function load(string $file):Router{
        $router= new Router();
        require $file;

        return $router;
    }

    public function get(string $uri,string $controller):void{
        $this->routes['GET'][$uri]=$controller;
    }

    public function post(string $uri,string $controller):void{
        $this->routes['GET'][$uri]=$controller;
    }
    

    //public function define(array $tablaRutas):void{
       // $this->routes=$tablaRutas;
    //}


    public function direct(string $uri,string $method):string{
        if(array_key_exists($uri,$this->routes[$method])){
            return $this->routes[$method][$uri];
        }else{
            throw new Exception('No se ha definido ruta');
        }
    }
}

?>