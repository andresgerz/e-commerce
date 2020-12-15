<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<?php 
   
  function search_service($searching_serv) {

    require("../vendor/autoload.php"); 
  
  
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();
    
  
    $db_host=getenv("DDBB_HOST");
    $db_user=getenv("DDBB_USER");
    $db_password=getenv("DDBB_PASSWORD");
    $db_name=getenv("DDBB_NAME"); 
    
  
    try {
      
      $connection=new PDO("mysql:host=" . $db_host . "; dbname=" . $db_name, $db_user, $db_password);
    
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      $connection->exec("SET CHARACTER SET utf8");
  
      $sql="SELECT * FROM expenses WHERE service = :serv";
  
      $results=$connection->prepare($sql);
  
      $results->execute(array(":serv"=>$searching_serv));
  
  
      echo "<table class='table table-hover'>
      <thead>
        <tr>
          <th scope='col'>#</th>
          <th scope='col'>Service</th>
          <th scope='col'>Cost</th>
        </tr>
      </thead>
      <tbody>";
          
      while($row=$results->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>";
        echo $row['expense_id'] . "</td><td>";
        echo $row['service'] . "</td><td>";
        echo $row['cost'] . "</td>";
        echo " </tr>"; 
      }
      echo "</tbody></table>";
  
      echo "Connection OK";
      
      $results->closeCursor();
  
    } catch(Exception $e) {
      die ('Error: ' . $e->getMessage() );
    
    } finally {
      $connection=null;
      
    }
     
    
  }
?>
  
</head>
<body>

 <?php
   $mySearch=$_GET["search"];

   $page=$_SERVER["PHP_SELF"];

   if($mySearch!=NULL) {
     search_service($mySearch);
   } else {
     echo("<form action='" . $page . "' method='get'>
         <label>Buscar: <input type='text' name='search'></label>
         <input type='submit' name='sending' value='send'>
       </form>");
     
   }
 ?>

</body>
</html>