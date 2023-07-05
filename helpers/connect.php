<?php 
require_once __DIR__.'/../config/config.php';

class Database
{
    private static $_pdo;

    public static function getInstance()
    {
        if (is_null(self::$_pdo)){
            self::$_pdo = new PDO(DSN,USER,PASSWORD);
            self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return self::$_pdo;
    }
}













// function connect(){

//     $db = new PDO(DSN,USER,PASSWORD); //DSN Data Source Name / $db est un objet de type pdo 
//     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ); //setAttribute= methode elle att 2 param sert à modifier la valeur part default
//     return $db;

// }
