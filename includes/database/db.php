<?php 
  
  
  

  /* try {
    
    $connection=new PDO("mysql:host=" . $db_host . "; dbname=" . $db_name, $db_user, $db_password);
  
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connection->exec("SET CHARACTER SET utf8");

    $sql="SELECT * FROM expenses";

    $results=$connection->prepare($sql);

    $results->execute();


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
   
  
 */

?>