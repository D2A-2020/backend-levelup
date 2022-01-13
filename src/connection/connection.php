<?php

class Connection extends PDO{ 

    private const RUTA = "http://localhost:8080";
    private const DB_USER = "root";
    private const DB_PASSWORD = "root";
    private const DB_NAME = "levelup";
    private const HOST = "db";
    private const DNS = "mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME . ";charset=utf8";

    function __construct()
    {
       
        try {
              parent::__construct(self::DNS, self::DB_USER,self::DB_PASSWORD);

            
              return 0;
            }
       
        catch(PDOException $e)
            {
                echo $e;
            }
       
        $conexion = null;
        
    }

    public static function getConnection(){

        return $con = new PDO(self::DNS, self::DB_USER, self::DB_PASSWORD);
    }

    
}

?>