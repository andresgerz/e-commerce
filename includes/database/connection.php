<?php 

  require('config.php');
  
  class Connect {


    public static function Connection() {
  
      try {
        
        $connection_db=new PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME, DB_USER, DB_PASSWORD);

        $connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $connection_db->exec("SET CHARACTER SET UTF8");

        
      } catch(Exception $e) {
        die ("Error" . $e->getMessage());

        echo "Error line:" . $e->getLine();
      }
      
      return $connection_db;
    }
       
    }

?>