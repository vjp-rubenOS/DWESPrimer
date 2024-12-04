<?php
class Router{
    private $routes;

    private function __construct(){
        $this->routes=[];

    }
    public static function load(string $file):Router{
        $router= new Router();
        require $file;

        return $router;
    }
    

    public function define(array $tablaRutas):void{
        $this->routes=$tablaRutas;
    }
    public function direct(string $uri):string{
        if(array_key_exists($uri,$this->routes)){
            return $this->routes[$uri];
        }else{
            throw new Exception('No se ha definido ruta');
        }
    }
}

?>