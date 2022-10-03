<?php

class Database{
    private static $db;

    public function __construct(){
        global $DB_DNS;
        global $option;
        if(!self::$db){
            self::$db = new PDO($DB_DNS,DATABASE_USER,DATABASE_PASSWORD,$option);
        }
    }
    public static function getPDO():\PDO{
        return self::$db;
    }

};