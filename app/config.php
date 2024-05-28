<?php

define ('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'siscesigue');

define('APP_NAME','SISTEMA DE GESTION ESCOLAR CESIGUE');
define('APP_URL','http://localhost/siscesigue');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "conexion exitosa a la base de datos";
}catch (PDOException $e){
    print_r($e);
   // echo "error no se pudo conectar a la base de datos";

}




