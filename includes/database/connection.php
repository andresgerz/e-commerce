<?php 

  require('config.php');
  
  class Connection {

    protected $connection_db;

    public function Connection() {
  
      try {
        
        $this->connection_db=new PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME, DB_USER, DB_PASSWORD);
        $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection_db->exec("SET CHARACTER SET utf8");

        return $this->connection_db;

      } catch(Exception $e) {
        echo "Error line:" . $e->getLine();
      }
      
      }
       
    }

?>