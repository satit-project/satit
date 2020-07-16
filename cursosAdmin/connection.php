<?php
    class Database
    {
        private static $instace = NULL;
        function __construct(){}
        public static function getConnect()
        {
            if(!isset(self::$instace))
            {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instace = new PDO('mysql:host=localhost;dbname=satit', 'root', '',$pdo_options);
            }
            return self::$instace;
        }
    }
?>