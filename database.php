<?php
 
    class conexion
    {
        public static function conectar()
        {
            $port = "mysql:host=localhost; dbname=instagram; charset=utf8mb4";
            $options = [
                PDO::ATTR_EMULATE_PREPARES => FALSE,        
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC, 
            ];

            try
            {
                $PDO = new PDO($port, "root", "", $options);
                return $PDO;
            }
            catch(Exeception $e)
            {
                exit("error al conectar" . $e);
            }

            return false;
        }
    }