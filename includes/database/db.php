<?php 
   
  $db_host="localhost";
  $db_user="root";
  $db_password="";
  $db_name="accounting_db"; 

  $connection=mysqli_connect($db_host,$db_user,$db_password);
  
  
  #catch errors
  if (mysqli_connect_errno()) {
    echo "<h3>Connection failed!</h3>";
    
    exit();
  }


  mysqli_select_db($connection, $db_name) or die ("Don't found database");

  $query="SELECT * FROM expenses";
  
  $results=mysqli_query($connection,$query);

  echo "<table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Service</th>
      <th scope='col'>Cost</th>
    </tr>
  </thead>
  <tbody>";
      
  while($row=mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo $row['expense_id'] . "</td><td>";
    echo $row['service'] . "</td><td>";
    echo $row['cost'] . "</td>";
    echo " </tr>"; 
  }
  echo "</tbody></table>";

  mysqli_close($connection);

?>