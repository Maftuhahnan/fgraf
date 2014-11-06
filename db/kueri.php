<?php
include "/db/config.php";
include "/konektor/db.php";
class db extends konfigdb{
    
    protected static function connect()
    { 
		
       $my = mysqli_connect(parent::$host,parent::$user,parent::$pass,parent::$db);
	   return $my;
	   if($my == null){
		die(mysql_error($my));
	   }
        
    }
    
}

class fg extends db{
	public static function all($param){
		$query = mysqli_query(self::connect(),$param)or die("Error".mysqli_error($query));
		return $query;
	}
	
	public function __destruct(){
		return mysqli_close($this->connect());
	}
}