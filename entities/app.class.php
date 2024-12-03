<?php
require_once 'exceptions/appException.class.php';
require_once 'utils/const.php';
require_once 'entities/connection.class.php';
class App{

    private static $container=[];

    public static function bind($clave,$valor){
        self::$container[$clave]=$valor;
    }

    public static function get(string $key){
        if(!array_key_exists($key,self::$container)){
            throw new AppException(getErrorString(ERROR_APP_CORE));
        }
        return static::$container[$key];
    }
    public static function getConnection(){
        if(!array_key_exists('connection',self::$container)){
            self::$container['connection']= Connection::make();
            
        }
        return static::$container['connection'];

    }
}
?>