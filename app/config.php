<?php
return['database'=>[
    'name'=>'proyecto',
    'username'=>'user',
    'password'=>'user',
    'connection'=>'mysql:host=localhost',
    'options'=>[
        PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8', //Para utilizar alfabetos español
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,  //Cambia el modo error de PDO y genera excepciones
        PDO::ATTR_PERSISTENT=>true // Hace que la conexion siga abierta a la base de datos incluso despues de terminar script
    ]

]

    ];
?>