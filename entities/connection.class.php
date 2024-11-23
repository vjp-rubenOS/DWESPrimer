<?php
require_once 'entities/app.class.php';
require_once 'exceptions/appException.class.php';
    class Connection{
        public static function make(){

            // aqui habia codigo antes  para que utilizara utf8, cuando se produzca un error, para que no cierre la conexion y mejorar el rendimiento
            
            try{
                $config=App::get('config')['database'];
                $connection= new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                    );
            }catch(PDOException $error){
                //die($error->getMessage());
                throw new AppException(getErrorString(ERROR_CON_DB));
            }
            return $connection; 
        }
        
    }
?>