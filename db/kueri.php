<?php
include "./db/config.php";
/**
 * CATATAN : 
 * for QUERY FG::all("QUWEINYA MASUKIN SINI COEG");
 * 
 */
class FG 
{
    
    private static $conn;
    
    
    private function __construct()
    {
    
    }
    
   
    private static function connect()
    {
        if(!isset(self::$conn)){
           
            $dsn = "mysql:host=localhost;port=3306;dbname=db_fgraf";
            try{
                self::$conn = new PDO($dsn, "root", "");
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
            }catch(PDOException $e){
                self::disconnect();
                echo $e->getMessage();
            }
        }
        return self::$conn;
    }
    
    public static function disconnect(){
        self::$conn = null;
    }
    
   
    public static function execute($sql, $params = null)
    {
        try{
            $conn = self::connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
        }catch(PDOException $e){
            self::disconnect();
            echo $e->getMessage();
        }
    }
    
    public static function all($sql, $params = null, $fetch_style = PDO::FETCH_OBJ)
    {
        $result = null;
        try{
            $conn = self::connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetchAll($fetch_style);
        }catch(PDOException $e){
            self::disconnect();
            echo $e->getMessage();
        }
        return $result;
    }
    
    public static function row($sql, $params = null, $fetch_style = PDO::FETCH_OBJ)
    {
        $result = null;
        try{
            $conn = self::connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetch($fetch_style);
        }catch(PDOException $e){
            self::disconnect();
            echo $e->getMessage();
        }
        return $result;
    }
    
    
    public static function one($sql, $params = null)
    {
        $result = null;
        try{
            $conn = self::connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetch(PDO::FETCH_NUM);
            $result = $result[0];
        }catch(PDOException $e){
            self::disconnect();
            echo $e->getMessage();
        }
        return $result;
    }
}